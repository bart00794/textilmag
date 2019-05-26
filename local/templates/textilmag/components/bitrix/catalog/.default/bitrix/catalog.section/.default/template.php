<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
use Bitrix\Main\Localization\Loc;

Loc::loadMessages(__FILE__);
?>



<div class="shop-products mt--20">
    <div class="row grid-space-20 xxl-block-grid-4">
        <?foreach($arResult["ITEMS"] as $arElement) {
            $width = 0;
            $this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CATALOG_ELEMENT_DELETE_CONFIRM')));
            ?>
            <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                <div class="airi-product">
                    <div class="product-inner">
                        <figure class="product-image">
                            <div class="product-image--holder">
                                <a href="product-details.html">
                                    <img src="<?=$arElement['PICTURE']['SRC'];?>" alt="Product Image" class="primary-image">
                                    <img src="<?=$arElement['PICTURE']['SRC'];?>" alt="Product Image" class="secondary-image">
                                </a>
                            </div>
                        </figure>
                        <div class="product-info text-center">
                            <h3 class="product-title">
                                <a href="product-details.html"><?=$arElement['NAME'];?></a>
                            </h3>
                            <span class="product-price-wrapper">
                                <span class="money"><?=$arElement['DISPLAY_PRICE'];?>  <?=Loc::getMessage("SERGAR_CATALOG_TEMPLATE_SECTION_POSTFIX_PRICE");?></span>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
            <?
        }?>

    </div>
</div>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br><?=$arResult["NAV_STRING"]?>
<?endif;?>

