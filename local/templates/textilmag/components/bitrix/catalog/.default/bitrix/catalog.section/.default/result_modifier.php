<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<?

foreach ($arResult['ITEMS'] as &$arItem)
{
	$res = CIBlockElement::GetList(array(),array('ACTIVE'=>'Y','PROPERTY_ELEM'=>$arItem["ID"]),false,false,['ID','IBLOCK_ID','NAME','PROPERTY_ELEM','PROPERTY_PRICE']);
	while($arPrice = $res->Fetch()){
	    $arItem['PRICE'][] = intval($arPrice['PROPERTY_PRICE_VALUE']);
	}
	$arItem['DISPLAY_PRICE'] = min($arItem['PRICE']);


	if(!empty($arItem['PREVIEW_PICTURE'])){
	    $arImage = $arItem['PREVIEW_PICTURE'];
    }elseif(!empty($arItem['DETAIL_PICTURE'])){
        $arImage = $arItem['DETAIL_PICTURE'];
    }else{
        $arImage = CFile::MakeFileArray("https://via.placeholder.com/420x540");
    }
	$arFileTmp = CFile::ResizeImageGet(
        $arImage,
		array("width" => 350, "height" => 400),
        BX_RESIZE_IMAGE_EXACT,
		true
	);
    $arItem["PICTURE"] = [
        'SRC' => $arFileTmp['src'],
        'HEIGHT' => $arFileTmp['height'],
        'WIDTH' => $arFileTmp['width'],
        'FULL' => $arImage
    ];
}
