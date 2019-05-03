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
			//��������� ������ ��������������� �����
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
".GetMessage("EVENT_MESSAGE_CALLTIME_TIME").": � #TIME#

".GetMessage("EVENT_MESSAGE_FOOTER_DESC").".
					"
				)
			);
			//��������� �������������� ���������� ��������� ������� ��� ���������� � ���������� ������.
			$ems = CEventMessage::GetList($by="", $order="desc", Array(				
					"TYPE_ID"       => "ORDER_CALL",				
					"ACTIVE"        => "Y",
					"SUBJECT"       => GetMessage("EVENT_MESSAGE_SUBJECT_DESC"),
					"BODY_TYPE"     => "text",
				)
			);
			if ($ems_el = $ems->Fetch())//��������� �������������� ��������� ������� � ���������� ������
				COption::SetOptionString("interra.callback","event_mess_id",$ems_el['ID']);
		}
	}
	
	static function IblockCreate()
	{
		CModule::IncludeModule('iblock');
		
		//�������� ������� ������������ ���� ���������
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
			//���� ��� ��������� ������� ��������, ����������� ��������
			{
				//��������� ������ ��������������� �����
				$arSites = array();
				$rsSites = CSite::GetList($by="sort", $order="desc", Array());
				while ($arSite = $rsSites->Fetch())
				{
					$arSites[] = $arSite['LID'];
				}				
				
				//��������� �������������� ���� ��������� ����� ����������� ���������
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
						//�������� ������� �������
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
						//��������� �������������� ��������� � ���������� ������
							COption::SetOptionString("interra.callback","iblock_id",$ib_id);
					}					
				}
			}
		}
	}
	
	static function Save(
	//���������� ������ � ��������
		$arFields = Array(	
			"AUTHOR", //����� ���������
			"AUTHOR_PHONE", //����� �������� ������ ��� ������
			"TIME", //�����
			"DAY" //����
			)
	)
    {
		//���������� ��������� ��� ���������� �������, ���� �� �����������
		CBKcall::IblockCreate();

		// ��������� �������������� ��������� �� �������� ������
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
	//�������� ������ ������ �� �����
		$arFields = Array(	
			"AUTHOR", //����� ���������
			"AUTHOR_PHONE", //����� �������� ������ ��� ������
			"TIME", //�����
			"DAY" //����
		)
	)
    {	
	
	
		//���������� ������ ���� ��������� ������� (ORDER_CALL) ��� �������� � ����������� ������
		CBKcall::EventTypeCreate();
		//���������� ������ ��������� ������� ��� ���� ��������� ������� ORDER_CALL
		CBKcall::EventMessageCreate();
		
		
		//������ �������

		$email_to=COption::GetOptionString("interra.callback","email");		
		if (strlen($email_to)==0)
			$email_to=COption::GetOptionString('main', 'email_from');		
		if (strlen($email_to)!=0)
		{			
			//��������� ������ ��������������� �����
			$arSites = array();
			$rsSites = CSite::GetList($by="sort", $order="desc", Array());
			while ($arSite = $rsSites->Fetch())
			{
				$arSites[] = $arSite['LID'];
			}
			
			//��������� �������������� ��������� ������� �� �������� ������
			$event_mess_id=COption::GetOptionString("interra.callback","event_mess_id");			
			//��������� ����� ���� ��������� ������� ��� ����������� �������������� ��������� �������			
			$ems = CEventMessage::GetByID($event_mess_id);
			
			if ($ems_el=$ems->Fetch())
				$event_name=$ems_el["EVENT_NAME"];
			//��������� email ���������� ����� ��������� ���������
			$arFields["EMAIL_TO"]=$email_to;									
			
			CEvent::Send($event_name, $arSites, $arFields, "N", $event_mess_id);			
		}
			
    }
	
	static function SendSMS(
	//�������� ������ ������ �� ��������� �������
		$arFields = Array(	
			"AUTHOR", //����� ���������
			"AUTHOR_PHONE", //����� �������� ������ ��� ������
			"TIME", //�����
			"DAY" //����
		)		
	)
	{
		// ��������� ��������� login � api key �� �������� ������ ��� ����������� ������������� ������ smsc.ru
		$smsc_login=COption::GetOptionString("interra.callback","smsc_login");
		$smsc_passw=COption::GetOptionString("interra.callback","smsc_passw");		
		
		//��������� ������ �������� �� �������� ������ ��� �������� �� ���� ��������� ���
		$phone=COption::GetOptionString("interra.callback","phone");
		
		$message=
GetMessage("EVENT_MESSAGE_PHONE_DESC").": #AUTHOR_PHONE#"."\n".GetMessage("EVENT_MESSAGE_CALLTIME_DESC").":
#CALL_TIME_TEXT#";

			//��������� �������� ������ ������� ��� ��������
			$arFields["CALL_TIME_TEXT"] = $arFields["DAY"]." � ".$arFields["TIME"];
			$message=str_replace("#AUTHOR_PHONE#",$arFields["AUTHOR_PHONE"],$message);
			$message=str_replace("#CALL_TIME_TEXT#",$arFields["CALL_TIME_TEXT"],$message);
		
		
		// ����������� ������ smsc ��� �������� ��� ���������
		define("SMSC_LOGIN", $smsc_login);			// ����� �������
		define("SMSC_PASSWORD", $smsc_passw);	// ������ ��� MD5-��� ������ � ������ ��������
		require($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/interra.callback/classes/main/smsc_api.php");
		// ��������� ����� �����������
		$sender=COption::GetOptionString("interra.callback","smsc_sender_name");

		// �������� ���
		$res = send_sms($phone, $message);
	}
	
	static function Order(
		$arFields = Array(	
			"AUTHOR", //����� ���������
			"AUTHOR_PHONE", //����� �������� ������ ��� ������
			"TIME", //�����
			"DAY" //����
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