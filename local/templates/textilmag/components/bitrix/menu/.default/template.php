<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
    <nav class="main-navigation">
        <ul class="mainmenu mainmenu--centered">
            <?
            foreach($arResult as $arItem){
                if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1)
                    continue;
                ?>
                <?if($arItem["SELECTED"]):?>
                    <li class="mainmenu__item menu-item-has-children active">
                        <a href="<?=$arItem["LINK"]?>" class="mainmenu__link">
                            <span class="mm-text"><?=$arItem["TEXT"]?></span>
                            <!--                                        <span class="tip">Hot</span>-->
                        </a>
                    </li>
                <?else:?>
                    <li class="mainmenu__item menu-item-has-children">
                        <a href="<?=$arItem["LINK"]?>" class="mainmenu__link">
                            <span class="mm-text"><?=$arItem["TEXT"]?></span>
                            <!--                                        <span class="tip">Hot</span>-->
                        </a>
                    </li>
                <?endif?>
            <?}?>
        </ul>
    </nav>


<?endif?>