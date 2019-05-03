<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("main");
CJSCore::Init(array('ajax'));
function printsumma() {
	  $count = 0;
	  $summa = 0;
		  foreach ( $_SESSION['BASKET'] as $index=>$val ) { 
			$count = $count + 1;
				$arFilter = Array("ID"=>$index, "ACTIVE"=>"Y");
				$res = CIBlockElement::GetList(Array(), $arFilter);
				while($ob = $res->GetNextElement()){ 
					$arProps = $ob->GetProperties();		
						$summa = $summa + $val * $arProps['SALE']['VALUE'];
			}
		  }
			echo CUtil::PhpToJSObject(array(
					'COUNT' => $count,
					'BASKET' => $summa,
					'TEXTCOUNT' => format_by_count($count, 'товар', 'товара', 'товаров')
		   ));
}
if (isset($_REQUEST['delelement']) && $_REQUEST['delelement'] == 'Y'  ) {
	$GLOBALS['APPLICATION']->RestartBuffer();
	  unset($_SESSION['BASKET'][$_GET['elementid']]);
	  printsumma();
	die();
} elseif (isset($_REQUEST['updateelement']) && $_REQUEST['updateelement'] == 'Y'  ) {
	$GLOBALS['APPLICATION']->RestartBuffer();
		$_SESSION['BASKET'][$_GET['elementid']] = $_GET['count'];
		printsumma();
	die();	
} elseif(isset($_REQUEST['ajax_form']) && $_REQUEST['ajax_form'] == 'Y'){
   $GLOBALS['APPLICATION']->RestartBuffer();
			foreach ($_POST as $key => $value) 
			{ 
			 $array[$key] = iconv("UTF-8", "CP1251",$value);
			 }
			 if ($arParams['EMAIL_TO']) {
				$array['email_to'] = $arParams['EMAIL_TO'];
			 } else {
				$array['email_to'] = htmlspecialcharsbx(COption::GetOptionString("main", "email_from"));
			 }
		if (CEvent::Send($arParams['SHABLON_IDS'], SITE_ID, $array)) {
			echo CUtil::PhpToJSObject(array(
					'RESULT' => 'OK',
					'ERROR' => ''
		   ));
		}
   die();
} else {
	$this->IncludeComponentTemplate();

}	
?>