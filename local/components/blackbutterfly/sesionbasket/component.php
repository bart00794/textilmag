<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("main");
CJSCore::Init(array('ajax'));
function getbasketelems(){
	$arResult=null;
	$inde=0;
	foreach($_SESSION['BASKET'] as $key=>$val) {
		$arElem = CIBlockElement::GetList(array(),array("IBLOCK_ID"=>"2","ID"=>$key));
		while($arElem1 = $arElem->GetNextElement()){
			$arElem_fields = $arElem1->GetFields();
			//$arElem_prop = $arElem1->GetProperties();
			$inde3=count($val);
			for ($inde2=0; $inde2++<$inde3;$inde++) {
				$tekush = each($val);
				$arResult["ELEMENT"][]=array("ID"=>$arElem_fields["ID"],"NAME"=>$arElem_fields["NAME"],"RAZMERID"=>$tekush["key"],"NUMBER"=>$tekush["value"],"DETAIL_PICTURE"=>$arElem_fields["DETAIL_PICTURE"],"DETAIL_PAGE_URL"=>"http://".$_SERVER["HTTP_HOST"].$arElem_fields["DETAIL_PAGE_URL"]);
			}
			$inde = $inde+1;
		}
	}
	foreach($arResult["ELEMENT"] as $key=>$val){
		$razm = CIBlockElement::GetList(array(),array("PROPERTY_ELEM"=>$val["ID"]));
		while($razm1 = $razm->GetNextElement()){
			$razm_fields = $razm1->GetFields();
			$razm12 = $razm1->GetProperties();
			$isxrazid = $razm_fields["ID"];
			if($isxrazid == $val["RAZMERID"]){
				$arResult["ELEMENT"][$key]["RAZMER"]=$razm12["RAZMER"]["VALUE"];
				$arResult["ELEMENT"][$key]["PRICE"]=$razm12["PRICE"]["VALUE"];
			}
		}
	}
	return $arResult;

}
function getbasketsumm(){
	$summ=0;
	$arResult = getbasketelems();
	foreach($arResult["ELEMENT"] as $key=>$val){
		$summ=$summ + $val["NUMBER"]*$val["PRICE"];
	}
	return $summ;
}

function printsumma() {
	  $count = 0;
	  $summa = 0;
	  CModule::IncludeModule('iblock');
	  CModule::IncludeModule("main");
	  CJSCore::Init(array('ajax'));
		  foreach ( $_SESSION['BASKET'] as $index=>$val ) { 
				$count = $count + 1;
				$arFilterss = Array("ID"=>$index, "ACTIVE"=>"Y");
				$res = CIBlockElement::GetList(Array(), $arFilterss);
				while($ob = $res->GetNextElement()){ 
						$arProps = $ob->GetProperties();		
						$summa = $summa + $val * $arProps['SALE']['VALUE'];
				}
		  }
			echo $summa;
			/*
			echo CUtil::PhpToJSObject(array(
					'COUNT' => $count,
					'BASKET' => $summa,
					'TEXTCOUNT' => format_by_count($count, GetMessage("TOVAR1"),GetMessage("TOVAR2"),GetMessage("TOVAR3"))
		   ));
		   */
}


if (isset($_REQUEST['delelement']) && $_REQUEST['delelement'] == 'Y'  ) {
	$GLOBALS['APPLICATION']->RestartBuffer();
	if(count($_SESSION['BASKET'][$_GET['elementid']])>1){
		unset($_SESSION['BASKET'][$_GET['elementid']][$_GET['razmer']]);
	} else {
		unset($_SESSION['BASKET'][$_GET['elementid']]);
	}
	echo getbasketsumm();
	die();
} elseif (isset($_REQUEST['updateelement']) && $_REQUEST['updateelement'] == 'Y'  ) {
	$GLOBALS['APPLICATION']->RestartBuffer();
		$_SESSION['BASKET'][$_GET['elementid']][$_GET['razmer']] = $_GET['count'];
		echo getbasketsumm();
	die();	
} elseif(isset($_REQUEST['ajax_form']) && $_REQUEST['ajax_form'] == 'Y'){
   $GLOBALS['APPLICATION']->RestartBuffer();
			if ($arParams['EMAIL_TO']) {
				$arOtpr['EMAIL_TO'] = $arParams['EMAIL_TO'];
			} else {
				$arOtpr['EMAIL_TO'] = htmlspecialcharsbx(COption::GetOptionString("main", "email_from"));
			}
			$arOtpr["NAME"]=iconv("UTF-8", "CP1251",$_REQUEST["nameform"]);
			$arOtpr["MAIL"]=iconv("UTF-8", "CP1251",$_REQUEST["mailform"]);
			$arOtpr["PHONE"]=iconv("UTF-8", "CP1251",$_REQUEST["phoneform"]);
			$arOtpr["DOSTAV"]=iconv("UTF-8", "CP1251",$_REQUEST["dostavka"]);
			$arOtpr["ADRESS"]=iconv("UTF-8", "CP1251",$_REQUEST["adressform"]);
			$arOtpr["KOMENT"]=iconv("UTF-8", "CP1251",$_REQUEST["textform"]);
			$arResult = getbasketelems();
			$basketval = '<table border="1" cellpadding="0" cellspacing="0" >
						   <tr>
							 <th style="width: 50px;" align=center >'.GetMessage("NUMBER").'</th>
							 <th style="width: 300px;" align=center>'.GetMessage("NAME").'</th>
							 <th style="width: 90px;" align=center>'.GetMessage("RAZMER").'</th>
							 <th style="width: 90px;" align=center>'.GetMessage("CENA").'</th>
							 <th style="width: 80px;" align=center>'.GetMessage("COUNT").'</th>
							 <th style="width: 90px;" align=center>'.GetMessage("SUMMA").'</th>	 
						   </tr>  ';	
			 $number = 0;
			 $cena = 0; 
			 foreach($arResult["ELEMENT"] as $index=>$val) {
				$ind=$index+1;
			  $basketval.= '<tr>
							 <td align=center>'.$ind.'</td>
							 <td align=left><a href="'.$val["DETAIL_PAGE_URL"].'">'.$val['NAME'].'</a></td>
							 <td align=center>'.$val['RAZMER'].'</td>
							 <td align=center>'.number_format($val['PRICE'], 2, '.', ' ' ).' '.GetMessage("RUB").'</td>
							 <td align=center>'.$val["NUMBER"].'</td>
							 <td align=center>'.number_format($val["NUMBER"]*$val['PRICE'], 2, '.', ' ' ).' '.GetMessage("RUB").'</td>
						   </tr>';
						$number = $number + $val["NUMBER"];
						 $cena = $cena + $val["NUMBER"]*$val['PRICE'];
						}  
			   $basketval.='
			   <tr>
				<td colspan="4" style="text-align: left;" ><span style="margin-left: 10px;" ><strong>'.GetMessage("ITOG").':</strong></span></td>
				<td  align=center><strong>'.$number .'</strong></td>
				<td  align=center><strong>'.number_format($cena, 2, '.', ' ' ).' '.GetMessage("RUB").'</strong></td>
			   </tr></table>';	
			   
		$arOtpr['ZAKAZ'] = $basketval;
		echo $basketval;		
		//pp($array);	

			$arSites = array();
			$rsSites = CSite::GetList($by="sort", $order="desc", Array());
			while ($arSite = $rsSites->Fetch())
			{
				$arSites[] = $arSite['LID'];
			}
			
			
			
			//Получение идентификатора почтового шаблона из настроек модуля
			$event_mess_id="9";			
			//Получение имени типа почтового события для полученного идентификатора почтового шаблона			
			$ems = CEventMessage::GetByID($event_mess_id);
			
			if ($ems_el=$ems->Fetch()) $event_name=$ems_el["EVENT_NAME"];
			//Установка email получателя перед отправкой сообщения
			//$array['basket']
			if(CEvent::Send($event_name, $arSites, $arOtpr, "N", $event_mess_id)) {
			echo CUtil::PhpToJSObject(array(
					'RESULT' => 'OK',
					'ERROR' => ''
			));
			}
		unset($_SESSION['BASKET']);
   die();
} else {
	
	$arResult = getbasketelems();
	$arResult["SUMM"] = getbasketsumm();
	$this->IncludeComponentTemplate();

}	
?>