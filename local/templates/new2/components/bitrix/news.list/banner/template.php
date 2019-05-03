<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<?$sum = count($arResult['ITEMS']);
$num=0;?>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
          <ol class="carousel-indicators">
  <?do{?>
    <li data-target="#carousel-example-generic" data-slide-to="<?=$num?>" <?if($num == 0):?>class="active"<?endif;?>></li>
 <?}while($num++<$sum-1);?>  
 </ol>
          <div class="carousel-inner">

<?
$num=0;
foreach($arResult["ITEMS"] as $arItem):?>
<?
$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
    <div class="item<?if($num==0):?> active<?endif;?>"> <a href="<?=$arItem["PREVIEW_TEXT"];?>">
                <img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"];?>" alt="">
            </a>
</div>
<?$num=$num+1;?>
<?endforeach;?>
   </div>

          <a id="strelka-left" class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
          </a>
          <a id="strelka-right" class="right carousel-control" href="#carousel-example-generic" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
          </a>
</div>
