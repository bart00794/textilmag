<?
$UrlEdit='/bitrix/admin/iblock_element_edit.php';
$UrlMeEdit='/bitrix/admin/myellinks.subelement.edit.php';
$UrlMeList='/bitrix/admin/myellinks.subelement.list.php';
$UrlMeListTemplate='/bitrix/admin/myellinks.subelement.list.template.php';

if (!function_exists("GetElementName")){
	function GetElementName($ID)
	{
		$ID = intval($ID);
		static $cache = array();
		if (!isset($cache[$ID]))
		{
			$rsElement = CIBlockElement::GetList(array(), array("ID"=>$ID, "SHOW_HISTORY"=>"Y"), false, false, array("ID","IBLOCK_ID","NAME"));
			$cache[$ID] = $rsElement->GetNext();
		}
		return $cache[$ID];
	}
}
if (!function_exists("GetIBlockTypeID")){
	function GetIBlockTypeID($intSubIBlockID)
	{
		$intSubIBlockID = IntVal($intSubIBlockID);
		if (0 > $intSubIBlockID)
			$intSubIBlockID = 0;
		static $cache = array();
		if (!isset($cache[$intSubIBlockID]))
		{
			$rsIBlock = CIBlock::GetByID($intSubIBlockID);
			if (!($cache[$intSubIBlockID] = $rsIBlock->GetNext()))
				$cache[$intSubIBlockID] = array("IBLOCK_TYPE_ID"=>"");
		}
		return $cache[$intSubIBlockID]["IBLOCK_TYPE_ID"];
	}
}

require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
CModule::IncludeModule("iblock");
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/iblock/prolog.php");
IncludeModuleLangFile(__FILE__);

CUtil::JSPostUnescape();
/*
 * this page only for actions and get info
 *
 */
define('B_ADMIN_SUBELEMENTS',1);
define('B_ADMIN_SUBELEMENTS_LIST',true);

$boolSubBizproc = CModule::IncludeModule("bizproc");
$boolSubWorkFlow = CModule::IncludeModule("workflow");

global $APPLICATION;

if(!$strSubTMP_ID)
	if (array_key_exists('TMP_ID', $_REQUEST))
   		$strSubTMP_ID = intval($_REQUEST['TMP_ID']);

if(!$strSubIBlockType)
{
	$arSubIBlockType = false;
	if (array_key_exists('type', $_REQUEST))
	    $strSubIBlockType = strval($_REQUEST['type']);
}
if ('' != $strSubIBlockType)
{
    $arSubIBlockType = CIBlockType::GetByIDLang($strSubIBlockType, LANGUAGE_ID);
}
if (false === $arSubIBlockType)
    $APPLICATION->AuthForm(GetMessage("IBLOCK_BAD_BLOCK_TYPE_ID"));

if(!$intSubIBlockID)
	if (array_key_exists('IBLOCK_ID', $_REQUEST))
	    $intSubIBlockID = intval($IBLOCK_ID);



$bBadBlock = true;
if (0 < $intSubIBlockID)
{
    $arSubIBlock = CIBlock::GetArrayByID($intSubIBlockID);
    if ($arSubIBlock)
    {
        $bBadBlock = !CIBlockRights::UserHasRightTo($intSubIBlockID, $intSubIBlockID, "iblock_admin_display");;
    }
}

if ($bBadBlock)
{
    $APPLICATION->SetTitle($arSubIBlockType["NAME"]);
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");

    echo ShowError(GetMessage("IBLOCK_BAD_IBLOCK"));?>
    <a href="/bitrix/admin/iblock_admin.php?lang=<?echo LANGUAGE_ID?>&type=<?echo htmlspecialcharsbx($strSubIBlockType)?>"><?echo GetMessage("IBLOCK_BACK_TO_ADMIN")?></a>
    <?
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");
    die();
}

$arSubIBlock["SITE_ID"] = array();
$rsSites = CIBlock::GetSite($intSubIBlockID);
while($arSite = $rsSites->Fetch())
    $arSubIBlock["SITE_ID"][] = $arSite["LID"];

$boolSubWorkFlow = $boolSubBizproc && $arSubIBlock["WORKFLOW"] != "N";
$boolSubBizproc = $boolSubBizproc && $arSubIBlock["BIZPROC"] != "N";

$boolSubCatalog = false;
$bCatalog = CModule::IncludeModule("catalog");
if ($bCatalog)
{
   // $arSubCatalog = CCatalogSKU::GetInfoByOfferIBlock($arSubIBlock["ID"]);
   // $boolSubCatalog = (!empty($arSubCatalog) && is_array($arSubCatalog));
   // if (!$boolSubCatalog)
   // {
  //      die();
  //  }
   // if (!($USER->CanDoOperation('catalog_read') || $USER->CanDoOperation('catalog_price')))
   //     $boolSubCatalog = false;
}
else
{
   // die();
}

if(!$arSubCatalog['SKU_PROPERTY_ID'])
	if($_REQUEST["SKU_PROPERTY_ID"])
		$arSubCatalog['SKU_PROPERTY_ID']=$_REQUEST["SKU_PROPERTY_ID"];
		
//$intSubPropValue = 0;
if (array_key_exists('find_el_property_'.$arSubCatalog['SKU_PROPERTY_ID'], $_REQUEST))
    $intSubPropValue = intval($_REQUEST['find_el_property_'.$arSubCatalog['SKU_PROPERTY_ID']]);
    

if(!$ID)
	$ID=(int)$_REQUEST['ID'];


if (0 >= $intSubPropValue)
{
    if (0 == $strSubTMP_ID)
    {
        die();
    }
}

$by=trim($_REQUEST["by"]);
if(strlen($by)<=0)
	$by="ID";
$order=trim($_REQUEST["order"]);
if(strlen($order)<=0)
	$order="ASC";


//$strSubElementAjaxPath = $UrlMeEdit.'?WF=Y&IBLOCK_ID='.$intSubIBlockID.'&type='.urlencode($strSubIBlockType).'&lang='.LANGUAGE_ID.'&find_section_section=0&find_el_property_'.$arSubCatalog['SKU_PROPERTY_ID'].'='.$intSubPropValue.'&TMP_ID='.urlencode($strSubTMP_ID);
$strSubElementAjaxPath = $UrlMeList.'?WF=Y&ID='.$ID.'&IBLOCK_ID='.$intSubIBlockID.'&type='.urlencode($strSubIBlockType).'&lang='.LANGUAGE_ID.'&find_section_section=0&find_el_property_'.$arSubCatalog['SKU_PROPERTY_ID'].'='.((0 == $ID) || ($bCopyS) ? '-'.$TMP_ID : $ID).'&SKU_PROPERTY_ID='.$arSubCatalog['SKU_PROPERTY_ID'].'&TMP_ID='.urlencode($strSubTMP_ID).'&by='.$by.'&order='.$order;


require($_SERVER["DOCUMENT_ROOT"].$UrlMeListTemplate);
//require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_popup_admin.php");

?>