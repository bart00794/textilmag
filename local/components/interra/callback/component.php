<?php
if(!defined("B_PROLOG_INCLUDED")||B_PROLOG_INCLUDED!==true)die();
/**
 * Bitrix vars
 *
 * @var array $arParams
 * @var array $arResult
 * @var CBitrixComponent $this
 * @global CMain $APPLICATION
 * @global CUser $USER
 */

//$_SESSION["CBKT_PARAMS"] = null;

$arParams["USE_CAPTCHA"] = (($arParams["USE_CAPTCHA"] != "N" && !$USER->IsAuthorized()) ? "Y" : "N");
$arParams["EMAIL_TO"] = trim($arParams["EMAIL_TO"]);
if($arParams["EMAIL_TO"] == '')
	$arParams["EMAIL_TO"] = COption::GetOptionString("main", "email_from");
if($arParams["EVENT_NAME"] == '')
	$arParams["EVENT_NAME"] = "ORDER_CALL";
$arParams["OK_TEXT"] = trim($arParams["OK_TEXT"]);
if($arParams["OK_TEXT"] == '')
	$arParams["OK_TEXT"] = GetMessage("MF_OK_MESSAGE");
if($arResult["DATE"] == '')
	$arResult["DATE"] = date("d/m/Y");
	if(isset($arParams['_POST'])){

		if(check_bitrix_sessid()){
			$arResult["ERROR_MESSAGE"] = array();

			if($arParams['_POST']['form_type'] == 'call_ord')
			{
				if(empty($arParams["REQUIRED_FIELDS"]) || !in_array("NONE", $arParams["REQUIRED_FIELDS"]))
				{
					if((empty($arParams["REQUIRED_FIELDS"]) || in_array("NAME", $arParams["REQUIRED_FIELDS"])) && strlen($arParams['_POST']["cbkf_name"]) <= 1)
						$arResult["ERROR_MESSAGE"][] = GetMessage("CBK_REQ_NAME");		
					if((empty($arParams["REQUIRED_FIELDS"]) || in_array("PHONE", $arParams["REQUIRED_FIELDS"])) && strlen($arParams['_POST']["cbkf_phone"]) <= 1)
						$arResult["ERROR_MESSAGE"][] = GetMessage("CBK_REQ_PHONE");
					if((empty($arParams["REQUIRED_FIELDS"]) || in_array("TIME", $arParams["REQUIRED_FIELDS"])) && strlen($arParams['_POST']["cbkf_time"]) <= 0)
						$arResult["ERROR_MESSAGE"][] = GetMessage("CBK_REQ_TIMETOCALL");	
					if((empty($arParams["REQUIRED_FIELDS"]) || in_array("DAY", $arParams["REQUIRED_FIELDS"])) && strlen($arParams['_POST']["cbkf_day"]) <= 1)
						$arResult["ERROR_MESSAGE"][] = GetMessage("CBK_REQ_TIMETOCALL");		
	
				}		

			} 
			if($arParams["USE_CAPTCHA"] == "Y")
			{
				include_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/classes/general/captcha.php");
				$captcha_code = $arParams['_POST']["captcha_sid"];
				$captcha_word = $arParams['_POST']["captcha_word"];
				$cpt = new CCaptcha();
				$captchaPass = COption::GetOptionString("main", "captcha_password", "");
				if (strlen($captcha_word) > 0 && strlen($captcha_code) > 0)
				{
					if (!$cpt->CheckCodeCrypt($captcha_word, $captcha_code, $captchaPass))
						$arResult["ERROR_MESSAGE"][] = GetMessage("CBK_CAPTCHA_WRONG");
				}
				else
					$arResult["ERROR_MESSAGE"][] = GetMessage("CBK_CAPTHCA_EMPTY");

			}
			if(empty($arResult["ERROR_MESSAGE"]))
			{

				if(LANG_CHARSET == "windows-1251")
				{
					$arParams["_POST"]["cbkf_name"] = $APPLICATION->ConvertCharset($arParams["_POST"]["cbkf_name"], 'utf-8', LANG_CHARSET);
					$arParams["_POST"]["cbkf_phone"] = $APPLICATION->ConvertCharset($arParams["_POST"]["cbkf_phone"], 'utf-8', LANG_CHARSET);
					$arParams["_POST"]["cbkf_day"] = $APPLICATION->ConvertCharset($arParams["_POST"]["cbkf_day"], 'utf-8', LANG_CHARSET);
					$arParams["_POST"]["cbkf_time"] = $APPLICATION->ConvertCharset($arParams["_POST"]["cbkf_time"], 'utf-8', LANG_CHARSET);
				}

				if(CModule::IncludeModule("interra.callback")){
					$arFields = Array(
						"AUTHOR" => $arParams["_POST"]["cbkf_name"], //Автор сообщения
						"AUTHOR_PHONE" => $arParams["_POST"]["cbkf_phone"], //Номер телефона автора для звонка
						"TIME" => $arParams["_POST"]["cbkf_time"], //Время
						"DAY" => $arParams["_POST"]["cbkf_day"] //День
					);

					
					$MyOrderCall = new CBKcall;

					if($MyOrderCall->Order($arFields)) echo "123";

					$_SESSION["CBK_NAME"] = $arParams["_POST"]["cbkf_name"];
					$_SESSION["CBK_PHONE"] = $arParams["_POST"]["cbkf_phone"];
					
					$arResult["OK_MESSAGE"] = "<p>".$arParams["OK_TEXT"]."</p>";
					echo "<script>$('.call_ord').hide();</script>";
					echo "<div class='alert alert-success'>".$arResult["OK_MESSAGE"]."</div>";
				}

			}		
		}
		else
		{
			$arResult["ERROR_MESSAGE"][] = GetMessage("MF_SESS_EXP"); 
		
		}
		
		$errTXT = "";
		if(!empty($arResult["ERROR_MESSAGE"]) && count($arResult["ERROR_MESSAGE"]) > 1){
			foreach($arResult["ERROR_MESSAGE"] as $errtext)
			{
				$errTXT .= $errtext. '<br />';
			}
		}
		else{
			$errTXT .= $arResult["ERROR_MESSAGE"][0];
		}
		if(!empty($arResult["ERROR_MESSAGE"]))
		echo "<div class='alert alert-danger'>".$errTXT."</div>";
	}
	else{
		if(empty($arResult["ERROR_MESSAGE"]))
		{
			if($USER->IsAuthorized())
			{
				$arResult["AUTHOR_NAME"] = $USER->GetFormattedName(false);
				$arResult["AUTHOR_PHONE"] = htmlspecialcharsbx($_SESSION["CBK_PHONE"]);
			}
			else
			{
				if(strlen($_SESSION["CBK_NAME"]) > 0)
					$arResult["AUTHOR_NAME"] = htmlspecialcharsbx($_SESSION["CBK_NAME"]);
				if(strlen($_SESSION["CBK_PHONE"]) > 0)
					$arResult["AUTHOR_PHONE"] = htmlspecialcharsbx($_SESSION["CBK_PHONE"]);
			}
		}

		if($arParams["USE_CAPTCHA"] == "Y")
			$arResult["capCode"] =  htmlspecialcharsbx($APPLICATION->CaptchaGetCode());
		
		$_SESSION["CBKT_PARAMS"] = $arParams;
		$this->IncludeComponentTemplate();	
	}
