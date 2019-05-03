<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

foreach ($arResult['ITEMS'] as $key=>$arItem)
{
	$arFileTmp = CFile::ResizeImageGet(
		$arItem['DETAIL_PICTURE']["ID"],
		array("width" => 160, "height" => 241),
		BX_RESIZE_IMAGE_EXACT,
		true,
		Array( // нанесение водяного знака
			  array("name" => "watermark", "position" => "tr", "file" =>$_SERVER['DOCUMENT_ROOT']."/upload/novinka.png")//"fill" => "repeat",
		  )	);

	$arResult['ITEMS'][$key]["PREVIEW_PICTURE"] = array(
		'SRC' => $arFileTmp["src"],
		'WIDTH' => $arFileTmp["width"],
		'HEIGHT' => $arFileTmp["height"],
	);
}
?>