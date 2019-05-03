<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
$arFilters = Array(
    array(
	"name" => "watermark",
	"position" => "center",
	"size"=>"real",
	"file"=>$_SERVER['DOCUMENT_ROOT']."/upload/whatermark.png")
);
if(!empty($arResult)){
	array_unshift($arResult["MORE_PHOTO"], $arResult["DETAIL_PICTURE"]);
	foreach($arResult["MORE_PHOTO"] as &$arPhoto){
		$arDI = CFile::ResizeImageGet(
			$arPhoto,
			array("width" => 1000, "height" => 1000),
			BX_RESIZE_IMAGE_PROPORTIONAL,
			true,
			$arFilters
		);
		$arPhoto["whater"]=$arDI;
		$arFileTmp = CFile::ResizeImageGet(
			$arPhoto,
			array("width" => 100, "height" => 100),
			BX_RESIZE_IMAGE_EXACT,
			true
		);
		$arPhoto["small"]=$arFileTmp;
	}
}

// hack
//$arResult["PRICES"]=null;
$res = CIBlockElement::GetList(array(),array("PROPERTY_ELEM"=>$arResult["ID"]));
while($ob = $res->GetNextElement()){ 
 $arFields = $ob->GetFields();  
 $arProps = $ob->GetProperties();
 //pp($arProps["RAZMER"]["VALUE"]);
 //if(!empty($arProps["RAZMER"]["VALUE"])) $arResult["RAZMERY"][]=$arProps["RAZMER"]["VALUE"];
$arResult["PRICES"][] = array("ID"=>$arFields["ID"],"NAME"=>$arProps["RAZMER"]["VALUE"],"PRICE"=>$arProps["PRICE"]["VALUE"]);
}



if (!is_array($arResult['SECTION']))
{
	$dbRes = CIBlock::GetByID($arResult['IBLOCK_ID']);
	if ($arIBlock = $dbRes->GetNext())
	{
		$arIBlock["~LIST_PAGE_URL"] = str_replace(
			array("#SERVER_NAME#", "#SITE_DIR#", "#IBLOCK_TYPE_ID#", "#IBLOCK_ID#", "#IBLOCK_CODE#", "#IBLOCK_EXTERNAL_ID#", "#CODE#"),
			array(SITE_SERVER_NAME, SITE_DIR, $arIBlock["IBLOCK_TYPE_ID"], $arIBlock["ID"], $arIBlock["CODE"], $arIBlock["EXTERNAL_ID"], $arIBlock["CODE"]),
			strlen($arParams["IBLOCK_URL"])? trim($arParams["~IBLOCK_URL"]): $arIBlock["~LIST_PAGE_URL"]
		);
		$arIBlock["~LIST_PAGE_URL"] = preg_replace("'/+'s", "/", $arIBlock["~LIST_PAGE_URL"]);
		$arIBlock["LIST_PAGE_URL"] = htmlspecialcharsbx($arIBlock["~LIST_PAGE_URL"]);
		
		$arResult['IBLOCK'] = $arIBlock;
	}
}
?>