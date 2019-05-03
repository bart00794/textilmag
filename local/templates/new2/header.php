<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!--<meta name="viewport" content="width=device-width, initial-scale=1">-->
	<?$APPLICATION->ShowHead(); ?>
	<title><? $APPLICATION->ShowTitle() ?></title>	<!-- CSS -->
	<?$APPLICATION->SetAdditionalCSS("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css");?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/owl.carousel.min.css");?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jcarousel.basic.css");?>
	<?$APPLICATION->SetAdditionalCSS(SITE_TEMPLATE_PATH."/css/jquery.fancybox.css");?>
	<!-- JS -->
	<?$APPLICATION->AddHeadScript("https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js");?>
	<?$APPLICATION->AddHeadScript("https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.fancybox.pack.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/jquery.jcarousel.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/owl.carousel.min.js");?>
	<?$APPLICATION->AddHeadScript(SITE_TEMPLATE_PATH."/js/script.js");?>
	<!-- Bootstrap core CSS -->
	<!-- Just for debugging purposes. Don't actually copy this line! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Custom styles for this template -->
    <link href="<?= SITE_TEMPLATE_PATH ?>/css/carousel.css" rel="stylesheet">
  </head>
<!-- NAVBAR
================================================== -->
  <body>
  <div id="panel"><? $APPLICATION->ShowPanel(); ?></div>
<div id="img-top"></div><div id="img-down"></div>
<div class="container">
	<div id="main-head">
		<div id="head-img" class="row">
			<div id="logo_cont" class="col-md-5">
				<div id="logo"><a href="/"><img src="<?=SITE_TEMPLATE_PATH;?>/img/logo.png"></a></div>
				<div class="dow_logo">
					<div class="col-md-7">
						<a href="/kak-zakazat/blank.xlsx">
							<button class="btn btn-block btn-blue">СКАЧАТЬ БЛАНК ЗАКАЗА</button>
						</a>
					</div>
					<div class="col-md-5">
						<a href="/kak-zakazat/price.xlsx">
							<button class="btn btn-block btn-blue">СКАЧАТЬ ПРАЙС</button>
						</a>
					</div>
				</div>
			</div>
			<div id="top-head" class="col-md-6 col-md-offset-1">
				<div id="cont_head" class="row">		
					<div class="col-md-5">
							<?$APPLICATION->IncludeComponent("bitrix:search.form", "head", array(
									"PAGE" => "#SITE_DIR#search/index.php",
									"USE_SUGGEST" => "N"
								),
								false
							);?>
							<button style="margin-top:10px;" class="btn btn-block btn-blue" data-toggle="modal" data-target="#obr_svyaz">НАПИШИТЕ НАМ</button>
					</div>
					<div class="col-md-5">
						<div class="phone">
							<span class="top-prefix">8 (4932)</span> <span class="top-postfix">34-31-15</span>
						</div>
						<div class="top-login" style="margin-top:14px;">
							<button class="btn btn-block btn-blue" data-toggle="modal" data-target="#obr_zvonok">ОБРАТНЫЙ ЗВОНОК</button>
						</div>
					</div>
                    <div class="col-md-2 col-xs-2 col-xs-offset-5 col-sm-offset-0 col-md-offset-0 col-lg-offset-0 " style="text-align: center;">
                        <a href="/basket/"><img src="<?=SITE_TEMPLATE_PATH;?>/img/cart.png" class="img-responsive">Корзина</a>
                    </div>
				</div>
			</div>
        </div>
	</div>
<?$APPLICATION->IncludeComponent("bitrix:menu", "top", array(
  "ROOT_MENU_TYPE" => "top",
  "MENU_CACHE_TYPE" => "Y",
  "MENU_CACHE_TIME" => "36000000",
  "MENU_CACHE_USE_GROUPS" => "Y",
  "MENU_CACHE_GET_VARS" => array(
  ),
  "MAX_LEVEL" => "1",
  "CHILD_MENU_TYPE" => "left",
  "USE_EXT" => "N",
  "ALLOW_MULTI_SELECT" => "N"
  ),
  false
  );?>  
  
<div class="row">
	<div class="col-md-3">
	<?$APPLICATION->IncludeComponent("bitrix:catalog.section.list", "left", array(
	"IBLOCK_TYPE" => "products",
	"IBLOCK_ID" => "2",
	"SECTION_ID" => "",
	"SECTION_CODE" => "",
	"COUNT_ELEMENTS" => "N",
	"TOP_DEPTH" => "2",
	"SECTION_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"SECTION_USER_FIELDS" => array(
		0 => "",
		1 => "",
	),
	"SECTION_URL" => "",
	"CACHE_TYPE" => "N",
	"CACHE_TIME" => "36000000",
	"CACHE_GROUPS" => "Y",
	"ADD_SECTIONS_CHAIN" => "Y"
	),
	false
);?> 
        <div>
<?$APPLICATION->IncludeComponent(
	"interra:callback", 
	"left", 
	array(
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, мы вам перезвоним.",
		"EMAIL_TO" => "ek@222111.ru, textilmag@yandex.ru",
		"REQUIRED_FIELDS" => array(
			0 => "PHONE",
		),
		"SAVE_FORM_DATA" => "N",
		"EVENT_MESSAGE_ID" => array(
			0 => "8",
		)
	),
	false
);?>
 <?$APPLICATION->IncludeComponent("bitrix:main.feedback", "left", array(
	"USE_CAPTCHA" => "Y",
	"OK_TEXT" => "Спасибо, ваше сообщение принято.",
	"EMAIL_TO" => "textilmag@yandex.ru",
	"REQUIRED_FIELDS" => array(
		0 => "NAME",
		1 => "EMAIL",
		2 => "MESSAGE",
	),
	"EVENT_MESSAGE_ID" => array(
		0 => "7",
	)
	),
	false
);?>
        </div>
		<div style="padding-top:40px;"><script type="text/javascript" src="//vk.com/js/api/openapi.js?116"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>
<script type="text/javascript">
VK.Widgets.Group("vk_groups", {mode: 0, width: "262", height: "400", color1: 'FFFFFF', color2: '2B587A', color3: '489b95'}, 91437662);
</script></div>
    </div>
    <div class="col-md-9">