<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

$arComponentParameters = array(
	"PARAMETERS" => array(
		"SHABLON_IDS" => array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("SHABLON_IDS_TEXT"),
			"TYPE" => "INPUT",
			"DEFAULT" => "BLACKBUTTERFLY_CONTACTS_SEND",
		),
		"VARIANT_DOSTAVKA" => Array(
			"NAME" => GetMessage("VARIANT_DOSTAVKA"), 
			"TYPE" => "STRING",
			"DEFAULT" => "", 
			"MULTIPLE" => "Y",
			"PARENT" => "BASE",
		),		
	
		"EMAIL_TO" => Array(
			"NAME" => GetMessage("MFP_EMAIL_TO"), 
			"TYPE" => "STRING",
			"DEFAULT" => htmlspecialcharsbx(COption::GetOptionString("main", "email_from")), 
			"PARENT" => "BASE",
		),		
		
		"AJAX_MODE" => array(),
		),		
	
);


?>