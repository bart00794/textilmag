<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();

/** @var array $arParams */
/** @var array $arResult */
/** @var CBitrixComponentTemplate $this */

$this->setFrameMode(true);

if (!$arResult["NavShowAlways"]) {
    if ($arResult["NavRecordCount"] == 0 || ($arResult["NavPageCount"] == 1 && $arResult["NavShowAll"] == false))
        return;
}

$strNavQueryString = ($arResult["NavQueryString"] != "" ? $arResult["NavQueryString"] . "&amp;" : "");
$strNavQueryStringFull = ($arResult["NavQueryString"] != "" ? "?" . $arResult["NavQueryString"] : "");

?>
<nav class="pagination-wrap">
    <ul class="pagination">
        <? if ($arResult["bDescPageNumbering"] === true): ?>

            <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
                <? if ($arResult["bSavePage"]): ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
                           class="prev page-number"><i class="fa fa-angle-double-left"></i></a></li>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
                           class="page-number">1</a>
                    </li>
                <? else: ?>
                    <? if (($arResult["NavPageNomer"] + 1) == $arResult["NavPageCount"]): ?>
                        <li><a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"
                               class="prev page-number"><i class="fa fa-angle-double-left"></i></a></li>
                    <? else: ?>
                        <li>
                            <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
                               class="prev page-number"><i class="fa fa-angle-double-left"></i></a></li>
                    <? endif ?>
                    <li><a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>" class="page-number">1</a>
                    </li>
                <? endif ?>
            <? else: ?>
                <li><span class="prev page-number"><i class="fa fa-angle-double-left"></i></span></li>
                <li><span class="page-number">1</span></li>
            <? endif ?>

            <?
            $arResult["nStartPage"]--;
            while ($arResult["nStartPage"] >= $arResult["nEndPage"] + 1):
                ?>
                <? $NavRecordGroupPrint = $arResult["NavPageCount"] - $arResult["nStartPage"] + 1; ?>

                <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                <li><span class="current page-number"><?= $NavRecordGroupPrint ?></span></li>
            <? else: ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"
                       class="page-number">
                        <span><?= $NavRecordGroupPrint ?></span>
                    </a>
                </li>
            <? endif ?>

                <? $arResult["nStartPage"]-- ?>
            <? endwhile ?>

            <? if ($arResult["NavPageNomer"] > 1): ?>
                <? if ($arResult["NavPageCount"] > 1): ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1"
                           class="page-number">
                            <?= $arResult["NavPageCount"] ?>
                        </a>
                    </li>
                <? endif ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                       class="next page-number"><i
                                class="fa fa-angle-double-right"></i>
                    </a>
                </li>
            <? else: ?>
                <? if ($arResult["NavPageCount"] > 1): ?>
                    <li><span class="current page-number"><?= $arResult["NavPageCount"] ?></span></li>
                <? endif ?>
                <li><span class="next page-number"><i class="fa fa-angle-double-right"></i></span></li>
            <? endif ?>

        <? else: ?>

            <? if ($arResult["NavPageNomer"] > 1): ?>
                <? if ($arResult["bSavePage"]): ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                           class="prev page-number"><i class="fa fa-angle-double-left"></i></a></li>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=1"
                           class="page-number">1</a>
                    </li>
                <? else: ?>
                    <? if ($arResult["NavPageNomer"] > 2): ?>
                        <li>
                            <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] - 1) ?>"
                               class="prev page-number"><i
                                        class="fa fa-angle-double-left"></i>
                            </a>
                        </li>
                    <? else: ?>
                        <li>
                            <a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>"
                               class="prev page-number"><i
                                        class="fa fa-angle-double-left"></i>
                            </a>
                        </li>
                    <? endif ?>
                    <li><a href="<?= $arResult["sUrlPath"] ?><?= $strNavQueryStringFull ?>" class="page-number">1</a>
                    </li>
                <? endif ?>
            <? else: ?>
                <li><span class="prev page-number"><i class="fa fa-angle-double-left"></i></span></li>
                <li><span class="current page-number">1</span></li>
            <? endif ?>

            <?
            $arResult["nStartPage"]++;
            while ($arResult["nStartPage"] <= $arResult["nEndPage"] - 1):
                ?>
                <? if ($arResult["nStartPage"] == $arResult["NavPageNomer"]): ?>
                <li><span class="current page-number"><?= $arResult["nStartPage"] ?></span></li>
            <? else: ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["nStartPage"] ?>"
                       class="page-number">
                        <?= $arResult["nStartPage"] ?>
                    </a>
                </li>
            <? endif ?>
                <? $arResult["nStartPage"]++ ?>
            <? endwhile ?>

            <? if ($arResult["NavPageNomer"] < $arResult["NavPageCount"]): ?>
                <? if ($arResult["NavPageCount"] > 1): ?>
                    <li>
                        <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= $arResult["NavPageCount"] ?>"
                           class="page-number">
                            <?= $arResult["NavPageCount"] ?>
                        </a>
                    </li>
                <? endif ?>
                <li>
                    <a href="<?= $arResult["sUrlPath"] ?>?<?= $strNavQueryString ?>PAGEN_<?= $arResult["NavNum"] ?>=<?= ($arResult["NavPageNomer"] + 1) ?>"
                       class="next page-number">
                        <i class="fa fa-angle-double-right"></i>
                    </a>
                </li>
            <? else: ?>
                <? if ($arResult["NavPageCount"] > 1): ?>
                    <li><span class="current page-number"><?= $arResult["NavPageCount"] ?></span></li>
                <? endif ?>
                <li><span class="next page-number"><i class="fa fa-angle-double-right"></i></span></li>
            <? endif ?>
        <? endif ?>
    </ul>
</nav>
