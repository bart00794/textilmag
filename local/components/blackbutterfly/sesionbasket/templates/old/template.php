<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();?>

<? if ( count($_SESSION['BASKET']) == 0 ) { ?>		
		<p class="nobasket"><?=GetMessage("NOTBASKET")?><a href="/products/"><?=GetMessage("LINKSTOVAR")?></a></p>
<? } else { ?>	
		<ul class="basketblock" >
		    <li class="headbask" >
				<ul>
					<li class="imgt" ><?=GetMessage("POLE1")?></li>
					<li class="namet"><?=GetMessage("POLE2")?></li>
					<li class="cenat"><?=GetMessage("POLE3")?></li>
					<li class="countt"><?=GetMessage("POLE4")?></li>
					<li class="delt"></li>
				</ul>
			</li>
			
<?$cena = 0;?>			
<? CModule::IncludeModule('iblock'); ?>
<? foreach ( $_SESSION['BASKET'] as $index=>$val ) { ?>
			<?
			$arFilterw = Array("ID"=>$index, "ACTIVE"=>"Y");
			$res = CIBlockElement::GetList(Array(), $arFilterw);
			while($ob = $res->GetNextElement()){ 
				$arFields = $ob->GetFields();  
				$arProps = $ob->GetProperties();
			?>
			
		    <li class="elementblock" >
				<ul>
					<li class="imgt"><img src="<?=CFile::GetPath($arFields['PREVIEW_PICTURE'])?>"></li>
					<li class="namet"><a href="<?=$arFields['DETAIL_PAGE_URL']?>"><?=$arFields['NAME']?></a></li>
					<li class="cenat"><?=number_format($arProps['PRICE']['VALUE'], 0, '', ' ' )?> <?=GetMessage("RUB")?><br /><? if ( $arProps['STCENA']['VALUE'] != '' ) { ?><strike><?=number_format($arProps['STCENA']['VALUE'], 0, '', ' ' )?>  <?=GetMessage("RUB")?></strike><? } ?></li>
					<li class="countt"><input onkeypress="if(event.keyCode==13){ updelement('<?=$index?>'); return false; }" onchange="updelement('<?=$index?>'); return false;" class="styler" type="text" id="count_<?=$index?>" value="<?=$val?>"><?=GetMessage("SHIUK")?></li>
					<li class="delt"><a onclick="delelement(<?=$index?>,this); return false;" href="#">Удалить</a></li>
				</ul>
			</li>	
			<? $cena = $cena + $val * $arProps['PRICE']['VALUE'];?>
		<? } ?>						
	<? } ?>
		</ul>
	   <hr />
	   <div class="itogo" ><?=GetMessage("ITOG")?><span class="itogocena" ><?=number_format($cena, 0, '', ' ' )?> <?=GetMessage("RUB")?></span></div>		
	   
		<form method="post" action="#" style="width: 100%; float: left;" >
			<div class="addcmment basketformm" >
				<div class="psevdoh1 center"><?=GetMessage("ZAKAZ")?></div>
				<div><span><?=GetMessage("NAME")?><strong>*</strong></span> <input name="nameform" class="styler" type="text"><p class="errorbasket" ><img src="<?=SITE_TEMPLATE_PATH?>/images/error.png"></p></div>
				<div><span><?=GetMessage("MAIL")?><strong>*</strong></span> <input name="mailform" class="styler" type="text"><p class="errorbasket" ><img  src="<?=SITE_TEMPLATE_PATH?>/images/error.png"></p></div>
				<div><span><?=GetMessage("PHONE")?><strong>*</strong></span> <input name="phoneform" class="styler" type="text"><p class="errorbasket" ><img src="<?=SITE_TEMPLATE_PATH?>/images/error.png"></p></div>
				
				<div><span><?=GetMessage("DOSTAVKA")?></span> <select name="dostavka" class="styler" id="dostavka" >
													  <option><?=GetMessage("SELECTED")?></option>
													  <? foreach ( $arParams['VARIANT_DOSTAVKA'] as $value ) { ?>
															<option><?=$value?></option>
													  <? } ?>
												  </select></div>
				
				<div><span><?=GetMessage("ADRESS")?></span> <textarea class="styler" name="adressform" ></textarea></div>
				<div><span><?=GetMessage("COMMENT")?></span> <textarea class="styler" name="textform" ></textarea></div>
				<div><span></span> <strong>*</strong><?=GetMessage("NOTNULLPOLE")?></div>
				<input class="styler submitmyformzakaz" type="button" value="<?=GetMessage("SEARCH")?>" />
			</div>
		</form>
		<div style="display: none;" >
			<div id="okeysendmessageform">
				<div style="padding: 30px; margin-top: 0px; width: 440px;">
					<div class="psevdoh2" style="text-transform: uppercase; padding: 30px 10px; font-size: 26px;" ><?=GetMessage("SEARCHZAKAZOK")?></div>
					<p style="color: #868686; font-size: 14px; margin-left: 10px; font-weight: bold;"><?=GetMessage("SEARCHZAKAZOKDESC")?></p>
				</div>
			</div>
		</div>
<? } ?>
<script>
	function delelement(id,el) {
			BX.ajax.loadJSON(
			  '<?=$APPLICATION->GetCurPage()?>?delelement=Y&elementid='+id,
				  function(data) {
				  		$(el).parents('.elementblock').remove();
						if ( data.BASKET != 0 ) {
							$('.itogocena').html(number_format(data.BASKET, 0, '', ' ')+' руб.');
							$('#headbask > a').html('<span>Корзина: </span><span>'+data.COUNT+' '+data.TEXTCOUNT+'</span><br><span>на сумму '+number_format(data.BASKET, 0, '', ' ')+' руб.</span>');
						} else {
							location.reload();
						}
				  }
			);
	}
	function updelement(id) {
			count = $('#count_'+id).val();
			BX.ajax.loadJSON(
			  '<?=$APPLICATION->GetCurPage()?>?updateelement=Y&elementid='+id+'&count='+count,
				  function(data) {
						if ( data != 0 ) {
							$('.itogocena').html(number_format(data, 0, '', ' ')+' руб.');
							$('#headbask > a').html('<span>Корзина: </span><span>'+data.COUNT+' '+data.TEXTCOUNT+'</span><br><span>на сумму '+number_format(data, 0, '', ' ')+' руб.</span>');
						} else {
							location.reload();
						}
				  }
			);			
	}
	function DEMOLoad(){
	str = $('.submitmyformzakaz').parents('form').serialize();
	   BX.ajax.post(
		  '<?=$APPLICATION->GetCurPage()?>?ajax_form=Y',str,
		  DEMOResponse
	   );
	}
	function DEMOResponse(data){
		$.colorbox({inline:true, href:"#okeysendmessageform"});
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