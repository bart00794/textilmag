<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

foreach ($arResult['ITEMS'] as &$arItem){
//    dump($arItem);
    if(!empty($arItem['PREVIEW_PICTURE']))
        $arImage = CFile::GetFileArray($arItem['PREVIEW_PICTURE']);
    elseif(!empty($arItem['DETAIL_PICTURE']))
        $arImage = CFile::GetFileArray($arItem['DETAIL_PICTURE']);
//    dump($arImage);
    if(!empty($arImage)){
        $img = CFile::ResizeImageGet($arImage,['width'=>70,'height'=>80],BX_RESIZE_IMAGE_EXACT,true);
        $arItem['PICTURE']['SRC'] = $img['src'];
    }
}