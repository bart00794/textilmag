<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);


$arSkuOnePack = !is_null($arResult["PROPERTIES"]["SKU_SIZE"]["VALUE"]) ? $arResult["PROPERTIES"]["SKU_SIZE"]["VALUE"] : 1;
?>
<div class="row">
    <div class="col-md-6 product-main-image">
        <? if (!empty($arResult['MORE_PHOTO'])) { ?>
            <div class="product-image">
                <div class="product-gallery">
                    <div class="product-gallery__large-image">
                        <div class="product-gallery__wrapper">
                            <div class="row grid-space-10">
                                <? foreach ($arResult['MORE_PHOTO'] as $arPhoto) { ?>
                                    <div class="col-3 mb--10">
                                        <figure class="product-gallery__image">
                                            <a data-fancybox="gallery_<?= $arResult['ID']; ?>"
                                               href="<?= $arPhoto['SRC']; ?>"><img
                                                        src="<?= $arPhoto['PREVIEW']['src']; ?>"
                                                        alt="<?= $arResult['NAME']; ?>"></a>
                                        </figure>
                                    </div>
                                <? } ?>
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
                <form id="buyItem" action="#" method="POST">
                    <?=bitrix_sessid_post()?>
                    <input type="hidden" name="id_item" value="<?=$arResult['ID'];?>">
                    <div class="container">
                        <div class="row align-items-center">
                            <div class="col-7"><h5>������</h5></div>
                            <div class="col-2"><h5>����</h5></div>
                            <div class="col-3"><h5>����������</h5></div>
                        </div>
                        <? foreach ($arResult["PRICES"] as $arSKU) {?>
                            <div class="row align-items-center mt--5 sku-block">
                                <div class="col-7 sku-size">
                                    <?= (!empty($arSKU['SIZE'])) ? $arSKU['SIZE'] : "�� �����"; ?>
                                </div>
                                <div class="col-2 sku-price"><?= $arSKU['PRICE']; ?> ���.</div>
                                <div class="col-3 sku-quantity">
                                    <div class="quantity">
                                        <input type="number" class="quantity-input" name="sku_<?=$arSKU['ID'];?>" id="qty" value="0"
                                               min="0" data-quantity="<?= $arSkuOnePack; ?>">
                                        <div class="dec qtybutton">-</div>
                                        <div class="inc qtybutton">+</div>
                                    </div>
                                </div>
                            </div>
                        <? } ?>
                        <div class="row align-items-center mt--15">
                            <div class="col-7"><strong>�����: </strong></div>
                            <div class="col-2"><strong><span id="summ_buy">0</span> ���.</strong></div>
                            <div class="col-3"><input type="submit" id="buy_btn" class="btn btn-light" value="������">
                            </div>
                        </div>
                    </div>
                </form>
                <div id="result"></div>
            </div>


            <p class="alert alert-warning ">�������� ���� �������� �� ��, ��� ��� �������������� �� ����� ���������, ��
                �������� � ������
                �������������� ����� �������������� �������� � �� ��� ����� �������� �� �������� ��������� �������.
                ���������� � ���� �������� ��������������� �� ������ ���������� � ����� ���� �������� � ����� ����� ���
                ���������������� �����������. ��� ��������� ��������� ���������� ��� ���������� ������� ����������� �
                ���������� �������� �� ���������: +7(905)109-31-15, +7(920)355-40-95 ��� ������ �� ����������� �����: <a
                        href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a></p>
        </div>
    </div>
</div>

<script>
    BX.message({
        TEMPLATE_PATH: '<?=$this->GetFolder();?>/ajax.php'
    });
</script>