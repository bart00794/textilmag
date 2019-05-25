<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

if (0 < $arResult['SECTIONS_COUNT']) {
    foreach ($arResult['SECTIONS'] as $key => &$arSection) {
        if(empty($arSection['PICTURE'])){
            $res['src'] = "https://via.placeholder.com/300.png";
        }else{
            $res = CFile::ResizeImageGet(
                $arSection["PICTURE"],
                ['width'=>300,'height'=>300],
                BX_RESIZE_IMAGE_EXACT,
                true
            );
        }
        $arSection['PICTURE'] = $res;
//        dump($res);
    }
}