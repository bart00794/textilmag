<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty("description", "�������� �������� ����� �������������� �� ���� ������ � ���. �������: +7 905 109 31 15");
$APPLICATION->SetTitle("�������� ������������� �������� � �������");
?> 
<h1> �������� &quot;�����������&quot;</h1>
 
<p><b>�����:</b></p>
 
<p>�������� �������� &quot;�����������&quot;</p>
 
<p>�. �������, ��. ������ 49, �������� 76</p>
 
<p>�������: +7 (4932) 39-80-37; +7 920 355 40 95; +7 905 109 31 15</p>
 
<p>e-mail: <a href="mailto:textilmag@yandex.ru " >textilmag@yandex.ru </a></p>
 <b>����� �������: 
  <br />
 <?$APPLICATION->IncludeComponent(
	"bitrix:map.yandex.view",
	"",
	Array(
		"INIT_MAP_TYPE" => "MAP",
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:57.019417726250104;s:10:\"yandex_lon\";d:40.95213854773447;s:12:\"yandex_scale\";i:15;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:40.94930613501472;s:3:\"LAT\";d:57.01964009993222;s:4:\"TEXT\";s:26:\"\"�����������\", �������� 76\";}}}",
		"MAP_WIDTH" => "750",
		"MAP_HEIGHT" => "500",
		"CONTROLS" => array("ZOOM", "MINIMAP", "TYPECONTROL", "SCALELINE"),
		"OPTIONS" => array("ENABLE_SCROLL_ZOOM", "ENABLE_DBLCLICK_ZOOM", "ENABLE_DRAGGING"),
		"MAP_ID" => ""
	)
);?> 
  <br />
 </b><?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>