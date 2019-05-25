<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "В компании \"ТекстильМаг\" можно приобрести текстиль для дома оптом по выгодным ценам!");
$APPLICATION->SetPageProperty("keywords", "ивановский текстиль оптом, банное полотенце купить, трусы мужские оптом, банные полотенца оптом, купить текстиль оптом");
$APPLICATION->SetPageProperty("title", "Купить ивановский текстиль оптом от производителя \"ТекстильМаг\"");
$APPLICATION->SetTitle("Купить ивановский текстиль оптом от производителя \"ТекстильМаг\"");
?>


    <div class="page-content-inner enable-page-sidebar">
        <div class="container-fluid">
            <div class="row shop-sidebar pt--45 pt-md--35 pt-sm--20 pb--60 pb-md--50 pb-sm--40">
                <div class="col-lg-9 order-lg-2" id="main-content">
                    <?$APPLICATION->IncludeComponent(
                        "bitrix:catalog",
                        ".default",
                        array(
                            "DETAIL_SHOW_PICTURE" => "Y",
                            "AJAX_MODE" => "N",
                            "SEF_MODE" => "Y",
                            "IBLOCK_TYPE" => "products",
                            "IBLOCK_ID" => "2",
                            "USE_FILTER" => "N",
                            "USE_COMPARE" => "N",
                            "SHOW_TOP_ELEMENTS" => "N",
                            "SECTION_COUNT_ELEMENTS" => "Y",
                            "SECTION_TOP_DEPTH" => "2",
                            "PAGE_ELEMENT_COUNT" => "12",
                            "LINE_ELEMENT_COUNT" => "1",
                            "ELEMENT_SORT_FIELD" => "sort",
                            "ELEMENT_SORT_ORDER" => "asc",
                            "ELEMENT_SORT_FIELD2" => "id",
                            "ELEMENT_SORT_ORDER2" => "desc",
                            "SECTIONS_VIEW_MODE" => "TILE",
                            "LIST_PROPERTY_CODE" => array(
                                0 => "ZAMET",
                                1 => "PRICECURRENCY",
                                2 => "",
                            ),
                            "INCLUDE_SUBSECTIONS" => "N",
                            "LIST_META_KEYWORDS" => "-",
                            "LIST_META_DESCRIPTION" => "-",
                            "LIST_BROWSER_TITLE" => "-",
                            "DETAIL_PROPERTY_CODE" => array(
                                0 => "",
                                1 => "MATERIAL",
                                2 => "SIZE",
                                3 => "S_SIZE",
                                4 => "ARTNUMBER",
                                5 => "MANUFACTURER",
                                6 => "",
                            ),
                            "DETAIL_META_KEYWORDS" => "-",
                            "DETAIL_META_DESCRIPTION" => "-",
                            "DETAIL_BROWSER_TITLE" => "-",
                            "SECTION_ID_VARIABLE" => "SECTION_ID",
                            "CACHE_TYPE" => "N",
                            "CACHE_TIME" => "36000000",
                            "CACHE_FILTER" => "N",
                            "CACHE_GROUPS" => "Y",
                            "SET_STATUS_404" => "Y",
                            "SET_TITLE" => "Y",
                            "ADD_SECTIONS_CHAIN" => "Y",
                            "ADD_ELEMENT_CHAIN" => "N",
                            "PRICE_CODE" => array(
                            ),
                            "USE_PRICE_COUNT" => "N",
                            "SHOW_PRICE_COUNT" => "1",
                            "PRICE_VAT_INCLUDE" => "N",
                            "PRICE_VAT_SHOW_VALUE" => "N",
                            "BASKET_URL" => "",
                            "ACTION_VARIABLE" => "action",
                            "PRODUCT_ID_VARIABLE" => "id",
                            "USE_PRODUCT_QUANTITY" => "N",
                            "PRODUCT_QUANTITY_VARIABLE" => "quantity",
                            "ADD_PROPERTIES_TO_BASKET" => "Y",
                            "PRODUCT_PROPS_VARIABLE" => "prop",
                            "PARTIAL_PRODUCT_PROPERTIES" => "N",
                            "PRODUCT_PROPERTIES" => array(
                            ),
                            "LINK_IBLOCK_TYPE" => "",
                            "LINK_IBLOCK_ID" => "",
                            "LINK_PROPERTY_SID" => "",
                            "LINK_ELEMENTS_URL" => "link.php?PARENT_ELEMENT_ID=#ELEMENT_ID#",
                            "USE_STORE" => "N",
                            "USE_ELEMENT_COUNTER" => "Y",
                            "PAGER_TEMPLATE" => ".default",
                            "DISPLAY_TOP_PAGER" => "N",
                            "DISPLAY_BOTTOM_PAGER" => "Y",
                            "PAGER_TITLE" => "Продукция",
                            "PAGER_SHOW_ALWAYS" => "N",
                            "PAGER_DESC_NUMBERING" => "N",
                            "PAGER_DESC_NUMBERING_CACHE_TIME" => "36000000",
                            "PAGER_SHOW_ALL" => "N",
                            "AJAX_OPTION_JUMP" => "N",
                            "AJAX_OPTION_STYLE" => "Y",
                            "AJAX_OPTION_HISTORY" => "N",
                            "SEF_FOLDER" => "/products/",
                            "COMPONENT_TEMPLATE" => ".default",
                            "AJAX_OPTION_ADDITIONAL" => "",
                            "USE_MAIN_ELEMENT_SECTION" => "N",
                            "SET_LAST_MODIFIED" => "N",
                            "SECTION_BACKGROUND_IMAGE" => "-",
                            "DETAIL_SET_CANONICAL_URL" => "N",
                            "DETAIL_CHECK_SECTION_ID_VARIABLE" => "N",
                            "DETAIL_BACKGROUND_IMAGE" => "-",
                            "SHOW_DEACTIVATED" => "N",
                            "PAGER_BASE_LINK_ENABLE" => "N",
                            "SHOW_404" => "N",
                            "MESSAGE_404" => "",
                            "DISABLE_INIT_JS_IN_COMPONENT" => "N",
                            "DETAIL_STRICT_SECTION_CHECK" => "N",
                            "COMPATIBLE_MODE" => "Y",
                            "SEF_URL_TEMPLATES" => array(
                                "sections" => "",
                                "section" => "#SECTION_ID#/",
                                "element" => "#SECTION_ID#/#ELEMENT_ID#/",
                                "compare" => "compare.php?action=#ACTION_CODE#",
                                "smart_filter" => "#SECTION_ID#/filter/#SMART_FILTER_PATH#/apply/",
                            ),
                            "VARIABLE_ALIASES" => array(
                                "compare" => array(
                                    "ACTION_CODE" => "action",
                                ),
                            )
                        ),
                        false
                    );?>
                </div>
                <div class="col-lg-3 order-lg-1 mt--30 mt-md--40" id="primary-sidebar">
                    <div class="sidebar-widget">
                        <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "left-menu", array(
                            "IBLOCK_TYPE" => "products",
                            "IBLOCK_ID" => "2",
                            "SECTION_ID" => "",
                            "SECTION_CODE" => "",
                            "COUNT_ELEMENTS" => "N",
                            "TOP_DEPTH" => "2",
                            "SECTION_FIELDS" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SECTION_USER_FIELDS" => array(
                                0 => "",
                                1 => "",
                            ),
                            "SECTION_URL" => "",
                            "CACHE_TYPE" => "N",
                            "CACHE_TIME" => "36000000",
                            "CACHE_GROUPS" => "Y",
                            "ADD_SECTIONS_CHAIN" => "Y"
                        ),
                            false
                        );?>
                    </div>
                </div>
            </div>
        </div>
    </div>



<?$APPLICATION->IncludeComponent(
	"bitrix:breadcrumb",
	"main",
	Array(
		"START_FROM" => "0",
		"PATH" => "",
		"SITE_ID" => "-"
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php");?>