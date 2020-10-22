<?

if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) {
    die();
} ?>

<div class="page-content-inner">
    <div class="container">
        <div class="row pt--80 pb--80 pt-md--45 pt-sm--25 pb-md--60 pb-sm--40">
            <?
            if (!empty($arResult['ITEMS'])) { ?>
                <form action="#" method="post" class="col-12">
                    <?= bitrix_sessid_post(); ?>
                    <div class="row">
                        <div class="col-lg-8 mb-md--30">
                            <div class="cart-form">
                                <div class="row no-gutters">
                                    <div class="col-12">
                                        <div class="table-content table-responsive">
                                            <table class="table text-center">
                                                <thead>
                                                <tr>
                                                    <th>&nbsp;</th>
                                                    <th>&nbsp;</th>
                                                    <th class="text-left">Название</th>
                                                    <th>Цена</th>
                                                    <th>Колличество</th>
                                                    <th>Сумма</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <?
                                                foreach ($arResult['ITEMS'] as $arItem): ?>
                                                    <?
                                                    $arUrl = [
                                                        'del' => 'Y',
                                                        'ID' => $arItem['ID'],
                                                        'SKU_ID' => $arItem['SKU_ID']
                                                    ];
                                                    ?>
                                                    <tr>
                                                        <td class="product-remove text-left">
                                                            <a href="?<?= http_build_query($arUrl); ?>">
                                                                <i class="dl-icon-close"></i>
                                                            </a>
                                                        </td>
                                                        <td class="product-thumbnail text-left">
                                                            <img src="<?= $arItem['PICTURE']['SRC']; ?>"
                                                                 alt="Product Thumnail">
                                                        </td>
                                                        <td class="product-name text-left wide-column">
                                                            <h3>
                                                                <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"><?= $arItem['NAME']; ?>
                                                                    <?
                                                                    if (!empty($arItem['SIZE'])) { ?><span>
                                                                        (<?= $arItem['SIZE'] ?>)</span><?
                                                                    } ?></a>
                                                            </h3>
                                                        </td>
                                                        <td class="product-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><?= $arItem['PRICE']; ?></span>
                                                    </span>
                                                        </td>
                                                        <td class="product-quantity">
                                                            <div class="quantity">
                                                                <input type="number" class="quantity-input"
                                                                       name="qty[<?= $arItem['ID']; ?>][<?= $arItem['SKU_ID']; ?>]"
                                                                       id="qty-1"
                                                                       value="<?= $arItem['COUNT']; ?>" min="1"
                                                                       data-quantity="<?= $arItem['SKU_SIZE']; ?>">
                                                                <div class="dec qtybutton">-</div>
                                                                <div class="inc qtybutton">+</div>
                                                            </div>
                                                        </td>
                                                        <td class="product-total-price">
                                                    <span class="product-price-wrapper">
                                                        <span class="money"><strong><?= $arItem['PRICE_TOTAL']; ?></strong></span>
                                                    </span>
                                                        </td>
                                                    </tr>
                                                <?
                                                endforeach; ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-fullwidth btn-style-2 mt--35" name="update"
                                                id="updateCart">Обновить корзину
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="cart-collaterals">
                                <div class="cart-totals">
                                    <h5 class="mb--15">Оформление заказа</h5>
                                    <div class="table-content table-responsive">
                                        <div class="">
                                            <div class="form-group">
                                                <label>Имя, Фамилия<strong>*</strong></label>
                                                <input name="name" class="form__input form__input--2" type="text"
                                                       required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Email<strong>*</strong></label>
                                                <input name="email" class="form__input form__input--2" type="email"
                                                       required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Телефон <strong>*</strong></label>
                                                <input name="phone" class="form__input form__input--2" type="text"
                                                       required="required">
                                            </div>
                                            <div class="form-group">
                                                <label>Транспортная компания</label>
                                                <select name="shipping" class="form__input form__input--2">
                                                    <option>-- Выберите --</option>
                                                    <option>ЖелДорЭкспедиция</option>
                                                    <option>Деловые линии</option>
                                                    <option>Автротрейдинг</option>
                                                    <option>Транс-Вектор</option>
                                                    <option>КИТ</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <label>Адрес доставки</label>
                                                <textarea class="form__input form__input--2" name="address"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <label>Комментарий к заказу</label>
                                                <textarea class="form__input form__input--2" name="comments"></textarea>
                                            </div>
                                            <div class="form-group">
                                                <strong>*</strong> — поля, обязательные для заполнения
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <input class="btn btn-fullwidth btn-style-1" type="submit"
                                           value="Отправить сообщение" name="submit">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <?
            } else { ?>
                <div class="col-lg-12">
                    <p class="text-center">В корзине сейчас ничего нет. <a href="/products/">Перейти к покупкам.</a></p>
                </div>
                <?
            } ?>
        </div>
    </div>
</div>
