<?
IncludeModuleLangFile(__FILE__);
if (class_exists("myellinks_subelement")) return;
Class Myellinks_subelement extends CModule
{
	var $MODULE_ID = "myellinks.subelement";
	
	var $MODULE_VERSION; 
	var $MODULE_VERSION_DATE;
	var $MODULE_NAME; 
	var $MODULE_DESCRIPTION;
	var $PARTNER_NAME;
	var $PARTNER_URI;
	
	var $MODULE_CSS;

	var $MODULE_GROUP_RIGHTS = "Y";
	
	var $errors;
	
	
	function __construct()
	{
		$arModuleVersion = array();
		include(dirname(__FILE__)."/version.php");
		$this->MODULE_VERSION = $arModuleVersion["VERSION"];
		$this->MODULE_VERSION_DATE = $arModuleVersion["VERSION_DATE"];
		$this->MODULE_NAME = GetMessage("MODULE_NAME");
		$this->MODULE_DESCRIPTION = GetMessage("MODULE_DESC");
		$this->PARTNER_NAME = GetMessage("PARTNER_NAME");
		$this->PARTNER_URI = GetMessage("PARTNER_URI");
	}
	
	function DoInstall()
	{
		$this->InstallDB();
		$this->InstallEvents();
		$this->InstallFiles();
		RegisterModule($this->MODULE_ID);
	}
	
	function DoUninstall()
	{
		global $APPLICATION;
		if (!check_bitrix_sessid())
			return false;
			
		$step = IntVal($_REQUEST['step']);
		if($step < 2)
		{
			$APPLICATION->IncludeAdminFile(GetMessage("C_MODULE_INSTALL"), $_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/uninst1.php");
		}elseif($step == 2){
			$this->UnInstallDB(array(
				"save_tables" => $_REQUEST["save_tables"],
			));
			$this->UnInstallFiles();
			$this->UnInstallEvents();
			UnRegisterModule($this->MODULE_ID);
		}
	}
	
	function InstallEvents()
	{
		RegisterModuleDependences("main","OnAdminTabControlBegin",$this->MODULE_ID,"myellinksAddForm","ShowForm");
		return true;
	}

	function UnInstallEvents()
	{
		UnRegisterModuleDependences("main","OnAdminTabControlBegin",$this->MODULE_ID,"myellinksAddForm","ShowForm");
		return true;
	}
	
	function InstallDB()
	{
		global $DB, $DBType, $APPLICATION;
		$this->errors = false;

		if(!$DB->Query("SELECT 'x' FROM b_myellinks_subelement_interface", true))
		{	
			$this->errors = $DB->RunSQLBatch($_SERVER['DOCUMENT_ROOT']."/bitrix/modules/{$this->MODULE_ID}/install/db/".$DBType."/install.sql");
		}

		if($this->errors !== false)
		{
			$APPLICATION->ThrowException(implode("", $this->errors));
			return false;
		}

		return true;
	}
	
	function UnInstallDB($params)
	{
		global $DB, $DBType;
		if (!$params['save_tables']=="Y") {
			$DB->RunSQLBatch($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/db/".$DBType."/uninstall.sql");
		}
		return true;
	}
		
	function InstallFiles()
	{
		if($_ENV["COMPUTERNAME"]!='BX')
		{
			CopyDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/admin/", $_SERVER['DOCUMENT_ROOT']."/bitrix/admin/");
		}
		return true;
	}
	
	function UnInstallFiles()
	{
		if($_ENV["COMPUTERNAME"]!='BX')
		{
			DeleteDirFiles($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/{$this->MODULE_ID}/install/admin/",$_SERVER['DOCUMENT_ROOT']."/bitrix/admin/");
		}
		return true;
	}
	
	function GetModuleRightList()
	{
		$arr = array(
			"reference_id" => array("D","R","W"),
			"reference" => array(
					GetMessage("FORM_DENIED"),
					GetMessage("FORM_OPENED"),
					GetMessage("FORM_FULL")
					),
				);
		return $arr;
	}
	
};

?>
