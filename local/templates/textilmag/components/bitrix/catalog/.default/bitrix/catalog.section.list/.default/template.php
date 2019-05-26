<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */

//$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
//$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));
?>
<div class="shop-products">
    <div class="row grid-space-20 xxl-block-grid-4">
        <?if(0 < $arResult["SECTIONS_COUNT"]){
            foreach ($arResult['SECTIONS'] as &$arSection){
                $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
                $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);
                ?>
                <div class="col-lg-4 col-sm-6 mb--40 mb-md--30">
                    <div class="airi-product" id="<?=$this->GetEditAreaId($arSection['ID']);?>">
                        <div class="product-inner">
                            <figure class="product-image">
                                <div class="product-image--holder">
                                    <a href="<?=$arSection['SECTION_PAGE_URL'];?>">
                                        <img src="<?=$arSection["PICTURE"]["src"];?>" alt="<?=$arSection['NAME'];?>" class="primary-image">
                                        <img src="<?=$arSection["PICTURE"]["src"];?>" alt="<?=$arSection['NAME'];?>" class="secondary-image">
                                    </a>
                                </div>
                            </figure>
                            <div class="product-info text-center">
                                <h3 class="product-title">
                                    <a href="<?=$arSection['SECTION_PAGE_URL'];?>"><?=$arSection["NAME"];?><?
                                        if ($arParams["COUNT_ELEMENTS"])
                                        {
                                        ?> <span class="count">(<? echo $arSection['ELEMENT_CNT']; ?>)</span><?
                                        }
                                        ?></a>
                                </h3>
                            </div>
                        </div>
                    </div>
                </div>
                <?
            }
            ?>
        <?}?>
    </div>
</div>