<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;

class SergarCartComponent extends CBitrixComponent
{
    const NAME = 'CART';

    function onPrepareComponentParams($arParams)
    {

    }

    protected function getItems()
    {
        $arCard = $_SESSION['BASKET'];
        if (count($arCard) > 0) {
            $arSkus = [];
            foreach ($arCard as $intProductId => $arSku) {
                $arItem = CIBlockElement::GetList(
                    [],
                    ['ACTIVE' => 'Y', 'ID' => $intProductId],
                    false,
                    false,
                    [
                        'IBLOCK_ID',
                        'ID',
                        'NAME',
                        'PREVIEW_PICTURE',
                        'DETAIL_PICTURE',
                        'DETAIL_PAGE_URL'
                    ]
                )->GetNext();
                foreach ($arSku as $intIdSKU => $intCountSku) {
                    $arSku = CIBlockElement::GetList(
                        [],
                        ['ACTIVE' => 'Y', 'ID' => $intIdSKU,'PROPERTY_ELEM'=>$arItem['ID']],
                        false,
                        false,
                        [
                            'IBLOCK_ID',
                            'ID',
                            'NAME',
                            'PROPERTY_PRICE',
                            'PROPERTY_SIZE',
                            'PROPERTY_ELEM'
                        ]
                    )->Fetch();
                    $arSkus[] = [
                        'ID' => $arItem['ID'],
                        'NAME' => $arItem['NAME'],
                        'PREVIEW_PICTURE' => $arItem['PREVIEW_PICTURE'],
                        'DETAIL_PICTURE' => $arItem['DETAIL_PICTURE'],
                        'DETAIL_PAGE_URL' => $arItem['DETAIL_PAGE_URL'],
                        'SKU_ID' => $arSku['ID'],
                        'PRICE' => $arSku['PROPERTY_PRICE_VALUE'],
                        'PRICE_TOTAL' => (int)$arSku['PROPERTY_PRICE_VALUE'] * (int)$intCountSku,
                        'COUNT' => $intCountSku,
                        'SIZE' => $arSku['PROPERTY_SIZE_VALUE'],
                    ];
                }
            }
            $this->arResult['ITEMS'] = $arSkus;
        }
    }

    /**
     * Функция для добавления товаров в корзину(сессию)
     *
     * @param array $items
     * @return false|string
     */
    public static function addItem($items = [])
    {
        if (!empty($items)) {
            $intItem = key($items);
            $card = &$_SESSION['BASKET'];
            if (is_array($card[$intItem])) {
                foreach ($items[$intItem] as $key => $val) {
                    if (isset($card[$intItem][$key])) {
                        $card[$intItem][$key] += $val;
                    } else {
                        $card[$intItem][$key] = $val;
                    }
                }
            } else {
                $card[$intItem] = $items[$intItem];
            }
            return json_encode(['status' => true]);
        }
        return json_encode(['status' => 'error']);
    }

    function executeComponent()
    {
        if (!Loader::includeModule('iblock'))
            die();
        $this->getItems();

        $this->includeComponentTemplate();
    }
}