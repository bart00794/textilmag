<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?
//	pp($arResult);
?>
<div class="row">
<div class="col-md-12"><h3 id="buy_name"><?=$arResult["NAME"]?></h3></div>
<div class="col-md-12"><div class="alert alert-warning">����� ������� �����, �������� ����� ������, ��������� ���, ��������� �����-������, ���� ��������� ��� ����� � ������������ ����� � ��������� �� ����� <a href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a></div></div>
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
                        <th>������</th>
                        <th>����</th>
                        <th>����������</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <td><strong>�����: </strong></td>
                        <td><strong><span id="summ_buy">0</span> ���.</strong></td>
                        <td><input type="button" id="buy_btn" class="btn btn-light" onclick="addtobasket(<?=$arResult["ID"];?>); return false;" value="������"></td>
                    </tr>
                    </tfoot>
                    <tbody>
                    <?foreach ($arResult["PRICES"] as $key=>$value) {?>
                        <tr>
                            <td><?=$value["NAME"]?></td>
                            <td><span class="buy_price"><?=$value["PRICE"]?></span> ���.</td>
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



		<div>�������� ���� �������� �� ��, ��� ��� �������������� �� ����� ���������, �� �������� � ������ �������������� ����� �������������� �������� � �� ��� ����� �������� �� �������� ��������� �������. ���������� � ���� �������� ��������������� �� ������ ���������� � ����� ���� �������� � ����� ����� ��� ���������������� �����������. ��� ��������� ��������� ���������� ��� ���������� ������� ����������� � ���������� �������� �� ���������: +7(905)109-31-15, +7(920)355-40-95 ��� ������ �� ����������� �����: <a href="mailto:textilmag@yandex.ru">textilmag@yandex.ru</a></div>
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
                <p>����� �������� � �������</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">�������</button>
                <a class="btn btn-model" href="/basket/">� �������</a>
            </div>
        </div>
    </div>
</div>
