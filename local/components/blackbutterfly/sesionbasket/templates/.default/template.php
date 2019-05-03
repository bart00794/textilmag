<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>
<?
//pp($arResult);
 if ( count($_SESSION['BASKET']) == 0 ) { ?>		
		<p class="nobasket"><?=GetMessage("NOTBASKET")?><a href="/products/"><?=GetMessage("LINKSTOVAR")?></a></p>
<? } else { ?>	
<table class="table table-hover tablebasket">
      <thead>
        <tr>
          <th>№</th>
          <th><?=GetMessage("POLE1")?></th>
          <th><?=GetMessage("POLE2")?></th>
          <th><?=GetMessage("POLE3")?></th>
          <th><?=GetMessage("POLE4")?></th>
          <th><?=GetMessage("POLE5")?></th>
          <th><?=GetMessage("POLE6")?></th>
        </tr>
      </thead>
      <tbody>
<?$cena = 0;
foreach($arResult["ELEMENT"] as $key=>$arElement){
?>			
        <tr>
          <td><?=$key+1;?></td>
          <td><img src="<?=CFile::GetPath($arElement['DETAIL_PICTURE'])?>" height="50"></td>
          <td><a href="<?=$arElement['DETAIL_PAGE_URL']?>"><?=$arElement['NAME']?></td>
          <td><?=number_format($arElement['PRICE'], 2, '.', ' ' );?> <?=GetMessage("RUB")?></td>
          <td><?=$arElement["RAZMER"];?></td>
          <td><input onkeypress="if(event.keyCode==13){ updelement(<?=$arElement["ID"];?>,<?=$arElement["RAZMER"];?>); return false; }" onchange="updelement(<?=$arElement["ID"];?>,<?=$arElement["RAZMER"];?>); return false;" class="styler" type="text" id="count_<?=$arElement["ID"];?>_<?=$arElement["RAZMER"];?>" value="<?=$arElement["NUMBER"]?>"><?=GetMessage("SHIUK")?></td>
          <td><a onclick="delelement(<?=$arElement["ID"];?>,<?=$arElement["RAZMERID"];?>,this); return false;" href="#">Удалить</a></td>
        </tr>
		<? } ?>						
      </tbody>
    </table>
	   <hr />
	   <div class="itogo" ><?=GetMessage("ITOG")?><span class="itogocena" ><?=number_format($arResult["SUMM"], 2, '.', ' ' )?> <?=GetMessage("RUB")?></span></div>
	   
		<form method="post" action="#" style="width: 100%; float: left;" >
			<div class="addcmment basketformm" >
				<div class="psevdoh1 center"><?=GetMessage("ZAKAZ")?></div>
				<div><span><?=GetMessage("NAME")?><strong>*</strong></span> <input name="nameform" class="styler" type="text"><p class="errorbasket" ><img src="<?=SITE_TEMPLATE_PATH?>/images/error.png"></p></div>
				<div><span><?=GetMessage("MAIL")?><strong>*</strong></span> <input name="mailform" class="styler" type="text"><p class="errorbasket" ><img  src="<?=SITE_TEMPLATE_PATH?>/images/error.png"></p></div>
				<div><span><?=GetMessage("PHONE")?><strong>*</strong></span> <input name="phoneform" class="styler" type="text"><p class="errorbasket" ><img src="<?=SITE_TEMPLATE_PATH?>/images/error.png"></p></div>
				
				<div style="height: 35px;"><span><?=GetMessage("DOSTAVKA")?></span> <select name="dostavka" class="styler" id="dostavka" >
													  <option><?=GetMessage("SELECTED")?></option>
													  <? foreach ( $arParams['VARIANT_DOSTAVKA'] as $value ) { ?>
															<option><?=$value?></option>
													  <? } ?>
												  </select></div>
				
				<div><span><?=GetMessage("ADRESS")?></span> <textarea class="styler" name="adressform" ></textarea></div>
				<div><span><?=GetMessage("COMMENT")?></span> <textarea class="styler" name="textform" ></textarea></div>
				<div><span></span> <strong>*</strong><?=GetMessage("NOTNULLPOLE")?></div>
				<!--<input type="text" name="ajax_form" value="Y">-->
				<input class="styler submitmyformzakaz" type="button" value="<?=GetMessage("SEARCH")?>" />
			</div>
		</form>
<div class="modal fade" id="okeysendmessageform" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-body">
		<div style="padding: 30px; margin-top: 0px; width: 440px;">
			<div class="psevdoh2" style="text-transform: uppercase; padding: 30px 10px; font-size: 26px;" ><?=GetMessage("SEARCHZAKAZOK")?></div>
			<p style="color: #868686; font-size: 14px; margin-left: 10px; font-weight: bold;"><?=GetMessage("SEARCHZAKAZOKDESC")?></p>
		</div>
      </div>
    </div>
  </div>
</div>
<? } ?>
<script>
	function delelement(id,ra,el) {
			BX.ajax.loadJSON(
			  '<?=$APPLICATION->GetCurPage()?>?delelement=Y&elementid='+id+'&razmer='+ra,
				  function() {
							location.reload();
				  }
			);
	}
	function updelement(id,ra) {
			count = $('#count_'+id+'_'+ra).val();
			BX.ajax.loadJSON(
			  '<?=$APPLICATION->GetCurPage()?>?updateelement=Y&elementid='+id+'&razmer='+ra+'&count='+count,
				  function() {
							location.reload();
				  }
			);			
	}
	function DEMOLoad(){
	str = $('.submitmyformzakaz').parents('form').serialize();
	   BX.ajax.post(
		  '<?=$APPLICATION->GetCurPage()?>?ajax_form=Y',str
		  ,DEMOResponse
	   );
	}
	function DEMOResponse(data){
		location.reload();
		$('#okeysendmessageform').modal('show');
		el = $('.submitmyformzakaz');
		el.parents('form').find("[name='nameform']").val('');
		el.parents('form').find("[name='mailform']").val('');

		el.parents('form').find("[name='phoneform']").val('');
		el.parents('form').find("[name='adressform']").html('');
		el.parents('form').find("[name='textform']").html('');
		
	}
	BX.ready(function(){
		BX.bindDelegate(
		  document.body, 'click', {className: 'submitmyformzakaz' },
		  function(e){
			 if(!e) {
				e = window.event;
			 }
			 
				user_phone = $(this).parents('form').find("[name='phoneform']");
				user_name = $(this).parents('form').find("[name='nameform']");
				user_mail = $(this).parents('form').find("[name='mailform']");
				var reg = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
				user_phone.parent().removeClass('eror');
				user_name.parent().removeClass('eror');
				user_mail.parent().removeClass('eror');
				if ( user_name.val() != '' ) {
				  if ( (user_mail.val() == '' || !user_mail.val().match(reg) ) ) {
						user_mail.parent().addClass('eror');
				  } else {				 

						DEMOLoad();
						return BX.PreventDefault(e);
					}	
					} else {
						if ( user_phone.val() == '' ) {
							user_phone.parent().addClass('eror');
						}					
						if ( user_name.val() == '' ) {
							user_name.parent().addClass('eror');
						}
						if ( (user_mail.val() == '' || !user_mail.val().match(reg) ) ) {
							user_mail.parent().addClass('eror');
						} 
					}						
		  }
	   );
	   
	});
</script>