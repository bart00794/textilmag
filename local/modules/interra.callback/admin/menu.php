<?
IncludeModuleLangFile(__FILE__);

/*$aModuleMenuLinks[] = Array(
	GetMessage("MENU_TITLE_DESC"),
	"/bitrix/admin/interra_callback_admin.php",
	Array(),
	Array(
		"SEPARATOR"  => "Y",
		"SORT"       => 1000,		
		"INDEX_PAGE" => "/bitrix/admin/interra_callback_admin.php"
	)
);*/

$aMenu = Array(
	"parent_menu" => "global_menu_services",
		"section" => "interra.callback",
		"sort" => 100,
		"module_id" => "interra.callback",
		"text" => GetMessage("CBKMENU_TEXT_DESC"),
		"title" => GetMessage("CBKMENU_TITLE_DESC"),
		"url" => "/bitrix/admin/interra_callback_admin.php"
);

return $aMenu;
?>
