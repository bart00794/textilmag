<?
include($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

use Bitrix\Main\Context;

$request = Context::getCurrent()->getRequest();

if ($request->isPost() && $request->isAjaxRequest() && check_bitrix_sessid()) {
    $arItem = [];
    $arPost = $request->getPostList()->toArray();
    $arSKUs = array_filter($arPost, function ($value, $key) {
        return $value > 0 && preg_match("/^sku_\w+$/", $key);
    },
        ARRAY_FILTER_USE_BOTH
    );
    $intItem = (int)$request->getPost('id_item');
    foreach ($arSKUs as $k => $item) {
        $code = str_replace("sku_", "", $k);
        $arItems[$intItem][(int)$code] = (int)$item;
    }

    CBitrixComponent::includeComponentClass('sergar:cart');
    echo SergarCartComponent::addItem($arItems);
}

