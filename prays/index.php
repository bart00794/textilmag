<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "������� ��������, ������ �������, ������� ������� �������. �� ���������� ����� �������, ������ �������, ���������� �����, ��������� ����������� �����, ���, ������, ������� ������. ����������� ������ � ������, �������� ������� �������, ������ ������� � ������.");
$APPLICATION->SetPageProperty("title", "�����-���� �� ������� �������� �����");
$APPLICATION->SetTitle("�����-���� ����������� �������� �����������");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "price", Array(
	"VIEW_MODE" => "LIST",	// ��� ������ �����������
		"SHOW_PARENT_NAME" => "Y",	// ���������� �������� �������
		"IBLOCK_TYPE" => "products",	// ��� ���������
		"IBLOCK_ID" => "2",	// ��������
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID �������
		"SECTION_CODE" => "",	// ��� �������
		"SECTION_URL" => "",	// URL, ������� �� �������� � ���������� �������
		"COUNT_ELEMENTS" => "Y",	// ���������� ���������� ��������� � �������
		"TOP_DEPTH" => "5",	// ������������ ������������ ������� ��������
		"SECTION_FIELDS" => "",	// ���� ��������
		"SECTION_USER_FIELDS" => "",	// �������� ��������
		"ADD_SECTIONS_CHAIN" => "Y",	// �������� ������ � ������� ���������
		"CACHE_TYPE" => "A",	// ��� �����������
		"CACHE_TIME" => "36000000",	// ����� ����������� (���.)
		"CACHE_GROUPS" => "Y",	// ��������� ����� �������
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>