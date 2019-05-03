<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
  <div class="serviceBlock">


	<?foreach($arResult["ROWS"] as $arItems):?>
	
		<?foreach($arItems as $arElement):?>
		<?if(is_array($arElement)):?>
		<?
		$this->AddEditAction($arElement['ID'], $arElement['EDIT_LINK'], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arElement['ID'], $arElement['DELETE_LINK'], CIBlock::GetArrayByID($arElement["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BCT_ELEMENT_DELETE_CONFIRM')));
		?>
			<div class="color-white products"><a href="<?=$arElement["DETAIL_PAGE_URL"]?>">

			
			<h2><?=$arElement["NAME"]?></h2>
			
			<p><?=$arElement["PREVIEW_TEXT"]?></p>
			
					<?if(is_array($arElement["PREVIEW_PICTURE"])):?>
						<img src="<?=$arElement["PREVIEW_PICTURE"]["SRC"]?>" width="<?=$arElement["PREVIEW_PICTURE"]["WIDTH"]?>" height="<?=$arElement["PREVIEW_PICTURE"]["HEIGHT"]?>" alt="<?=$arElement["NAME"]?>" title="<?=$arElement["NAME"]?>">
					<?endif?>
				
				
					
						
				
		</a>
			</div>
			
			
		<?else:?>
		<?endif;?>
		<?endforeach?>

	<?endforeach?>
</div>
