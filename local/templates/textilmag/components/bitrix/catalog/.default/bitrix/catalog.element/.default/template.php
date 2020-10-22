<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
}

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);


$arSkuOnePack = !is_null(
    $arResult["PROPERTIES"]["SKU_SIZE"]["VALUE"]
) ? $arResult["PROPERTIES"]["SKU_SIZE"]["VALUE"] : 1;
?>
<div class="row">
    <div class="col-md-6 product-main-image">
        <?
        if (!empty($arResult['MORE_PHOTO'])) { ?>
            <div class="product-image">
                <div class="product-gallery">
                    <div class="product-gallery__large-image">
                        <div class="product-gallery__wrapper">
                            <div class="row grid-space-10">
                                <?
                                foreach ($arResult['MORE_PHOTO'] as $arPhoto) { ?>
                                    <div class="col-3 mb--10">
                                        <figure class="product-gallery__image">
                                            <a data-fancybox="gallery_<?= $arResult['ID']; ?>"
                                               href="<?= $arPhoto['SRC']; ?>"><img
                                                        src="<?= $arPhoto['PREVIEW']['src']; ?>"
                                                        alt="<?= $arResult['NAME']; ?>"></a>
                                        </figure>
                                    </div>
                                    <?
                                } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?
        } ?>
    </div>
    <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
        <div class="product-summary">
            <h3 class="product-title"><?= $arResult['NAME']; ?></h3>
            <div class="clearfix"></div>
            <div class="product-short-description mb--45 mb-sm--20">
                <p class="alert alert-warning">Чтобы сделать заказ, скачайте бланк заказа, заполните его, пользуясь
                    прайс-листом, либо составьте ваш заказ в произвольной форме и отправьте на почту <a
                            href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a>
                </p>
            </div>


            <form action="#" class="form--action mb--30 mb-sm--20" id="buyItem">
                <?= bitrix_sessid_post() ?>
                <input type="hidden" name="id_item" value="<?= $arResult['ID']; ?>">
                <div class="table-content table-responsive">
                    <table class="table group-product-table">
                        <?
                        foreach ($arResult["PRICES"] as $arSKU) { ?>
                            <tr class="sku-block">
                                <td class="product-quantity">
                                    <div class="quantity">
                                        <input type="number" class="quantity-input" name="sku_<?= $arSKU['ID']; ?>"
                                               id="qty" value="0" min="0" data-quantity="<?= $arSkuOnePack; ?>">
                                        <div class="dec qtybutton">-</div>
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                </td>
                                <td class="product-name">
                                    <h3>
                                        <span><?= (!empty($arSKU['SIZE'])) ? $arSKU['SIZE'] : "не задан"; ?></span>
                                    </h3>
                                </td>
                                <td class="product-price sku-price">
                                    <div class="product-price-wrapper">
                                        <span class="money"><?= $arSKU['PRICE']; ?> руб.</span>
                                    </div>
                                </td>
                            </tr>
                            <?
                        } ?>
                    </table>
                </div>
                <div class="product-action flex-row align-items-center mt--40">
                    <button type="submit" class="btn btn-style-1 btn-large add-to-cart">
                        Добавить в корзину
                    </button>
                    <span><span id="summ_buy">00.00</span> руб.</span>
                </div>
            </form>

            <p class="alert alert-warning ">Обращаем Ваше внимание на то, что вся представленная на сайте продукция, ее
                цветовые и другие
                характеристики носят информационный характер и ни при каких условиях не являются публичной офертой.
                Информация и цены являются действительными на момент публикации и могут быть изменены в любое время без
                предварительного уведомления. Для получения подробной информации или размещения заказов обращайтесь к
                менеджерам компании по телефонам: +7(905)109-31-15, +7(920)355-40-95 или пишите на электронную почту: <a
                        href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a></p>
        </div>
    </div>
</div>

<div class="modal fade" id="modalBuyPopup" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLongTitle">Товар добавлен в корзину</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Продолжить покупки</button>
                <a type="button" class="btn btn-primary" href="/cart/">Перейти в корзину</a>
            </div>
        </div>
    </div>
</div>

<script>
    BX.message({
        TEMPLATE_PATH: '<?=$this->GetFolder();?>/ajax.php'
    });
</script>
