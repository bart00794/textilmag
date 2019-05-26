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
            <div class="clearfix"></div>
            <div class="product-short-description mb--45 mb-sm--20">
                <p class="alert alert-warning">Чтобы сделать заказ, скачайте бланк заказа, заполните его, пользуясь
                    прайс-листом, либо составьте ваш заказ в произвольной форме и отправьте на почту <a
                            href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a>
                </p>
            </div>
            <div class="mb--20">
                <form id="table_razm">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-7"><h5>Размер</h5></div>
                            <div class="col-2"><h5>Цена</h5></div>
                            <div class="col-3"><h5>Количество</h5></div>
                        </div>
                        <? foreach ($arResult["PRICES"] as $arSKU) { ?>
                            <div class="row align-items-center mt--5">
                                <div class="col-7"><?=$arSKU['SIZE'];?></div>
                                <div class="col-2"><?=$arSKU['PRICE'];?> руб.</div>
                                <div class="col-3">
                                    <div class="quantity">
                                        <input type="number" class="quantity-input" name="qty" id="qty" value="1" min="1">
                                        <div class="dec qtybutton">-</div>
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                        <div class="row align-items-center mt--15">
                            <div class="col-7"><strong>Итого: </strong></div>
                            <div class="col-2"><strong><span id="summ_buy">0</span> руб.</strong></div>
                            <div class="col-3"><input type="button" id="buy_btn" class="btn btn-light" value="Купить"></div>
                        </div>
                    </div>
                </form>
            </div>


            <p class="alert alert-warning ">Обращаем Ваше внимание на то, что вся представленная на сайте продукция, ее цветовые и другие
                характеристики носят информационный характер и ни при каких условиях не являются публичной офертой.
                Информация и цены являются действительными на момент публикации и могут быть изменены в любое время без
                предварительного уведомления. Для получения подробной информации или размещения заказов обращайтесь к
                менеджерам компании по телефонам: +7(905)109-31-15, +7(920)355-40-95 или пишите на электронную почту: <a
                        href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a></p>
        </div>
    </div>
</div>