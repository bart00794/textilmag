<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Женский трикотаж, халаты женские, женские костюмы Иваново. Мы предлагаем халат женский, костюм женский, постельное белье, комплекты постельного белья, КПБ, пижамы, сорочки ночные. Трикотажные платья и туники, домашние костюмы женские, ночные сорочки и пижамы.");
$APPLICATION->SetPageProperty("title", "Прайс-лист на женский трикотаж оптом");
$APPLICATION->SetTitle("Прайс-лист трикотажной компании Текстильмаг");
?><?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "price", Array(
	"VIEW_MODE" => "LIST",	// Вид списка подразделов
		"SHOW_PARENT_NAME" => "Y",	// Показывать название раздела
		"IBLOCK_TYPE" => "products",	// Тип инфоблока
		"IBLOCK_ID" => "2",	// Инфоблок
		"SECTION_ID" => $_REQUEST["SECTION_ID"],	// ID раздела
		"SECTION_CODE" => "",	// Код раздела
		"SECTION_URL" => "",	// URL, ведущий на страницу с содержимым раздела
		"COUNT_ELEMENTS" => "Y",	// Показывать количество элементов в разделе
		"TOP_DEPTH" => "5",	// Максимальная отображаемая глубина разделов
		"SECTION_FIELDS" => "",	// Поля разделов
		"SECTION_USER_FIELDS" => "",	// Свойства разделов
		"ADD_SECTIONS_CHAIN" => "Y",	// Включать раздел в цепочку навигации
		"CACHE_TYPE" => "A",	// Тип кеширования
		"CACHE_TIME" => "36000000",	// Время кеширования (сек.)
		"CACHE_GROUPS" => "Y",	// Учитывать права доступа
	),
	false
);?><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>