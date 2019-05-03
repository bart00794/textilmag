<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("keywords_inner", "�������� ��� ���� �����, ��������� ���������, ������ ���������, �������� ������, ������� � �������� ������ �����");
$APPLICATION->SetPageProperty("title", "������ �������� ����� \"�����������\": ���������, �������� ������, �������, ��������");
$APPLICATION->SetPageProperty("keywords", "�������� ��� ���� �����, ��������� ���������, ������ ���������, �������� ������, ������� � �������� ������ �����");
$APPLICATION->SetPageProperty("description", "����������� �������� \"�����������\" ���������� ��� ������������ �������� �����: ��������� ���������, ������ ��� �����, ������� ������. �������!");
$APPLICATION->SetTitle("������ �������� ����� \"�����������\": ���������, �������� ������, �������, ��������");
?> 
<div style="text-align: justify;"> 
	 <?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"banner", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "Y",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"DETAIL_URL" => "https://textilmag.ru/products/55/2214/",
		"DISPLAY_BOTTOM_PAGER" => "Y",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "N",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "4",
		"IBLOCK_TYPE" => "content",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",
		"INCLUDE_SUBSECTIONS" => "Y",
		"NEWS_COUNT" => "20",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "Y",
		"PAGER_SHOW_ALWAYS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "�������",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",
		"SET_META_DESCRIPTION" => "Y",
		"SET_META_KEYWORDS" => "Y",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SORT_BY1" => "NAME",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "ASC",
		"COMPONENT_TEMPLATE" => "banner",
		"AJAX_OPTION_ADDITIONAL" => "",
		"SET_LAST_MODIFIED" => "N",
		"STRICT_SECTION_CHECK" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => ""
	),
	false,
	array(
		"ACTIVE_COMPONENT" => "Y"
	)
);?>

<?global $arrFilter;$arrFilter = array("PROPERTY_ON_MAIN_VALUE"=>"Yes");?> <?$APPLICATION->IncludeComponent(
	"bitrix:catalog.section",
	"slider",
	Array(
		"AJAX_MODE" => "N",
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "2",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(),
		"ELEMENT_SORT_FIELD" => "sort",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "Y",
		"SECTION_URL" => "",
		"DETAIL_URL" => "",
		"SECTION_ID_VARIABLE" => "SECTION_ID",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "-",
		"BROWSER_TITLE" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"DISPLAY_COMPARE" => "N",
		"SET_TITLE" => "N",
		"SET_STATUS_404" => "N",
		"PAGE_ELEMENT_COUNT" => "40",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(),
		"OFFERS_LIMIT" => "0",
		"PRICE_CODE" => array(),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"BASKET_URL" => "/personal/basket.php",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(),
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "������",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N"
	)
);?> <?unset($arrFilter);?> 
  <div class="col-md-12 alert alert-warning" style="margin-top: 30px;">�������� ���� �������� �� ��, ��� ��� �������������� �� ����� ���������, �� �������� � ������ �������������� ����� �������������� �������� � �� ��� ����� �������� �� �������� ��������� �������.����������� � ���� �� �������� ������� �������� ��������������� �� ������ ���������� � ����� ���� �������� � ����� ����� ��� ���������������� �����������. ��� ��������� ��������� ���������� ��� ���������� ������� ����������� � ���������� �������� �� ���������: +7(905)109-31-15, +7(920)355-40-95 ��� ������ �� ����������� �����: <a href="mailto:textilmag@yandex.ru" >textilmag@yandex.ru</a></div>
 <?$APPLICATION->IncludeComponent(
	"bitrix:furniture.catalog.index",
	"main",
	Array(
		"IBLOCK_TYPE" => "products",
		"IBLOCK_ID" => "2",
		"IBLOCK_BINDING" => "section",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y"
	)
);?>�</div>
 
<h2 style="text-align: justify;">�������� ���������! �������� �� ������� �����!</h2>
 
<div style="text-align: justify;">�������� �������� ����� ������� �� ���� ������� ���������� - <b>����� ���</b>, <b>23 �������</b>, <b>8 �����</b>, <b>�����</b>, ����� ���������� �� 2-3 ������ �� ���������, �.�. ��-�� �������� ������� ������� ������ �������� � ������������� � ��������� ������� �� ������� �������� �����. �������� �� ��������� � ����������� ������������ � �������� ��� ����� ������. �� ���� �������� � �� ��������� ����������� ���������� �� ��������;</div>
 
<div style="text-align: justify;">+7(905)109-31-15, +7(920)355-40-95</div>
 
<div style="text-align: justify;">� ����� �� ����������� �����<a href="mailto:textilmag@yandex.ru" >textilmag@yandex.ru</a>. ����������� �������� �� ������������� �� �������!</div>
 
<div style="text-align: justify;"> 
  <br />
 </div>
 
<div style="text-align: justify;"> 
  <br />
 </div>
 
<div style="text-align: justify;"><b><i>�������� ��������� - ���������� �������, ������, ������.</i></b></div>
 
<div style="text-align: justify;">�� �������������� �������� ����������� �� ������ ����������� ���������� ������ �� ��������� ����� ������� ��������: � 66 �� 76! � ����� ������� ����� ������� ����� �������� � ������.�</div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>