<?
/**
* myellinks Sube lementInterface
* 
* @author Danilin Alexander I. <Danilin2010@yandex.ru>
* @version 1.0
**/
IncludeModuleLangFile(__FILE__);
class myellinksSubelementInterface extends myellinksElement
{
	
	function __construct()
	{
		$this->TABLE_NAME= "b_myellinks_subelement_interface";
	}

	function CheckFields(&$arFields, $strOperation = 'ADD')
	{
		global $APPLICATION;
		if(!$this->CheckName($arFields,$strOperation,'NAME')) return false;
		$this->CheckActive($arFields,$strOperation,'ACTIVE');
		$this->CheckSort($arFields,$strOperation,'SORT');
		
		if(!$this->CheckIntStrictly($arFields,$strOperation,'IBLOCK_ID'))
		{
			$APPLICATION->ThrowException(GetMessage("ERROR_ATG_NO_IBLOCK_ID"));
			return false;
		}
		if(!$this->CheckIntStrictly($arFields,$strOperation,'TAB_IBLOCK_ID'))
		{
			$APPLICATION->ThrowException(GetMessage("ERROR_ATG_NO_TAB_IBLOCK_ID"));
			return false;
		}
		if(!$this->CheckIntStrictly($arFields,$strOperation,'TAB_CODE_PROP'))
		{
			$APPLICATION->ThrowException(GetMessage("ERROR_ATG_NO_TAB_CODE_PROP"));
			return false;
		}
		return true;
	}
	
	public function GetFields(&$arFields,$NAME)
	{
		$arFields = array(
			"ID" => Array("FIELD" => $NAME.".ID", "TYPE" => "int"),
			"IBLOCK_ID" => Array("FIELD" => $NAME.".IBLOCK_ID", "TYPE" => "int"),
			"TAB_IBLOCK_ID" => Array("FIELD" => $NAME.".TAB_IBLOCK_ID", "TYPE" => "int"),
			"TAB_CODE_PROP" => Array("FIELD" => $NAME.".TAB_CODE_PROP", "TYPE" => "int"),
			"NAME" => Array("FIELD" => $NAME.".NAME", "TYPE" => "string"),
			"ACTIVE" => Array("FIELD" => $NAME.".ACTIVE", "TYPE" => "string"),
			"SORT" => Array("FIELD" => $NAME.".SORT", "TYPE" => "int"),
			);
	}
	
	public function GetAfterFields(&$arFields,$NAME)
	{
		$arFields["COUNT"]=Array("FIELD" => "COUNT(".$NAME.".ID)", "TYPE" => "string","AS"=>"COUNT");
	}
	
	function BeforeDelete($ID)
	{
		return true;
	}

}
?>