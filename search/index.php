<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�����");
?>

<div class="container">
    <?$APPLICATION->IncludeComponent(
        "bitrix:search.page",
        ".default",
        array(
            "COMPONENT_TEMPLATE" => ".default",
            "RESTART" => "N",
            "NO_WORD_LOGIC" => "N",
            "CHECK_DATES" => "N",
            "USE_TITLE_RANK" => "N",
            "DEFAULT_SORT" => "rank",
            "FILTER_NAME" => "",
            "arrFILTER" => array(
                0 => "iblock_products",
            ),
            "arrFILTER_iblock_products" => array(
                0 => "2",
            ),
            "SHOW_WHERE" => "Y",
            "arrWHERE" => array(
            ),
            "SHOW_WHEN" => "N",
            "PAGE_RESULT_COUNT" => "50",
            "AJAX_MODE" => "N",
            "AJAX_OPTION_JUMP" => "N",
            "AJAX_OPTION_STYLE" => "Y",
            "AJAX_OPTION_HISTORY" => "N",
            "AJAX_OPTION_ADDITIONAL" => "",
            "CACHE_TYPE" => "A",
            "CACHE_TIME" => "3600",
            "USE_LANGUAGE_GUESS" => "Y",
            "USE_SUGGEST" => "N",
            "DISPLAY_TOP_PAGER" => "N",
            "DISPLAY_BOTTOM_PAGER" => "Y",
            "PAGER_TITLE" => "���������� ������",
            "PAGER_SHOW_ALWAYS" => "N",
            "PAGER_TEMPLATE" => ""
        ),
        false
    );?>
</div>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>