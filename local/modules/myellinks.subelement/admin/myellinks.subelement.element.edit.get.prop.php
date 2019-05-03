<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
$module_id="myellinks.subelement";
$POST_RIGHT = $APPLICATION->GetGroupRight($module_id);
if($POST_RIGHT=="D")
	$APPLICATION->AuthForm(GetMessage("ACCESS_DENIED"));
if(!CModule::IncludeModule($module_id))die();

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_js.php");
$id=(int)$id;
IncludeModuleLangFile(__FILE__);
if (CModule::IncludeModule("iblock") && $id>0)
{
	?><option><?=GetMessage("AT_NO_TAB_CODE_PROP");?></option><?
	$properties = CIBlockProperty::GetList(Array("sort"=>"asc", "name"=>"asc"), Array("ACTIVE"=>"Y","PROPERTY_TYPE"=>"E","IBLOCK_ID"=>$id));
	while ($prop_fields = $properties->GetNext())
	{
		?><option value="<?=$prop_fields["ID"]?>"><?=$prop_fields["NAME"]?></option><?
	}
	
}
require($_SERVER["DOCUMENT_ROOT"].BX_ROOT."/modules/main/include/epilog_admin_js.php");
?>