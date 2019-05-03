<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

	foreach($arResult["ELEMENT"] as $key=>$val){
		$razm = CIBlockElement::getbyid($val["ID"]);
		while($razm1 = $razm->GetNextElement()){
			$razm12 = $razm1->GetFields();
			$arResult["ELEMENT"][$key]["DETAIL_PAGE_URL"] = $razm12["DETAIL_PAGE_URL"];
		}
	}
?>