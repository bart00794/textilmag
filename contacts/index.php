<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "Доставка текстиля оптом осуществляется по всей России и СНГ. Телефон: +7 905 109 31 15");
$APPLICATION->SetTitle("Контакты производителя текстиля в Иваново");
?> 
<div class="container"> 
  <div class="row"> 
    <div class="col-lg-12"> 
      <h1> Контакты &quot;Текстильмаг&quot;</h1>
     
      <p><b>Адрес:</b></p>
     
      <p>Торговый комплекс &quot;Текстильщик&quot;</p>
     
      <p>г. Иваново, ул. Ермака 49, павильон 76</p>
     
      <p>Телефон: +7 920 355 40 95; +7 905 109 31 15(WhatsApp, Viber); +7 910 698 68 39</p>
     
      <p>e-mail: <a href="mailto:textilmag@yandex.ru " >textilmag@yandex.ru </a></p>
     <b>Карта проезда: 
        <br />
       <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:57.019417726250104;s:10:\"yandex_lon\";d:40.95213854773447;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:40.94930613501472;s:3:\"LAT\";d:57.01964009993222;s:4:\"TEXT\";s:26:\"\"ТекстильМаг\", павильон 76\";}}}",
		"MAP_WIDTH" => "750",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array("ZOOM","MINIMAP","TYPECONTROL","SCALELINE"),
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM","ENABLE_DBLCLICK_ZOOM","ENABLE_DRAGGING"),
		"MAP_ID" => ""
	)
);?> 
        <br />
       </b> </div>
   </div>
 </div>
 <?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>