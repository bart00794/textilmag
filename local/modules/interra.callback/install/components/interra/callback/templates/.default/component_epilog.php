<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

global $APPLICATION;
$APPLICATION->AddHeadString('<link href="'.$componentPath.'/script/datepicker3.css" type="text/css" rel="stylesheet">',true); 
$APPLICATION->AddHeadString('<link href="'.SITE_TEMPLATE_PATH.'/css/font-awesome.min.css" type="text/css" rel="stylesheet">',true); 
$APPLICATION->AddHeadString('<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>',true);
$APPLICATION->AddHeadString('<script src="'.$componentPath.'/script/bootstrap-datepicker.js"></script>',true);
$APPLICATION->AddHeadString('<script src="'.$componentPath.'/script/functions.js"></script>',true);
?>