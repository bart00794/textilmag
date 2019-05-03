<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
//print_r ($arResult);
$count=1;
?>
<table class="price" width='100%'>
    <tr>
        <th>№</th>
        <th>Фото</th>
        <th>Наименование</th>                               
    </tr>
    <?
    $CURRENT_DEPTH=$arResult["SECTION"]["DEPTH_LEVEL"]+1;
    foreach($arResult["SECTIONS"] as $arSection):
        $this->AddEditAction($arSection['ID'], $arSection['EDIT_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_EDIT"));
        $this->AddDeleteAction($arSection['ID'], $arSection['DELETE_LINK'], CIBlock::GetArrayByID($arSection["IBLOCK_ID"], "SECTION_DELETE"), array("CONFIRM" => GetMessage('CT_BCSL_ELEMENT_DELETE_CONFIRM')));
        if($arSection["ELEMENT_CNT"]>0) {?>
            <tr><th colspan=6>
                    <a href='<?=$arSection['SECTION_PAGE_URL']?>'><?=$arSection["NAME"]?></a></th></tr>
            <?
            if  ($arResult["SECTIONS"][$key+1]['DEPTH_LEVEL']<=$arSection["DEPTH_LEVEL"]){?>

                <?
                $res_price = CIBlockElement::GetList(Array("NAME"=>"ASC"), Array("IBLOCK_ID"=>$arSection['IBLOCK_ID'], "ACTIVE"=>"Y", "SECTION_ID"=>$arSection['ID']), false, false, Array("ID", "NAME","SECTION_ID", "DETAIL_PICTURE", "DETAIL_PAGE_URL","PROPERTY_CML2_ARTICLE"));
                while($ob_price = $res_price->GetNextElement()){
                    $arFields = $ob_price->GetFields();
					if($arFields["IBLOCK_SECTION_ID"] == "61" or $arFields["IBLOCK_SECTION_ID"] == "62" or $arFields["IBLOCK_SECTION_ID"] == "60") continue;				
                    ?> 
                    <tr>

                        <td><? echo ($count); $count++;?>
                        </td>
                        <td>
                            <?if($arFields["DETAIL_PICTURE"]):?>

                                <?$ImgPrev = CFile::ResizeImageGet(
                                    $arFields["DETAIL_PICTURE"],
                                    array("width" => 50, 'height' => 100),
                                    BX_RESIZE_IMAGE_PROPORTIONAL,
                                    true
                                );
                                ?>    
                                <a href='<?=$arFields["DETAIL_PAGE_URL"]?>'><img src="<?=$ImgPrev["src"]?>" alt="<?=$arFields["NAME"]?>"width="<?=$ImgPrev["width"]?>" height="<?=$ImgPrev["height"]?>" /></a>
                                <?endif?></td>
                        <td><a href='<?=$arFields["DETAIL_PAGE_URL"]?>'><?=$arFields["NAME"]?></a></td>
                    </tr>
                    <?
            unset($arPrice,$arRazmerMin,$arRazmerMax,$arRazmer);}}
            ?>
            <?}
        endforeach?>
</table>
