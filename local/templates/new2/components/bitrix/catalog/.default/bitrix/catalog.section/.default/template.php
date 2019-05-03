<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="row product-list">
<?
foreach($arResult["ITEMS"] as $cell=>$arElement):
	$width = 0;
	$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_EDIT"));
	$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arParams["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CATALOG_ELEMENT_DELETE_CONFIRM')));
	
	?>
<div class="col-md-4" id="<?=$this->GetEditAreaId($arElement['ID']);?>">
	<div class="elem_main">
		<a class="product-a" href="<?=$arElement["DETAIL_PAGE_URL"]?>">
			<div class="product-image">
				<img src="<?=$arElement['DETAIL_PICTURE']['SRC']?>" width="<?=$arElement['DETAIL_PICTURE']['WIDTH']?>" height="<?=$arElement['DETAIL_PICTURE']['HEIGHT']?>">
			</div>
			<div class="block123">
				<strong class="product-name"><?=$arElement["NAME"]?></strong>
				<strong class="product-price"></strong>
				<div class="btn_buy">
					<button class="product-btn btn btn-default"><?=GetMessage('CATALOG_BUY');?></button>
					<div class="notice"><?=$arElement["DISPLAY_PROPERTIES"]["ZAMET"]["DISPLAY_VALUE"];?></div>
				</div>
				<div style="clear:both;"></div>
			</div>
		</a>
	</div>
</div>

<?
endforeach; // foreach($arResult["ITEMS"] as $arElement):
?>

<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
	<br><?=$arResult["NAV_STRING"]?>
<?endif;?>
</div>
