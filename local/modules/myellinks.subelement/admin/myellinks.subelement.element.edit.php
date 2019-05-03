<?
require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_before.php");
$module_id="myellinks.subelement";

$ListItem="/bitrix/admin/myellinks.subelement.element.list.php?lang=";
$EditItem="/bitrix/admin/myellinks.subelement.element.edit.php?lang=";

$EditGetProp="/bitrix/admin/myellinks.subelement.element.edit.get.prop.php";

$TableModule="b_myellinks_subelement_interface";

IncludeModuleLangFile(__FILE__);
$POST_RIGHT = $APPLICATION->GetGroupRight($module_id);
if($POST_RIGHT=="D")
	$APPLICATION->AuthForm(GetMessage("ACCESS_DENIED"));
if(!CModule::IncludeModule($module_id))die();

ClearVars();
ClearVars("str_");

$errorMessage = "";
$bVarsFromForm = false;

$ID = IntVal($ID);

CJSCore::Init(array("jquery"));



if ($REQUEST_METHOD=="POST" && strlen($Update) > 0 && !$bReadOnly && check_bitrix_sessid())
{
	$arPICTURE = $HTTP_POST_FILES["PICTURE"];
	$arPICTURE["del"] = ${"PICTURE_del"};
	
	$arFields = array(
		"NAME"=>$NAME,
		"ACTIVE"=>$ACTIVE,
		"SORT"=>$SORT,
		"IBLOCK_ID"=>$IBLOCK_ID,
		"TAB_IBLOCK_ID"=>$TAB_IBLOCK_ID,
		"TAB_CODE_PROP"=>$TAB_CODE_PROP,

	);

	$el=new myellinksSubelementInterface;
	if ($ID>0)
	{
		if (!$el->Update($ID, $arFields))
		{
			if ($ex = $APPLICATION->GetException())
				$errorMessage .= $ex->GetString().". ";
			else
				$errorMessage .= GetMessage("AT_ERROR_SAVING_EXTRA").". ";
		}
	}else{
		$ID = $el->Add($arFields);
		$ID = IntVal($ID);
		if ($ID <= 0)
		{
			if ($ex = $APPLICATION->GetException())
				$errorMessage .= $ex->GetString().". ";
			else
				$errorMessage .= GetMessage("AT_ERROR_SAVING_EXTRA").". ";
		}
	}
	
	if (strlen($errorMessage)<=0)
	{
		if(strlen($apply)<=0)
			LocalRedirect($ListItem.LANG);
		else
			LocalRedirect($EditItem.LANG."&ID=".$ID."&tabControl_active_tab=".urlencode($tabControl_active_tab));
	}
	else
	{
		$bVarsFromForm = true;
	}
}
$ArrTabCodeProp=array();
$APPLICATION->SetTitle(GetMessage("TITLE"));
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_admin_after.php");
if ($ID > 0)
{
	$el =new myellinksSubelementInterface;
	$arExtra=$el->GetByID($ID);
	if (!$arExtra=$arExtra->GetNext())
	{
		if ($bReadOnly)
			$errorMessage .= GetMessage("CEEN_NO_PERMS2ADD").". ";
		$ID = 0;
	}
	else
	{
		$str_NAME = $arExtra["NAME"];
		$str_ACTIVE = htmlspecialchars($arExtra["ACTIVE"]);
		$str_SORT = $arExtra["SORT"];
		$str_IBLOCK_ID = $arExtra["IBLOCK_ID"];
		$str_TAB_IBLOCK_ID = $arExtra["TAB_IBLOCK_ID"];
		$str_TAB_CODE_PROP = $arExtra["TAB_CODE_PROP"];
		if($str_TAB_IBLOCK_ID>0 && CModule::IncludeModule("iblock"))
		{
			$properties = CIBlockProperty::GetList(Array("sort"=>"asc","name"=>"asc"),Array("ACTIVE"=>"Y","PROPERTY_TYPE"=>"E","IBLOCK_ID"=>$str_TAB_IBLOCK_ID));
			while ($prop_fields = $properties->GetNext())
			{
				$ArrTabCodeProp[]=array(
					"ID"=>$prop_fields["ID"],
					"NAME"=>$prop_fields["NAME"],
				);
			}
		}
	}
}



if ($bVarsFromForm)
	$DB->InitTableVarsForEdit($TableModule, "", "str_");
	
$aMenu = array(
	array(
		"TEXT" => GetMessage("AT_LIST"),
		"LINK" => $ListItem.LANG,
		"ICON"=>"btn_list",
	)
);

if ($ID > 0 && !$bReadOnly )
{
	$aMenu[] = array(
			"TEXT" => GetMessage("AT_NEW_GROUP"),
			"ICON" => "btn_new",
			"LINK" => $EditItem.LANG 
		);
	$aMenu[] = array(
			"TEXT" => GetMessage("AT_DEL_GROUP"), 
			"ICON" => "btn_delete",
			"LINK" => "javascript:if(confirm('".GetMessage("AT_DEL_GROUP_CONFIRM")."')) window.location='".$ListItem.LANG."&ID=".$ID."&action=delete&".bitrix_sessid_get()."#tb';",
			"WARNING" => "Y"
		);
}
	
$context = new CAdminContextMenu($aMenu);
$context->Show();
	
CAdminMessage::ShowMessage($errorMessage);
?>
<script language="javascript">
$(document).ready(function(){
	$('#TAB_IBLOCK_ID').on('change',function(){
		var q={id:$(this).val()};
		$.post("<?=$EditGetProp?>",q,function(data){
			$('#TAB_CODE_PROP').html(data);
		});
	});
});
</script>

<form method="POST" action="<?echo $APPLICATION->GetCurPage()?>?lang=<?echo LANG?><?if ($ID > 0):?>&ID=<?=$ID?><?endif;?>" name="form1" ENCTYPE="multipart/form-data">

<input type="hidden" name="Update" value="Y">
<input type="hidden" name="lang" value="<?echo LANG ?>">
<input type="hidden" name="ID" value="<?echo $ID ?>">
<?=bitrix_sessid_post()?>
<?
$aTabs = array(
		array("DIV" => "edit1", "TAB" => GetMessage("AT_TAB_GROUP"), "ICON" => "catalog", "TITLE" => GetMessage("AT_TAB_GROUP_DESCR")),
	);

$tabControl = new CAdminTabControl("tabControl", $aTabs);
$tabControl->Begin();
?>

<?
$tabControl->BeginNextTab();
?>

	<?if ($ID > 0):?>
		<tr>
			<td width="30%">ID:</td>
			<td width="70%"><?=$ID?></td>
		</tr>
	<?endif;?>
	<tr>
		<td width="30%"><?echo GetMessage("AT_ACTIVE")?>:</td>
		<td width="70%">
			<input type="checkbox" name="ACTIVE" id="ACTIVE" value="Y"<?if ($str_ACTIVE == "Y" || $ID<=0) echo " checked";?>>
		</td>
	</tr>
	<tr>
		<td width="30%"><span class="required">*</span><?echo GetMessage("AT_NAME")?>:</td>
		<td width="70%">
			<input type="text" name="NAME" size="50" value="<?=$str_NAME?>">
		</td>
	</tr>
	<tr>
		<td width="30%"><?echo GetMessage("AT_SORT")?>:</td>
		<td width="70%">
			<input type="text" name="SORT" size="50" value="<?=$str_SORT?>">
		</td>
	</tr>
	<tr>
		<td width="30%"><span class="required">*</span><?echo GetMessage("AT_IBLOCK_ID")?>:</td>
		<td width="70%">
			<?=GetIBlockDropDownList($str_IBLOCK_ID,'IBLOCK_TYPE_ID','IBLOCK_ID')?>
		</td>
	</tr>
	<tr>
		<td width="30%"><span class="required">*</span><?echo GetMessage("AT_TAB_IBLOCK_ID")?>:</td>
		<td width="70%">
			<?=GetIBlockDropDownList($str_TAB_IBLOCK_ID,'TAB_IBLOCK_TYPE_ID','TAB_IBLOCK_ID')?>
		</td>
	</tr>
	<tr>
		<td width="30%"><span class="required">*</span><?echo GetMessage("AT_TAB_CODE_PROP")?>:</td>
		<td width="70%">
			<select name="TAB_CODE_PROP" id="TAB_CODE_PROP">
				<?if(count($ArrTabCodeProp)>0){?>
					<option><?=GetMessage("AT_NO_TAB_CODE_PROP");?></option>
				<?}?>
				<?foreach ($ArrTabCodeProp as $prop){?>
					 <option <?if($prop["ID"]==$str_TAB_CODE_PROP){echo 'selected="selected"';}?>value="<?=$prop["ID"]?>"><?=$prop["NAME"]?></option>
				<?}?>
			</select>
		</td>
	</tr>



<?
$tabControl->EndTab();
?>

<?
$tabControl->Buttons(
		array(
				"disabled" => $bReadOnly,
				"back_url" => $ListItem.LANG,
			)
	);
?>

<?
$tabControl->End();
?>

</form>

<?echo BeginNote();?>
<span class="required">*</span> <?echo GetMessage("REQUIRED_FIELDS")?>
<?echo EndNote(); ?>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_admin.php");?>