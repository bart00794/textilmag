<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="articleIndex">
    <? foreach ($arResult["ITEMS"] as $arItem): ?>
        <?
        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
        $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
        ?>
        <article class="news-item" id="<?= $this->GetEditAreaId($arItem['ID']); ?>">
            <? if ($arParams["DISPLAY_NAME"] != "N" && $arItem["NAME"]): ?>
                <? if (!$arParams["HIDE_LINK_WHEN_NO_DETAIL"] || ($arItem["DETAIL_TEXT"] && $arResult["USER_HAVE_ACCESS"])): ?>
                    <h3><a href="<? echo $arItem["DETAIL_PAGE_URL"] ?>"><? echo $arItem["NAME"] ?></a></h3>
                <? else: ?>
                    <h3><? echo $arItem["NAME"] ?></h3>
                <? endif; ?>
            <? endif; ?>
            <? if ($arParams["DISPLAY_DATE"] != "N" && $arItem["DISPLAY_ACTIVE_FROM"]): ?>
                <span><? echo $arItem["DISPLAY_ACTIVE_FROM"] ?></span>
            <? endif ?>
            <? if ($arParams["DISPLAY_PREVIEW_TEXT"] != "N" && $arItem["PREVIEW_TEXT"]): ?>
                <p><? echo $arItem["PREVIEW_TEXT"]; ?></p>
            <? endif; ?>
            <? if ($arParams["DISPLAY_PICTURE"] != "N" && is_array($arItem["PREVIEW_PICTURE"])): ?>
            <? endif ?>
            <? foreach ($arItem["FIELDS"] as $code => $value): ?>
                <small>
                    <?= GetMessage("IBLOCK_FIELD_" . $code) ?>:&nbsp;<?= $value; ?>
                </small><br />
            <? endforeach; ?>
            <? foreach ($arItem["DISPLAY_PROPERTIES"] as $pid => $arProperty): ?>
                <small>
                    <?= $arProperty["NAME"] ?>:&nbsp;
                    <? if (is_array($arProperty["DISPLAY_VALUE"])): ?>
                        <?= implode("&nbsp;/&nbsp;", $arProperty["DISPLAY_VALUE"]); ?>
                    <? else: ?>
                        <?= $arProperty["DISPLAY_VALUE"]; ?>
                    <? endif ?>
                </small><br />
            <? endforeach; ?>
        </article>
    <? endforeach; ?>
</div>
<div class="all"><a href="news/"><?=GetMessage("ALL_NEWS")?></a></div>