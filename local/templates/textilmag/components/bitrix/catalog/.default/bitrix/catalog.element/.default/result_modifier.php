<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?

$res = CIBlockElement::GetList(array(),array('ACTIVE'=>'Y',"PROPERTY_ELEM"=>$arResult["ID"]),false,false,['ID','IBLOCK_ID','NAME','PROPERTY_RAZMER','PROPERTY_PRICE']);
while($arPrice = $res->Fetch()){
    $arResult["PRICES"][] = [
        "ID"=>$arPrice["ID"],
        "NAME"=>$arPrice["NAME"],
        "SIZE"=>$arPrice['PROPERTY_RAZMER_VALUE'],
        "PRICE"=>$arPrice['PROPERTY_PRICE_VALUE']
    ];
}
?>