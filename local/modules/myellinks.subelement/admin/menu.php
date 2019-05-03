<?
if(!is_object($GLOBALS["USER_FIELD_MANAGER"]))
	return false;

IncludeModuleLangFile(__FILE__);
$module_id="myellinks.subelement" ; 
if(!CModule::IncludeModule($module_id))return false;

if($APPLICATION->GetGroupRight($module_id) >= "R")
{
	$aMenu = array(
		"parent_menu" => "global_menu_services",
		"section" => "myellinks_subelement",
		"sort" => 800,
		"text" => GetMessage("SOKRAT_SUBELEMENT_MAIN"),
		"title"=> GetMessage("SOKRAT_SUBELEMENT_MAIN_TITLE"),
		"icon" => "sokrat_subelement_menu_icon",
		"page_icon" => "sokrat_subelement_page_icon",
		"items_id" => "sokrat_subelement_menu",
		"items" => array(
			array(
				"text" => GetMessage("SOKRAT_SUBELEMENT_ELEMENT"),
				"url" => "myellinks.subelement.element.list.php?lang=".LANGUAGE_ID,
				"more_url" => array("myellinks.subelement.element.edit.php"),
				"title" => GetMessage("SOKRAT_SUBELEMENT_ELEMENT_TITLE"),
			),
		)
	);
	return $aMenu;
}
return false;
?>