<? if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
CModule::IncludeModule("main");
CJSCore::Init(array('ajax'));

function getsbasketelems(){
	$arResult=null;
	$inde=0;
	foreach($_SESSION['BASKET'] as $key=>$val) {
		$arElem = CIBlockElement::GetList(array(),array("IBLOCK_ID"=>"1","ID"=>$key));
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
function getsbasketsumm(){
	$summ=0;
	$arElem = getsbasketelems();
	foreach($arElem["ELEMENT"] as $key=>$val){
		$summ=$summ + $val["NUMBER"]*$val["PRICE"];
	}
	return $summ;
}
function getsbasketamount(){
	$arElem = getsbasketelems();
	$amount = count($arElem["ELEMENT"]);
	return $amount;
}

	
	$arResult["AMOUNT"] = getsbasketamount();
	$arResult["SUMM"] = getsbasketsumm();
	$this->IncludeComponentTemplate();

	
?>