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
                <p class="alert alert-warning">����� ������� �����, �������� ����� ������, ��������� ���, ���������
                    �����-������, ���� ��������� ��� ����� � ������������ ����� � ��������� �� ����� <a
                            href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a>
                </p>
            </div>
            <div class="mb--20">
                <form id="table_razm">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-7"><h5>������</h5></div>
                            <div class="col-2"><h5>����</h5></div>
                            <div class="col-3"><h5>����������</h5></div>
                        </div>
                        <? foreach ($arResult["PRICES"] as $arSKU) { ?>
                            <div class="row align-items-center mt--5">
                                <div class="col-7"><?=$arSKU['SIZE'];?></div>
                                <div class="col-2"><?=$arSKU['PRICE'];?> ���.</div>
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
                            <div class="col-7"><strong>�����: </strong></div>
                            <div class="col-2"><strong><span id="summ_buy">0</span> ���.</strong></div>
                            <div class="col-3"><input type="button" id="buy_btn" class="btn btn-light" value="������"></div>
                        </div>
                    </div>
                </form>
            </div>


            <p class="alert alert-warning ">�������� ���� �������� �� ��, ��� ��� �������������� �� ����� ���������, �� �������� � ������
                �������������� ����� �������������� �������� � �� ��� ����� �������� �� �������� ��������� �������.
                ���������� � ���� �������� ��������������� �� ������ ���������� � ����� ���� �������� � ����� ����� ���
                ���������������� �����������. ��� ��������� ��������� ���������� ��� ���������� ������� ����������� �
                ���������� �������� �� ���������: +7(905)109-31-15, +7(920)355-40-95 ��� ������ �� ����������� �����: <a
                        href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a></p>
        </div>
    </div>
</div>