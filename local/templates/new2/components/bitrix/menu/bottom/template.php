<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
        <div id="menu-bottom" class="col-md-9 text-center">

<?if (!empty($arResult)):?>
            <ul class="nav nav-tabs">
<?foreach($arResult as $arItem):?>
	<?if($arItem["SELECTED"]):?>
		<li class="active"><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?else:?>
		<li><a href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></li>
	<?endif?>
	
<?endforeach?>
</ul>		
<?endif?>
			<h3 style="color:#fff;"><span class="fa fa-phone"></span> 8 (930) 005-90-15, <span class="fa fa-phone"></span> 8 (910) 988-27-67
