<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?>


<?$APPLICATION->IncludeComponent(
	"sergar:cart",
	".default",
	[
		'EMAIL_TO'=> 'textilmag@yandex.ru',
		'EVENT_TYPE' => "BLACKBUTTERFLY_CONTACTS_SEND"
	],
	false
);?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>