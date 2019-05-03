<?
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

$site = ($_REQUEST["site"] <> ''? $_REQUEST["site"] : ($_REQUEST["src_site"] <> ''? $_REQUEST["src_site"] : false));
$arFilter = Array("TYPE_ID" => "ORDER_CALL", "ACTIVE" => "Y");
if($site !== false)
	$arFilter["LID"] = $site;
$arEvent = Array();
$dbType = CEventMessage::GetList($by="ID", $order="DESC", $arFilter);
while($arType = $dbType->GetNext())
	$arEvent[$arType["ID"]] = "[".$arType["ID"]."] ".$arType["SUBJECT"];



$arComponentParameters = array(
	"PARAMETERS" => array(
		"USE_CAPTCHA" => Array(
			"NAME" => GetMessage("CBK_CAPTCHA"), 
			"TYPE" => "CHECKBOX",
			"DEFAULT" => "Y", 
			"PARENT" => "BASE",
		),
		"OK_TEXT" => Array(
			"NAME" => GetMessage("CBK_OK_MESSAGE"), 
			"TYPE" => "STRING",
			"DEFAULT" => GetMessage("CBK_OK_TEXT"), 
			"PARENT" => "BASE",
		),
		"EMAIL_TO" => Array(
			"NAME" => GetMessage("CBK_EMAIL_TO"), 
			"TYPE" => "STRING",
			"DEFAULT" => htmlspecialcharsbx(COption::GetOptionString("main", "email_from")), 
			"PARENT" => "BASE",
		),
		"SAVE_FORM_DATA" => Array(
			"NAME" => GetMessage("CBK_SAVE_FORM_DATA"),
			"TYPE" => "CHECKBOX",
			"MULTIPLE" => "N",
			"VALUE" => "Y",
			"DEFAULT" =>"N",
			"REFRESH"=> "Y",
			"PARENT" => "BASE",			
		),		
		"REQUIRED_FIELDS" => Array(
			"NAME" => GetMessage("CBK_REQUIRED_FIELDS"), 
			"TYPE"=>"LIST", 
			"MULTIPLE"=>"Y", 
			"VALUES" => Array(
				"NONE" => GetMessage("CBK_ALL_REQ"), 
				"NAME" => GetMessage("CBK_NAME"), 
				"PHONE" => GetMessage("CBK_PHONE"), 
				"TIME" => GetMessage("CBK_TIME"),
				"DAY" => GetMessage("CBK_DAY"),
			),
			"DEFAULT"=>"", 
			"COLS"=>25, 
			"PARENT" => "BASE",
		),
		"EVENT_MESSAGE_ID" => Array(
			"NAME" => GetMessage("CBK_EMAIL_TEMPLATE"), 
			"TYPE"=>"LIST", 
			"VALUES" => $arEvent,
			"DEFAULT"=>"", 
			"MULTIPLE"=>"Y", 
			"COLS"=>25, 
			"PARENT" => "BASE",
		),
	)
);

if($arCurrentValues["SAVE_FORM_DATA"] == "Y"){
	if(!CModule::IncludeModule("iblock"))
		return;

	$arTypesEx = CIBlockParameters::GetIBlockTypes();
	
	$arComponentParameters["PARAMETERS"]["IBLOCK_TYPE"] =  Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("CBK_LIST_TYPE"),
			"TYPE" => "LIST",
			"VALUES" => $arTypesEx,
			"DEFAULT" => "news",
			"REFRESH" => "Y",
		);
	
	$arIBlocks = Array();
	$db_iblock = CIBlock::GetList(Array("SORT"=>"ASC"), Array("SITE_ID"=>$_REQUEST["site"], "TYPE" => ($arCurrentValues["IBLOCK_TYPE"]!="-"?$arCurrentValues["IBLOCK_TYPE"]:"")));
	while($arRes = $db_iblock->Fetch())
	{
		$arIBlocks[$arRes["ID"]] = $arRes["NAME"];
	}
	
	$arComponentParameters["PARAMETERS"]["IBLOCKS"]  =  Array(
			"PARENT" => "BASE",
			"NAME" => GetMessage("CBK_LIST_ID"),
			"TYPE" => "LIST",
			"VALUES" => $arIBlocks,
			"DEFAULT" => '',
			"MULTIPLE" => "Y",
		);
	
}
?>