<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<?

$res = CIBlockElement::GetList(
    [],
    [
        'ACTIVE' => 'Y',
        "PROPERTY_ELEM" => $arResult["ID"]
    ],
    false,
    false,
    [
        'ID',
        'IBLOCK_ID',
        'NAME',
        'PROPERTY_SIZE',
        'PROPERTY_PRICE'
    ]
);
while ($arPrice = $res->Fetch()) {
    $arResult["PRICES"][] = [
        "ID" => $arPrice["ID"],
        "NAME" => $arPrice["NAME"],
        "SIZE" => $arPrice['PROPERTY_SIZE_VALUE'],
        "PRICE" => $arPrice['PROPERTY_PRICE_VALUE']
    ];
}
array_unshift($arResult['MORE_PHOTO'], $arResult['DETAIL_PICTURE']);
if (!empty($arResult['MORE_PHOTO'])) {
    foreach ($arResult['MORE_PHOTO'] as &$arPhoto) {
        $arTmp = CFile::ResizeImageGet(
            $arPhoto,
            ['width' => 200, 'height' => 200],
            BX_RESIZE_IMAGE_EXACT
        );
        $arPhoto['PREVIEW'] = $arTmp;
    }
}
