<?if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();?>
<div class="content-form mfeedback">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
if(strlen($arResult["OK_MESSAGE"]) > 0)
{
	?><div class="mf-ok-text"><?=$arResult["OK_MESSAGE"]?></div><?
}
?>

<form action="" method="POST">
<?=bitrix_sessid_post()?>

<div class="input-group">
  <span class="input-group-addon"><?=GetMessage("MFT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></span>
  <input type="text" name="user_name" value="<?=$arResult["AUTHOR_NAME"]?>" class="form-control">
</div>
<div class="input-group">
  <span class="input-group-addon"><?=GetMessage("MFT_EMAIL")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("EMAIL", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></span>
  <input type="text" name="user_email" value="<?=$arResult["AUTHOR_EMAIL"]?>" class="form-control" >
</div>
<div class="input-group">
  <span class="input-group-addon"><?=GetMessage("MFT_MESSAGE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("MESSAGE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></span>
  <textarea name="MESSAGE" rows="5" class="form-control" ><?=$arResult["MESSAGE"]?></textarea>
</div>
			

	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
	<div class="field mf-captcha">
		<label class="field-title"><?=GetMessage("MFT_CAPTCHA")?></label>
		<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
		<img src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
	</div>
	<div class="field">
		<label class="field-title"><?=GetMessage("MFT_CAPTCHA_CODE")?><span class="mf-req">*</span></label>
		<div class="form-input"><input type="text" class="left_obr" name="captcha_word" size="30" maxlength="50" value=""  style="width:auto;"></div>
	</div>
	<?endif;?>
	<input onclick="yaCounter7925611.reachGoal('text'); return true;" type="submit" name="submit" value="<?=GetMessage("MFT_SUBMIT")?>">
</form>
</div>