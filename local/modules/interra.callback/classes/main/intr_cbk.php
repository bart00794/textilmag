<?
IncludeModuleLangFile(__FILE__);
?>
<?
class CBKcall{
    
	static function EventTypeCreate()
	{
		$et = new CEventType;
		$ru_ets = CEventType::GetByID("ORDER_CALL","ru");
		if (!$ru_ets_el = $ru_ets->Fetch())
		{
			$et->Add(array(
				"LID"           => "ru",
				"EVENT_NAME"    => "ORDER_CALL",
				"NAME"          => GetMessage("EVENT_NAME_DESC"),
				"DESCRIPTION"   => "
					#AUTHOR# - ".GetMessage('AUTHOR_DESC')."
					#AUTHOR_PHONE# - ".GetMessage('AUTHOR_PHONE_DESC')."
					#TIME# - ".GetMessage('CALL_TIME_DESC')."
					#DAY# - ".GetMessage('CALL_DATE_DESC')."
					#EMAIL_TO# - ".GetMessage('EMAIL_DESC')."
				"
			));
		}
		$en_ets = CEventType::GetByID("ORDER_CALL","en");
		if (!$en_ets_el = $en_ets->Fetch())
		{
			$et->Add(array(
				"LID"           => "en",
				"EVENT_NAME"    => "ORDER_CALL",
				"NAME"          => "Order Call",
				"DESCRIPTION"   => "
					#AUTHOR# - Message author
					#AUTHOR_PHONE# - Author's phone number
					#TIME# - Call time
					#DAY# - Call day
					#EMAIL_TO# - Recipient's e-mail address
				"
			));
		}
	}
	
	
	static function EventMessageCreate()
	{
		$ems = CEventMessage::GetList($by="", $order="desc", Array(				
				"TYPE_ID"       => "ORDER_CALL",				
				"ACTIVE"        => "Y",
				"SUBJECT"       => GetMessage("EVENT_MESSAGE_SUBJECT_DESC"),
				"BODY_TYPE"     => "text",
			)
		);
		if (!$ems_el = $ems->Fetch())
		{
			//Получение масива идентификаторов сайта
			$arSites = array();
			$rsSites = CSite::GetList($by="sort", $order="desc", Array());
			while ($arSite = $rsSites->Fetch())
			{
				$arSites[] = $arSite['LID'];
			}
		
			$emess = new CEventMessage;
			$res = $emess->Add(Array(
					"ACTIVE" => "Y",
					"EVENT_NAME" => "ORDER_CALL",
					"LID" => $arSites,
					"EMAIL_FROM" => "#DEFAULT_EMAIL_FROM#",
					"EMAIL_TO" => "#EMAIL_TO#",					
					"SUBJECT" => GetMessage("EVENT_MESSAGE_SUBJECT_DESC"),
					"BODY_TYPE" => "text",
					"MESSAGE" => 
GetMessage("EVENT_MESSAGE_HEADER_DESC")." #SITE_NAME#
------------------------------------------

".GetMessage("EVENT_MESSAGE_ACT_DESC")."

".GetMessage("EVENT_MESSAGE_AUTHOR_DESC").": #AUTHOR#
".GetMessage("EVENT_MESSAGE_PHONE_DESC").": #AUTHOR_PHONE#

".GetMessage("EVENT_MESSAGE_CALLTIME_DESC").":
".GetMessage("EVENT_MESSAGE_CALLTIME_DAY").": #DAY#
".GetMessage("EVENT_MESSAGE_CALLTIME_TIME").": с #TIME#

".GetMessage("EVENT_MESSAGE_FOOTER_DESC").".
					"
				)
			);
			//Получение идентификатора созданного почтового шаблона для сохранения в настройках модуля.
			$ems = CEventMessage::GetList($by="", $order="desc", Array(				
					"TYPE_ID"       => "ORDER_CALL",				
					"ACTIVE"        => "Y",
					"SUBJECT"       => GetMessage("EVENT_MESSAGE_SUBJECT_DESC"),
					"BODY_TYPE"     => "text",
				)
			);
			if ($ems_el = $ems->Fetch())//Установка идентификатора почтового шаблона в настройках модуля
				COption::SetOptionString("interra.callback","event_mess_id",$ems_el['ID']);
		}
	}
	
	static function IblockCreate()
	{
		CModule::IncludeModule('iblock');
		
		//Проверка наличия необходимого типа инфоблока
		$db_iblock_type = CIBlockType::GetList(array(),array("ID"=>"cbk_callback"));
		if (!$ar_iblock_type = $db_iblock_type->Fetch())
		{
			$arFields = Array(
				'ID'=>'cbk_callback',
				'SECTIONS'=>'Y',
				'IN_RSS'=>'N',
				'SORT'=>100,
				'LANG'=>Array(
					'ru'=>Array(
							'NAME'=>GetMessage("IBLOCK_TYPE_NAME_DESC"),
							'SECTION_NAME'=>GetMessage("IBLOCK_TYPE_SECTION_DESC"),
							'ELEMENT_NAME'=>GetMessage("IBLOCK_TYPE_ELEMENT_DESC")
						),
					'en'=>Array(
							'NAME'=>'Orders call list',
							'SECTION_NAME'=>'Sections',
							'ELEMENT_NAME'=>'Orders call'
						)
					)
			);
			
			$obBlocktype = new CIBlockType;
			
			if ($res = $obBlocktype->Add($arFields))
			//Если тип инфоблока успешно добавлен, добавляется инфоблок
			{
				//Получение масива идентификаторов сайта
				$arSites = array();
				$rsSites = CSite::GetList($by="sort", $order="desc", Array());
				while ($arSite = $rsSites->Fetch())
				{
					$arSites[] = $arSite['LID'];
				}				
				
				//Получение идентификатора типа инфоблока перед добавлением инфоблока
				$db_iblock_type = CIBlockType::GetByID("cbk_callback");
				if ($ar_iblock_type = $db_iblock_type->Fetch())
					$iblock_type_id=$ar_iblock_type["ID"];
				
				$db_iblock = CIBlock::GetList(array(),array("CODE"=>"cbk_callback"),true);
				if (!$ar_iblock = $db_iblock->Fetch())
				{
					$ib = new CIBlock;
					$arFields = Array(
						"ACTIVE" => "Y",
						"IBLOCK_TYPE_ID" =>$iblock_type_id,
						"NAME" => GetMessage("IBLOCK_NAME_DESC"),
						"CODE" => "cbk_callback",
						"SITE_ID" => $arSites,						
						"DESCRIPTION" => GetMessage("IBLOCK_DESC")
					);
					
					if ($ib_id = $ib->Add($arFields))
					{
						//Проверка наличия свойств
						$db_iblock_prop = CIBlockProperty::GetList(array(),array('IBLOCK_ID'=>$ib_id));
							if (!$ar_iblock_prop = $db_iblock_prop->Fetch())
							{
								$pb = new CIBlockProperty;
								$arFields = null;
								$arFields[0] = Array(
									"IBLOCK_ID" => $ib_id,
									"NAME" => GetMessage("IBLOCK_PROP_NAME"),
									"ACTIVE" => "Y",
									"SORT" => "100",
									"CODE" => "NAME"
								);
								$arFields[1] = Array(
									"IBLOCK_ID" => $ib_id,
									"NAME" => GetMessage("IBLOCK_PROP_PHONE"),
									"ACTIVE" => "Y",
									"SORT" => "200",
									"CODE" => "PHONE"
								);								
								$arFields[2] = Array(
									"IBLOCK_ID" => $ib_id,
									"NAME" => GetMessage("IBLOCK_PROP_DAY"),
									"ACTIVE" => "Y",
									"SORT" => "300",
									"CODE" => "DAY"
								);
								$arFields[3] = Array(
									"IBLOCK_ID" => $ib_id,
									"NAME" => GetMessage("IBLOCK_PROP_TIME"),
									"ACTIVE" => "Y",
									"SORT" => "400",
									"CODE" => "TIME"
								);
								foreach ($arFields as $arItem) {
									$pb->Add($arItem);
								}
							}
						//Установка идентификатора инфоблока в настройках модуля
							COption::SetOptionString("interra.callback","iblock_id",$ib_id);
					}					
				}
			}
		}
	}
	
	static function Save(
	//Сохранение заказа в инфоблок
		$arFields = Array(	
			"AUTHOR", //Автор сообщения
			"AUTHOR_PHONE", //Номер телефона автора для звонка
			"TIME", //Время
			"DAY" //День
			)
	)
    {
		//Добавление инфоблока для сохранения заказов, если он отсутствует
		CBKcall::IblockCreate();

		// Получение идентификатора инфоблока из настроек модуля
		$iblock_id=COption::GetOptionString("interra.callback","iblock_id");

		$ib_elem = new CIBlockElement;
		
		$elname = GetMessage("CBK_HEAD_MAIL").$arFields['AUTHOR'];

		$props = Array();
		$props["NAME"] = $arFields['AUTHOR'];
		$props["PHONE"] = $arFields['AUTHOR_PHONE'];
		$props["DAY"] = $arFields['DAY'];
		$props["TIME"] = $arFields['TIME'];

		$arLoadOrderArray = Array(
			"IBLOCK_ID" => $iblock_id,
			"PROPERTY_VALUES" => $props,
			"NAME" => $elname,
			"ACTIVE" => "Y"
		);

		$res=$ib_elem->Add($arLoadOrderArray);
	}
    static function SendEmail(
	//Отправка заказа звонка на почту
		$arFields = Array(	
			"AUTHOR", //Автор сообщения
			"AUTHOR_PHONE", //Номер телефона автора для звонка
			"TIME", //Время
			"DAY" //День
		)
	)
    {	
	
	
		//Добавление нового типа почтового события (ORDER_CALL) для русского и английского языков
		CBKcall::EventTypeCreate();
		//Добавление нового почтового шаблона для типа почтового события ORDER_CALL
		CBKcall::EventMessageCreate();
		
		
		//Логика функции

		$email_to=COption::GetOptionString("interra.callback","email");		
		if (strlen($email_to)==0)
			$email_to=COption::GetOptionString('main', 'email_from');		
		if (strlen($email_to)!=0)
		{			
			//Получение масива идентификаторов сайта
			$arSites = array();
			$rsSites = CSite::GetList($by="sort", $order="desc", Array());
			while ($arSite = $rsSites->Fetch())
			{
				$arSites[] = $arSite['LID'];
			}
			
			//Получение идентификатора почтового шаблона из настроек модуля
			$event_mess_id=COption::GetOptionString("interra.callback","event_mess_id");			
			//Получение имени типа почтового события для полученного идентификатора почтового шаблона			
			$ems = CEventMessage::GetByID($event_mess_id);
			
			if ($ems_el=$ems->Fetch())
				$event_name=$ems_el["EVENT_NAME"];
			//Установка email получателя перед отправкой сообщения
			$arFields["EMAIL_TO"]=$email_to;									
			
			CEvent::Send($event_name, $arSites, $arFields, "N", $event_mess_id);			
		}
			
    }
	
	static function SendSMS(
	//Отправка заказа звонка на мобильный телефон
		$arFields = Array(	
			"AUTHOR", //Автор сообщения
			"AUTHOR_PHONE", //Номер телефона автора для звонка
			"TIME", //Время
			"DAY" //День
		)		
	)
	{
		// Получение заничений login и api key из настроек модуля для дальнейшего использований класса smsc.ru
		$smsc_login=COption::GetOptionString("interra.callback","smsc_login");
		$smsc_passw=COption::GetOptionString("interra.callback","smsc_passw");		
		
		//Получение номера телефона из настроек модуля для отправки на него сообщений СМС
		$phone=COption::GetOptionString("interra.callback","phone");
		
		$message=
GetMessage("EVENT_MESSAGE_PHONE_DESC").": #AUTHOR_PHONE#"."\n".GetMessage("EVENT_MESSAGE_CALLTIME_DESC").":
#CALL_TIME_TEXT#";

			//Заполняем почтовый шаблон данными для отправки
			$arFields["CALL_TIME_TEXT"] = $arFields["DAY"]." в ".$arFields["TIME"];
			$message=str_replace("#AUTHOR_PHONE#",$arFields["AUTHOR_PHONE"],$message);
			$message=str_replace("#CALL_TIME_TEXT#",$arFields["CALL_TIME_TEXT"],$message);
		
		
		// Подключение класса smsc для отправки СМС сообщений
		define("SMSC_LOGIN", $smsc_login);			// логин клиента
		define("SMSC_PASSWORD", $smsc_passw);	// пароль или MD5-хеш пароля в нижнем регистре
		require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/interra.callback/classes/main/smsc_api.php");
		// Получение имени отправителя
		$sender=COption::GetOptionString("interra.callback","smsc_sender_name");

		// отправка СМС
		$res = send_sms($phone, $message);
	}
	
	static function Order(
		$arFields = Array(	
			"AUTHOR", //Автор сообщения
			"AUTHOR_PHONE", //Номер телефона автора для звонка
			"TIME", //Время
			"DAY" //День
		)
	)
	{		
		if (COption::GetOptionString("interra.callback","email_use")=="Y")
		{
			CBKcall::SendEmail($arFields);			
		}
		if (COption::GetOptionString("interra.callback","phone_use")=="Y")
		{
			CBKcall::SendSMS($arFields);			
		}
		if (COption::GetOptionString("interra.callback","iblock_use")=="Y")
		{
			CBKcall::Save($arFields);			
		}
	}
}
?>