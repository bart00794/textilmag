<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?

foreach ($arResult['ITEMS'] as $key => $arItem)
{
	$arItem['PRICES']['PRICE']['PRINT_VALUE'] = number_format($arItem['PRICES']['PRICE']['PRINT_VALUE'], 0, '.', ' ');
	$arItem['PRICES']['PRICE']['PRINT_VALUE'] .= ' '.$arItem['PROPERTIES']['PRICECURRENCY']['VALUE_ENUM'];
	
	$arResult['ITEMS'][$key] = $arItem;
	
	$res = CIBlockElement::GetList(array(),array("PROPERTY_ELEM"=>$arItem["ID"]));
	$elemnext=0;
	$itogprice = 0;
	while($ob = $res->GetNextElement()){
		$arFields = $ob->GetFields();  
		$arProps = $ob->GetProperties();
		$elemnext=$arProps["PRICE"]["VALUE"];
		if($elemnext<$itogprice || $itogprice == 0) {
			$itogprice = $elemnext;
		}
	}
	$arResult['ITEMS'][$key]["PRICE"] = $itogprice;

}
$arFilters = Array(
   array(
	"name" => "watermark",
	"position" => "center",
	"size"=>"real",
	"file"=>$_SERVER['DOCUMENT_ROOT']."/upload/textilmag.png")
);

foreach ($arResult['ITEMS'] as $key=>$arItem)
{
	
	$arFileTmp = CFile::ResizeImageGet(
		$arItem['DETAIL_PICTURE']["ID"],
		array("width" => 190, "height" => 285),
		BX_RESIZE_IMAGE_PROPORTIONAL,
		true,
		$arFilters
	);

	$arResult['ITEMS'][$key]["DETAIL_PICTURE"] = array(
		'SRC' => $arFileTmp["src"],
		'WIDTH' => $arFileTmp["width"],
		'HEIGHT' => $arFileTmp["height"],
	);
}

?>