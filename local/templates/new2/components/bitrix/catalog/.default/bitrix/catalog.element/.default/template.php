<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
//	pp($arResult);
?>
<div class="row">
<div class="col-md-12"><h3 id="buy_name"><?=$arResult["NAME"]?></h3></div>
<div class="col-md-12"><div class="alert alert-warning">Чтобы сделать заказ, скачайте бланк заказа, заполните его, пользуясь прайс-листом, либо составьте ваш заказ в произвольной форме и отправьте на почту <a href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a></div></div>
	<div class="col-md-5">
		<div>
			<?foreach ($arResult['MORE_PHOTO'] as $arPhoto){?>
				<a href="<?=$arPhoto["whater"]["src"];?>" class="fancybox" rel="gallery"><img src="<?=$arPhoto["small"]["src"];?>" alt="<?=$arResult["NAME"];?>"></a>
			<?}?>
		</div>
	</div>
	<div class="col-md-7">
        <?foreach ($arResult['DISPLAY_PROPERTIES'] as $arOneProp){?>

            <p><span class="buy_title"><?=$arOneProp["NAME"];?>: </span><span><?=$arOneProp["VALUE"]?></span></p>

            <?
        }
        unset($arOneProp);
        ?>
        <div>
            <form id="table_razm">
                <table class="table table-hover tabl">
                    <thead>
                    <tr>
                        <th>Размер</th>
                        <th>Цена</th>
                        <th>Количество</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td><strong>Итого: </strong></td>
                        <td><strong><span id="summ_buy">0</span> руб.</strong></td>
                        <td><input type="button" id="buy_btn" class="btn btn-light" onclick="addtobasket(<?=$arResult["ID"];?>); return false;" value="Купить"></td>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?foreach ($arResult["PRICES"] as $key=>$value) {?>
                        <tr>
                            <td><?=$value["NAME"]?></td>
                            <td><span class="buy_price"><?=$value["PRICE"]?></span> руб.</td>
                            <td>
                                <div class="input-group razmer_add element_razmer"
                                <?
                                    if(!is_null($arResult["PROPERTIES"]["SKU_SIZE"]["VALUE"])){
	                                    echo "data-quantity=\"".$arResult["PROPERTIES"]["SKU_SIZE"]["VALUE"]."\"";
                                    }else{
                                        echo "data-quantity=\"1\"";}
                                ?>>
                                    <div class="input-group-btn">
                                        <button class="btn btn-default buy_minus" type="button">-</button>
                                    </div>
                                    <input name="<?=$value["ID"]?>" type="text" class="form-control buy_razmer" value="">
                                    <div class="input-group-btn">
                                        <button class="btn btn-default buy_plus" type="button">+</button>
                                    </div>
                                </div>
                            </td>
                        </tr>
                    <?}?>
                    </tbody>
                </table>
            </form>
        </div>



		<div>Обращаем Ваше внимание на то, что вся представленная на сайте продукция, ее цветовые и другие характеристики носят информационный характер и ни при каких условиях не являются публичной офертой. Информация и цены являются действительными на момент публикации и могут быть изменены в любое время без предварительного уведомления. Для получения подробной информации или размещения заказов обращайтесь к менеджерам компании по телефонам: +7(905)109-31-15, +7(920)355-40-95 или пишите на электронную почту: <a href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a></div>
	</div>
</div>


<?if(is_array($arResult["SECTION"])):
?>
		<br /><a href="<?=$arResult["SECTION"]["SECTION_PAGE_URL"]?>">&larr; <?=GetMessage("CATALOG_BACK")?></a>
<?
elseif (is_array($arResult['IBLOCK'])):
?>
		<br /><a href="<?=$arResult["IBLOCK"]["LIST_PAGE_URL"]?>">&larr; <?=GetMessage("CATALOG_BACK")?></a>
<?
endif;
?>
<div class="modal fade" id="buy_ok" tabindex="0" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <p>Товар добавлен в корзину</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Закрыть</button>
                <a class="btn btn-model" href="/basket/">В корзину</a>
            </div>
        </div>
    </div>
</div>
