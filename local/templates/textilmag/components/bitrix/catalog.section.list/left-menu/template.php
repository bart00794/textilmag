<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
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
$this->setFrameMode(true);

$strSectionEdit = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_EDIT");
$strSectionDelete = CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "SECTION_DELETE");
$arSectionDeleteParams = array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM'));

?>
<div class="product-widget categroy-widget mb--35 mb-md--30 <? echo $arCurView['CONT']; ?>">
    <h3 class="widget-title">Категории</h3>
    <?
    if (0 < $arResult["SECTIONS_COUNT"]) {
        ?>
        <ul class="product-categories product-widget__list <? echo $arCurView['LIST']; ?>">
            <?
            $intCurrentDepth = 1;
            $boolFirst = true;
            foreach ($arResult['SECTIONS'] as &$arSection)
            {
            $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], $strSectionEdit);
            $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], $strSectionDelete, $arSectionDeleteParams);

            if ($intCurrentDepth < $arSection['RELATIVE_DEPTH_LEVEL']) {
                if (0 < $intCurrentDepth)
                    echo "\n", str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']), '<ul>';
            } elseif ($intCurrentDepth == $arSection['RELATIVE_DEPTH_LEVEL']) {
                if (!$boolFirst)
                    echo '</li>';
            } else {
                while ($intCurrentDepth > $arSection['RELATIVE_DEPTH_LEVEL']) {
                    echo '</li>', "\n", str_repeat("\t", $intCurrentDepth), '</ul>', "\n", str_repeat("\t", $intCurrentDepth - 1);
                    $intCurrentDepth--;
                }
                echo str_repeat("\t", $intCurrentDepth - 1), '</li>';
            }

            echo(!$boolFirst ? "\n" : ''), str_repeat("\t", $arSection['RELATIVE_DEPTH_LEVEL']);
            ?>
            <li id="<?= $this->GetEditAreaId($arSection['ID']); ?>">
                <a href="<? echo $arSection["SECTION_PAGE_URL"]; ?>">
                    <?if($arSection['DEPTH_LEVEL'] != '1') echo str_repeat("- ",$arSection['DEPTH_LEVEL']-1);?>
                    <? echo $arSection["NAME"]; ?>
                </a>
                <?
                if ($arParams["COUNT_ELEMENTS"]) {
                    ?>
                    <span class="count">(<? echo $arSection["ELEMENT_CNT"]; ?>)</span>
                    <?
                }

                $intCurrentDepth = $arSection['RELATIVE_DEPTH_LEVEL'];
                $boolFirst = false;
                }
                unset($arSection);
                while ($intCurrentDepth > 1) {
                    echo '</li>', "\n", str_repeat("\t", $intCurrentDepth), '</ul>', "\n", str_repeat("\t", $intCurrentDepth - 1);
                    $intCurrentDepth--;
                }
                if ($intCurrentDepth > 0) {
                    echo '</li>', "\n";
                }
                ?>
        </ul>
        <?
    }
    ?></div>