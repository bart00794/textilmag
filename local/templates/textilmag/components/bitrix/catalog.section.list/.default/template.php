<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
?>
<section class="product-tab-area ptb--40 ptb-md--30">
    <div class="container-fluid">
        <div class="row mb--40 mb-md--30">
            <div class="col-12 text-center">
                <h2 class="heading-secondary">Каталог</h2>
                <hr class="separator center mt--25 mt-md--15">
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="product-tab tab-style-3">
                    <div class="row">
                    <?
                    foreach ($arResult['SECTIONS'] as $arSec){?>
                        <div class="col-xl-3 col-lg-4 col-sm-6 mb--40 mb-md--30">
                            <div class="airi-product">
                                <div class="product-inner">
                                    <figure class="product-image">
                                        <div class="zoom-photo__wrap">
                                            <a href="<?=$arSec['SECTION_PAGE_URL'];?>" class="zoom-photo__href" data-src="<?=$arSec['PICTURE']['SRC'];?>">
                                                <img src="<?=$arSec['PICTURE_PREVIEW']['src'];?>" alt="<?=$arSec['NAME'];?>" class="zoom-photo__img">
                                            </a>
                                        </div>
                                    </figure>
                                    <div class="product-info">
                                        <h3 class="product-title">
                                            <a href="<?=$arSec['SECTION_PAGE_URL'];?>"><?=$arSec['NAME'];?></a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?}?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

