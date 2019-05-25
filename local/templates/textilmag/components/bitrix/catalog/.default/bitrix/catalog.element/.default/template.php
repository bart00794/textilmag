<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="row">
    <div class="col-md-6 product-main-image">
        <? if (!empty($arResult['DETAIL_PICTURE'])) { ?>
            <div class="product-image">
                <div class="product-gallery">
                    <div class="product-gallery__large-image mb--20">
                        <div class="gallery-with-thumbs">
                            <div class="product-gallery__wrapper">
                                <div class="main-slider product-gallery__full-image image-popup">
                                    <figure class="product-gallery__image zoom">
                                        <img src="<?= $arResult['DETAIL_PICTURE']['SRC']; ?>"
                                             alt="<?= $arResult['NAME']; ?>">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <? } ?>
    </div>
    <div class="col-md-6 product-main-details mt--40 mt-md--10 mt-sm--30">
        <div class="product-summary">
            <h3 class="product-title"><?= $arResult['NAME']; ?></h3>
            <div class="product-price-wrapper mb--40 mb-md--10">
                <span class="money">$49.00</span>
                <span class="old-price">
                                                <span class="money">$60.00</span>
                                            </span>
            </div>
            <div class="clearfix"></div>
            <div class="product-short-description mb--45 mb-sm--20">
                <p class="alert alert-warning">Чтобы сделать заказ, скачайте бланк заказа, заполните его, пользуясь
                    прайс-листом, либо составьте ваш заказ в произвольной форме и отправьте на почту <a
                            href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a>
                </p>
            </div>
            <div>
                <form id="table_razm">
                    <table class="table table-hover tabl">
                        <thead>
                        <tr>
                            <th>Размер</th>
                            <th>Цена</th>
                            <th>Количество</th>
                        </tr>
                        </thead>
                        <tfoot>
                        <tr>
                            <td><strong>Итого: </strong></td>
                            <td><strong><span id="summ_buy">0</span> руб.</strong></td>
                            <td><input type="button" id="buy_btn" class="btn btn-light"
                                       onclick="addtobasket(<?= $arResult["ID"]; ?>); return false;" value="Купить">
                            </td>
                        </tr>
                        </tfoot>
                        <tbody>
                        <? foreach ($arResult["PRICES"] as $key => $value) { ?>
                            <tr>
                                <td><?= $value["NAME"] ?></td>
                                <td><span class="buy_price"><?= $value["PRICE"] ?></span> руб.</td>
                                <td>
                                    <div class="input-group razmer_add element_razmer"
                                        <?
                                        if (!is_null($arResult["PROPERTIES"]["SKU_SIZE"]["VALUE"])) {
                                            echo "data-quantity=\"" . $arResult["PROPERTIES"]["SKU_SIZE"]["VALUE"] . "\"";
                                        } else {
                                            echo "data-quantity=\"1\"";
                                        }
                                        ?>>
                                        <div class="input-group-btn">
                                            <button class="btn btn-default buy_minus" type="button">-</button>
                                        </div>
                                        <input name="<?= $value["ID"] ?>" type="text" class="form-control buy_razmer"
                                               value="">
                                        <div class="input-group-btn">
                                            <button class="btn btn-default buy_plus" type="button">+</button>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        <? } ?>
                        </tbody>
                    </table>
                </form>
            </div>


            <div>Обращаем Ваше внимание на то, что вся представленная на сайте продукция, ее цветовые и другие
                характеристики носят информационный характер и ни при каких условиях не являются публичной офертой.
                Информация и цены являются действительными на момент публикации и могут быть изменены в любое время без
                предварительного уведомления. Для получения подробной информации или размещения заказов обращайтесь к
                менеджерам компании по телефонам: +7(905)109-31-15, +7(920)355-40-95 или пишите на электронную почту: <a
                        href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a></div>
        </div>
    </div>
</div>