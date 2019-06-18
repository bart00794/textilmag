<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Loader;
use Bitrix\Main\Context;
use Bitrix\Main\Mail\Event;
use Bitrix\Main\Localization\Loc;

class SergarCartComponent extends CBitrixComponent
{
    const NAME = 'CART';

    function onPrepareComponentParams($arParams)
    {
        return $arParams;
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
                        'DETAIL_PAGE_URL',
                        'PROPERTY_SKU_SIZE'
                    ]
                )->GetNext();
                foreach ($arSku as $intIdSKU => $intCountSku) {
                    $arSku = CIBlockElement::GetList(
                        [],
                        ['ACTIVE' => 'Y', 'ID' => $intIdSKU, 'PROPERTY_ELEM' => $arItem['ID']],
                        false,
                        false,
                        [
                            'IBLOCK_ID',
                            'ID',
                            'NAME',
                            'PROPERTY_PRICE',
                            'PROPERTY_SIZE',
                            'PROPERTY_ELEM',
                        ]
                    )->Fetch();
                    $arSkus[] = [
                        'ID' => $arItem['ID'],
                        'NAME' => $arItem['NAME'],
                        'PREVIEW_PICTURE' => $arItem['PREVIEW_PICTURE'],
                        'DETAIL_PICTURE' => $arItem['DETAIL_PICTURE'],
                        'DETAIL_PAGE_URL' => $arItem['DETAIL_PAGE_URL'],
                        'SKU_ID' => $arSku['ID'],
                        'SKU_SIZE' => $arSkuOnePack = !is_null($arItem["PROPERTY_SKU_SIZE_VALUE"]) ? $arItem["PROPERTY_SKU_SIZE_VALUE"] : 1,
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


    /**
     * @param $request \Bitrix\Main\HttpRequest
     */
    public function removeItem($request)
    {
        $id = (int)$request->getQuery('ID');
        $SkuId = (int)$request->getQuery('SKU_ID');

        $basket = &$_SESSION['BASKET'];
        if (count($basket[$id][$SkuId]) > 1)
            unset($basket[$id][$SkuId]);
        else
            unset($basket[$id]);
    }

    /**
     * @param $request \Bitrix\Main\HttpRequest
     */
    public function updateItem($request)
    {
        $qty = $request->getPost('qty');
        array_walk_recursive($qty, function (&$item) {
            if (is_numeric($item)) {
                $item = (int)$item;
            }
        });
        $_SESSION['BASKET'] = $qty;
    }

    /**
     * @param $request \Bitrix\Main\HttpRequest
     */
    protected function formSubmit($request)
    {
        if ($this->arParams['EMAIL_TO']) {
            $arResult['EMAIL_TO'] = $this->arParams['EMAIL_TO'];
        } else {
            $arResult['EMAIL_TO'] = htmlspecialcharsbx(COption::GetOptionString("main", "email_from"));
        }

        $arResult['NAME'] = strip_tags($request->getPost("name"));
        $arResult['MAIL'] = strip_tags($request->getPost("email"));
        $arResult['PHONE'] = strip_tags($request->getPost("phone"));
        $arResult['SHIPPING'] = strip_tags($request->getPost("shipping"));
        $arResult['ADDRESS'] = strip_tags($request->getPost("address"));
        $arResult['COMMENTS'] = strip_tags($request->getPost("comments"));

        $this->updateItem($request);

        $this->getItems();
        $arResult['TEXT'] = '<table border="1" cellpadding="0" cellspacing="0" >
						   <tr>
							 <th style="width: 50px;" align=center >' . Loc::getMessage("SERGAR_COMPONENT_CART_CLASS_TABLE_NUMBER") . '</th>
							 <th style="width: 300px;" align=center>' . Loc::getMessage("SERGAR_COMPONENT_CART_CLASS_TABLE_NAME") . '</th>
							 <th style="width: 90px;" align=center>' . Loc::getMessage("SERGAR_COMPONENT_CART_CLASS_TABLE_SIZE") . '</th>
							 <th style="width: 90px;" align=center>' . Loc::getMessage("SERGAR_COMPONENT_CART_CLASS_TABLE_PRICE") . '</th>
							 <th style="width: 80px;" align=center>' . Loc::getMessage("SERGAR_COMPONENT_CART_CLASS_TABLE_COUNT") . '</th>
							 <th style="width: 90px;" align=center>' . Loc::getMessage("SERGAR_COMPONENT_CART_CLASS_TABLE_PRICE_SUMMARY") . '</th>	 
						   </tr>  ';
        $number = 1;
        $price = 0;

        foreach ($this->arResult['ITEMS'] as $arItem) {
//            dump($arItem);
            $arResult['TEXT'] .= '<tr>
							 <td align=center>' . $number . '</td>
							 <td align=left><a href="' . $arItem["DETAIL_PAGE_URL"] . '">' . $arItem['NAME'] . '</a></td>
							 <td align=center>' . $arItem['SIZE'] . '</td>
							 <td align=center>' . number_format($arItem['PRICE'], 2, '.', ' ') . ' ' . Loc::getMessage("SERGAR_COMPONENT_CART_CLASS_RUBBLE") . '</td>
							 <td align=center>' . $arItem["COUNT"] . '</td>
							 <td align=center>' . number_format($arItem['PRICE_TOTAL'], 2, '.', ' ') . ' ' . Loc::getMessage("SERGAR_COMPONENT_CART_CLASS_RUBBLE") . '</td>
						   </tr>';
            $number++;
            $price += $arItem['PRICE_TOTAL'];
        }
        $arResult['TEXT'] .= '
			   <tr>
				<td colspan="4" style="text-align: left;" ><span style="margin-left: 10px;" ><strong>' . Loc::getMessage("SERGAR_COMPONENT_CART_CLASS_TABLE_PRICE_TOTAL") . ':</strong></span></td>
				<td  align=center><strong>' . $number . '</strong></td>
				<td  align=center><strong>' . number_format($price, 2, '.', ' ') . ' ' . Loc::getMessage("SERGAR_COMPONENT_CART_CLASS_RUBBLE") . '</strong></td>
			   </tr></table>';

        $res = Event::send(array(
            "EVENT_NAME" => $this->arParams['EVENT_TYPE'],
            "LID" => "s1",
            "C_FIELDS" => $arResult,
        ));
        if($res->isSuccess()){
            unset($_SESSION['BASKET'],$this->arResult['ITEMS']);
            include_once "include.php";
        }
    }

    function executeComponent()
    {
        if (!Loader::includeModule('iblock'))
            die();
        $request = Context::getCurrent()->getRequest();
        if ($request->isAjaxRequest()) {
            global $APPLICATION;
            $APPLICATION->RestartBuffer();
        }

        if ($request->getQuery('del') && $request->getQuery('ID') && $request->getQuery('SKU_ID')) {
            $this->removeItem($request);
        } elseif ($request->getPost('update')) {
            $this->updateItem($request);
        } elseif ($request->getPost('submit') && check_bitrix_sessid()) {
            $this->formSubmit($request);
        }
        if ($request->isAjaxRequest())
            die();


        $this->getItems();

        $this->includeComponentTemplate();
    }
}