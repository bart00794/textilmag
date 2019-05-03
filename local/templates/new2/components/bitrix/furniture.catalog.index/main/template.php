<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?> <?
if (is_array($arResult['ITEMS']) && count($arResult['ITEMS']) > 0):
?> 	
<h3>Каталог</h3>
 
<div class="row product-list"> <?
$i=1;
	foreach ($arResult['ITEMS'] as $arItem):

?> 
  <div class="col-md-4"><div class="product_main"><a class="product-a" href="<?=$arItem['DETAIL_URL']?>" > 
      <div class="product-image"> <img src="<?=$arItem['PICTURE']['SRC']?>" width="<?=$arItem['PICTURE']['WIDTH']?>" height="<?=$arItem['PICTURE']['HEIGHT']?>" /> </div>
     <strong class="product-name"><?=$arItem['NAME']?></strong > </a> </div></div>
 <?if (($i % 3)==0) echo '<div class="clearfix"></div>';
 $i++;
	endforeach;
?> <?
endif;
?> </div>
<?//?>