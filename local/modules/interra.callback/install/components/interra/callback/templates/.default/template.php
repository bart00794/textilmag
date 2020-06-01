<?
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponentTemplate $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */
 ?>
<div align="left" class="loadBar"></div>
<!--Заказать звонок-->
   <div class="frm_place">
<?if(!empty($arResult["ERROR_MESSAGE"]))
{
	foreach($arResult["ERROR_MESSAGE"] as $v)
		ShowError($v);
}
?>
   <form class="call_ord" action="<?=$componentPath?>/script/senddata.php" method="POST">
<?=bitrix_sessid_post()?>

	<h3><?=GetMessage("CBKT_HEADER")?></h3>
		<div class="input-group">
			<span class="input-group-addon"><?=GetMessage("CBKT_NAME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></span>
			<input type="text" class="form-control" value="<?=$arResult["AUTHOR_NAME"]?>" name="cbkf_name">
		</div><br>
		<div class="input-group">
			<span class="input-group-addon"><?=GetMessage("CBKT_PHONE")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></span>
			<input type="text" class="form-control numb" value="<?=$arResult["AUTHOR_PHONE"]?>" name="cbkf_phone">
		</div>
		<h5><?=GetMessage("CBKT_CALL")?></h5>
		<div class="input-group den-vybor">
			<span class="input-group-addon"><?=GetMessage("CBKT_DAY")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("DAY", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></span>
			<input type="text" class="form-control" value="<?=$arResult["DATE"]?>" name="cbkf_day">
		</div><br>
		<div class="input-group">
			<span class="input-group-addon"><?=GetMessage("CBKT_TIME")?><?if(empty($arParams["REQUIRED_FIELDS"]) || in_array("TIME", $arParams["REQUIRED_FIELDS"])):?><span class="mf-req">*</span><?endif?></span>
				<select name="cbkf_time" class="form-control">
					<option value="8">08 : 00 &mdash; 09 : 00</option>
					<option value="9">09 : 00 &mdash; 10 : 00</option>
					<option selected value="10">10 :00 &mdash; 11 : 00</option>
					<option value="11">11 :00 &mdash; 12 : 00</option>
					<option value="12">12 :00 &mdash; 13 : 00</option>
					<option value="13">13 :00 &mdash; 14 : 00</option>
					<option value="14">14 :00 &mdash; 15 : 00</option>
					<option value="15">15 :00 &mdash; 16 : 00</option>
					<option value="16">16 :00 &mdash; 17 : 00</option>
					<option value="17">17 :00 &mdash; 18 : 00</option>
					<option value="18">18 :00 &mdash; 19 : 00</option>
					<option value="19">19 :00 &mdash; 20 : 00</option>	
				</select>
		</div><br>
	<?if($arParams["USE_CAPTCHA"] == "Y"):?>
		<div class="mf-captcha form-group" style='text-align:center;'>
			<input type="hidden" name="captcha_sid" value="<?=$arResult["capCode"]?>">
			<img class="img-thumbnail" src="/bitrix/tools/captcha.php?captcha_sid=<?=$arResult["capCode"]?>" width="180" height="40" alt="CAPTCHA">
			<div class="mf-text"><?=GetMessage("CBKT_CAPTCHA_CODE")?><span class="mf-req">*</span></div>
			<div class="col-md-offset-3 col-md-6">
				<input class="user_captcha form-control" type="text" name="captcha_word" size="30" maxlength="50" value="">
			</div>
		</div>	
	<?endif;?>
	<div style="width: 100%; text-align: center;">
		<!--<input type="hidden" name="form_type" value="call_ord">-->
		<button type="submit" class="btn btn-primary"><?=GetMessage("CBKT_SUBMIT")?></button>
	</div>
</form>
   </div>