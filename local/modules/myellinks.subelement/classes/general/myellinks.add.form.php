<?
IncludeModuleLangFile(__FILE__);
class myellinksAddForm
{
	function ShowForm(&$form)
	{
		$module_id="myellinks.subelement";
		
		$UrlEdit='/bitrix/admin/iblock_element_edit.php';
		$UrlMeEdit='/bitrix/admin/myellinks.subelement.edit.php';
		$UrlMeList='/bitrix/admin/myellinks.subelement.list.php';

		$arrTab=array(

		);
		
		if(
			($GLOBALS['APPLICATION']->GetCurPage()==$UrlEdit || $GLOBALS['APPLICATION']->GetCurPage()==$UrlMeEdit)
			&& $_REQUEST['IBLOCK_ID']>0
			&& CModule::IncludeModule($module_id)
		)
		{
			if($GLOBALS['APPLICATION']->GetCurPage()==$UrlMeEdit)
			{
				foreach($form->tabs as &$temp)
				{
					//if(substr($temp["DIV"],0,5)=="cedit")
						$temp["DIV"]=$_REQUEST["PRODUCT_ID"]."_".$_REQUEST['IBLOCK_ID']."_".$temp["DIV"];
				}unset($temp);
			}
			
			//AddMessage2Log(print_r($_REQUEST,true));

			
			$arrOrder=array(
				"SORT"=>"ASC",
			);
			$arFilter=array(
				"ACTIVE"=>"Y",
				"IBLOCK_ID"=>$_REQUEST['IBLOCK_ID'],
			);
			$el=new myellinksSubelementInterface();
			$ResSubelement=$el->GetList($arrOrder,$arFilter);
			while($Tab=$ResSubelement->GetNext()){
				
				unset($arSubCatalog);
				
				if($_REQUEST['ID'])
				{
					$ID=$_REQUEST['ID'];
				
					$bOffers = false;
				
					define('B_ADMIN_SUBELEMENTS',1);
					define('B_ADMIN_SUBELEMENTS_LIST',false);
				
					
					
					$strSubIBlockType = CIBlock::GetArrayByID($Tab["TAB_IBLOCK_ID"],'IBLOCK_TYPE_ID');
					$arSubIBlockType = CIBlockType::GetByIDLang($strSubIBlockType, LANGUAGE_ID);
					$intSubIBlockID = $Tab["TAB_IBLOCK_ID"];
					$arSubIBlock = CIBlock::GetArrayByID($intSubIBlockID);
				
		
					$boolSubBizproc = CModule::IncludeModule("bizproc");
					$boolSubWorkFlow = CModule::IncludeModule("workflow");
					$boolSubWorkFlow = $boolSubBizproc && (CIBlock::GetArrayByID($intSubIBlockID, "WORKFLOW") != "N");
					$boolSubBizproc = $boolSubBizproc && (CIBlock::GetArrayByID($intSubIBlockID, "BIZPROC") != "N");
				
					$boolSubCatalog = (is_array($arSubCatalog) ? true : false);
				
					$arSubIBlock["SITE_ID"] = array();
					$rsSites = CIBlock::GetSite($intSubIBlockID);
					while($arSite = $rsSites->Fetch())
						$arSubIBlock["SITE_ID"][] = $arSite["LID"];
				
					if(!$arSubCatalog['SKU_PROPERTY_ID'])
							$arSubCatalog['SKU_PROPERTY_ID']=$Tab["TAB_CODE_PROP"];
						$boolSubCatalog = false;

					$TMP_ID=(int)$_REQUEST['TMP_ID'];
					$intSubPropValue = ((0 == $ID) || ($bCopy) ? '-'.$TMP_ID : $ID);
					$strSubTMP_ID = $TMP_ID;
				
					//$strSubElementAjaxPath = $UrlMeEdit.'?WF=Y&IBLOCK_ID='.$intSubIBlockID.'&type='.urlencode($strSubIBlockType).'&lang='.LANGUAGE_ID.'&find_section_section=0&find_el_property_'.$arSubCatalog['SKU_PROPERTY_ID'].'='.((0 == $ID) || ($bCopy) ? '-'.$TMP_ID : $ID).'&TMP_ID='.urlencode($strSubTMP_ID).'&SKU_PROPERTY_ID='.$arSubCatalog['SKU_PROPERTY_ID'];
				
					$bCopyS = false;
					if (!$bAutocomplete)
					{
						$bCopyS=(isset($_REQUEST['action']) && $_REQUEST["action"] == "copy");
					}
				
				
					ob_start();
					

					
					?><tr id="tr_OFFERS_<?=$_REQUEST["ID"]."_".$_REQUEST['IBLOCK_ID']?>_<?=$Tab["TAB_IBLOCK_ID"]?>"><td colspan="2"><?
						if (file_exists($_SERVER["DOCUMENT_ROOT"].$UrlMeList))
							require($_SERVER["DOCUMENT_ROOT"].$UrlMeList);
					?></td></tr><?
					$temp=ob_get_contents();
					ob_end_clean();
					$form->tabs[]=array('DIV'=>"list_edit_tab_link_".$_REQUEST["ID"]."_".$_REQUEST['IBLOCK_ID']."_".$Tab["TAB_IBLOCK_ID"],'TAB' =>$Tab["NAME"],'TITLE'=>$Tab["NAME"],'CONTENT'=>$temp);
				
					
				}else{
					$form->tabs[]=array('DIV'=>"list_edit_tab_link_".$Tab["TAB_IBLOCK_ID"],'TAB'=>$Tab["NAME"],'TITLE' =>$Tab["NAME"],'CONTENT'=>
						'<tr valign="top">
							<td>'.GetMessage("ERR_LINK").'</td>
						</tr>'
					);
				}
			}
		}
	}
	

	
}

?>