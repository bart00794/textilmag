<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>

<div class="page-content-inner">
    <div class="container">
        <div class="row pt--80 pb--80 pt-md--45 pt-sm--25 pb-md--60 pb-sm--40">
            <?if(!empty($arResult['ITEMS'])){?>
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
                                        <th class="text-left">��������</th>
                                        <th>����</th>
                                        <th>�����������</th>
                                        <th>�����</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <? foreach ($arResult['ITEMS'] as $arItem): ?>
                                        <tr>
                                            <td class="product-remove text-left">
                                                <a href="#">
                                                    <i class="dl-icon-close"></i>
                                                </a>
                                            </td>
                                            <td class="product-thumbnail text-left">
                                                <img src="<?= $arItem['PICTURE']['SRC']; ?>" alt="Product Thumnail">
                                            </td>
                                            <td class="product-name text-left wide-column">
                                                <h3>
                                                    <a href="<?= $arItem['DETAIL_PAGE_URL']; ?>"><?= $arItem['NAME']; ?></a>
                                                </h3>
                                            </td>
                                            <td class="product-price">
                                                <span class="product-price-wrapper">
                                                    <span class="money"><?= $arItem['PRICE']; ?></span>
                                                </span>
                                            </td>
                                            <td class="product-quantity">
                                                <div class="quantity">
                                                    <input type="number" class="quantity-input" name="qty" id="qty-1"
                                                           value="<?= $arItem['COUNT']; ?>" min="1">
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
                                    <? endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="cart-collaterals">
                    <form method="post" action="#" style="width: 100%; float: left;">
                        <div class="cart-totals">
                            <h5 class="mb--15">���������� ������</h5>
                            <div class="table-content table-responsive">
                                <div class="">
                                    <div class="form-group">
                                        <label>���, �������<strong>*</strong></label>
                                        <input name="nameform" class="form__input form__input--2" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>Email<strong>*</strong></label>
                                        <input name="mailform" class="form__input form__input--2" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>������� <strong>*</strong></label>
                                        <input name="phoneform" class="form__input form__input--2" type="text">
                                    </div>
                                    <div class="form-group">
                                        <label>������������ ��������</label>
                                        <select name="dostavka" class="form__input form__input--2">
                                            <option>-- �������� --</option>
                                            <option>����������������</option>
                                            <option>������� �����</option>
                                            <option>�������������</option>
                                            <option>�����-������</option>
                                            <option>���</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>����� ��������</label>
                                        <textarea class="form__input form__input--2" name="adressform"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>����������� � ������</label>
                                        <textarea class="form__input form__input--2" name="textform"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <strong>*</strong> � ����, ������������ ��� ����������
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div>
                            <input class="btn btn-fullwidth btn-style-1" type="button" value="��������� ���������"/>
                        </div>
                    </form>
                </div>
            </div>
            <?}else{?>
                <div class="col-lg-12">
                    <p class="text-center">� ������� ������ ������ ���. <a href="/products/">������� � ��������.</a></p>
                </div>
            <?}?>
        </div>
    </div>
</div>
