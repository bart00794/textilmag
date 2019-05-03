<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="row product-list">
	<?foreach($arResult["SECTIONS"] as $arSection):
	$this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
	$this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));?>
		<div class="col-md-4">
			<div class="product_main">
				<a class="product-a" href="<?=$arSection['SECTION_PAGE_URL']?>">
					<div class="product-image">
						<img src="<?=$arSection['PICTURE']['SRC']?>" width="<?=$arSection['PICTURE']['WIDTH']?>" height="<?=$arSection['PICTURE']['HEIGHT']?>">
					</div>
					<div class="block123">
						<strong class="product-name"><?=$arSection['NAME']?></strong>
					</div>
				</a>
			</div>
		</div>
	<?endforeach;?>
</div>