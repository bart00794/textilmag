<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("�������");
?>


<?$APPLICATION->IncludeComponent(
	"blackbutterfly:sesionbasket",
	".default",
	array(
		"SHABLON_IDS" => "BLACKBUTTERFLY_CONTACTS_SEND",
		"VARIANT_DOSTAVKA" => array(
			0 => "����������������",
			1 => "������� �����",
			2 => "�������������",
			3 => "�����-������",
			4 => "���",
		),
		"EMAIL_TO" => "textilmag@yandex.ru",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => ""
	),
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>