<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("������ �������� ����� \"�����������\": ���������, �������� ������, �������, ��������");
?>

<?$APPLICATION->IncludeComponent("bitrix:news.list", "slider", Array(
	"ACTIVE_DATE_FORMAT" => "d.m.Y",	// ������ ������ ����
		"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
		"AJAX_MODE" => "N",	// �������� ����� AJAX
		"AJAX_OPTION_HISTORY" => "N",	// �������� �������� ��������� ��������
		"AJAX_OPTION_JUMP" => "N",	// �������� ��������� � ������ ����������
		"AJAX_OPTION_STYLE" => "Y",	// �������� ��������� ������
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_TYPE" => "A",	// ��� �����������
		"CHECK_DATES" => "Y",	// ���������� ������ �������� �� ������ ������ ��������
		"DETAIL_URL" => "/products/",	// URL �������� ���������� ��������� (�� ��������� - �� �������� ���������)
		"DISPLAY_BOTTOM_PAGER" => "Y",	// �������� ��� �������
		"DISPLAY_DATE" => "N",	// �������� ���� ��������
		"DISPLAY_NAME" => "N",	// �������� �������� ��������
		"DISPLAY_PICTURE" => "Y",	// �������� ����������� ��� ������
		"DISPLAY_PREVIEW_TEXT" => "Y",	// �������� ����� ������
		"DISPLAY_TOP_PAGER" => "N",	// �������� ��� �������
		"FIELD_CODE" => array(	// ����
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",	// ������
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",	// �������� ������, ���� ��� ���������� ��������
		"IBLOCK_ID" => "4",	// ��� ��������������� �����
		"IBLOCK_TYPE" => "content",	// ��� ��������������� ����� (������������ ������ ��� ��������)
		"INCLUDE_IBLOCK_INTO_CHAIN" => "Y",	// �������� �������� � ������� ���������
		"INCLUDE_SUBSECTIONS" => "Y",	// ���������� �������� ����������� �������
		"NEWS_COUNT" => "20",	// ���������� �������� �� ��������
		"PAGER_DESC_NUMBERING" => "N",	// ������������ �������� ���������
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",	// ����� ����������� ������� ��� �������� ���������
		"PAGER_SHOW_ALL" => "Y",	// ���������� ������ "���"
		"PAGER_SHOW_ALWAYS" => "Y",	// �������� ������
		"PAGER_TEMPLATE" => ".default",	// ������ ������������ ���������
		"PAGER_TITLE" => "�������",	// �������� ���������
		"PARENT_SECTION" => "",	// ID �������
		"PARENT_SECTION_CODE" => "",	// ��� �������
		"PREVIEW_TRUNCATE_LEN" => "",	// ������������ ����� ������ ��� ������ (������ ��� ���� �����)
		"PROPERTY_CODE" => array(	// ��������
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "Y",	// ������������� ��������� ���� ��������
		"SET_META_DESCRIPTION" => "Y",	// ������������� �������� ��������
		"SET_META_KEYWORDS" => "Y",	// ������������� �������� ����� ��������
		"SET_STATUS_404" => "N",	// ������������� ������ 404
		"SET_TITLE" => "N",	// ������������� ��������� ��������
		"SORT_BY1" => "NAME",	// ���� ��� ������ ���������� ��������
		"SORT_BY2" => "SORT",	// ���� ��� ������ ���������� ��������
		"SORT_ORDER1" => "ASC",	// ����������� ��� ������ ���������� ��������
		"SORT_ORDER2" => "ASC",	// ����������� ��� ������ ���������� ��������
		"COMPONENT_TEMPLATE" => "banner",
		"AJAX_OPTION_ADDITIONAL" => "",	// �������������� �������������
		"SET_LAST_MODIFIED" => "N",	// ������������� � ���������� ������ ����� ����������� ��������
		"STRICT_SECTION_CHECK" => "N",	// ������� �������� ������� ��� ������ ������
		"PAGER_BASE_LINK_ENABLE" => "N",	// �������� ��������� ������
		"SHOW_404" => "N",	// ����� ����������� ��������
		"MESSAGE_404" => "",	// ��������� ��� ������ (�� ��������� �� ����������)
	),
	false,
	array(
	"ACTIVE_COMPONENT" => "Y"
	)
);?>
    <!-- Product tab area Start Here -->
    <?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", ".default", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"IBLOCK_TYPE" => "products",	// ��� ���������
		"IBLOCK_ID" => "2",	// ��������
		"SECTION_ID" => "",	// ID �������
		"SECTION_CODE" => "",	// ��� �������
		"COUNT_ELEMENTS" => "N",	// ���������� ���������� ��������� � �������
		"TOP_DEPTH" => "1",	// ������������ ������������ ������� ��������
		"SECTION_FIELDS" => array(	// ���� ��������
			0 => "NAME",
			1 => "PICTURE",
			2 => "",
		),
		"SECTION_USER_FIELDS" => array(	// �������� ��������
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "sectionsFilter",	// ��� ������� �� ���������� ������� ��������
		"VIEW_MODE" => "TILE",	// ��� ������ �����������
		"SHOW_PARENT_NAME" => "Y",	// ���������� �������� �������
		"HIDE_SECTION_NAME" => "Y",	// �� ���������� �������� �����������
		"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
		"CACHE_FILTER" => "N",	// ���������� ��� ������������� �������
		"ADD_SECTIONS_CHAIN" => "N",	// �������� ������ � ������� ���������
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>