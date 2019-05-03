<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>
<div class="search-form">
	<form action="<?=$arResult["FORM_ACTION"]?>">
		<?if($arParams["USE_SUGGEST"] === "Y"):?>
			<?$APPLICATION->IncludeComponent(
				"bitrix:search.suggest.input",
				"",
				array(
					"NAME" => "q",
					"VALUE" => "",
					"INPUT_SIZE" => 15,
					"DROPDOWN_SIZE" => 10,
				),
				$component, array("HIDE_ICONS" => "Y")
			);?>
		<?else:?>
			<div class="input-group">
				<input type="text" name="q" class="form-control" value="" size="15" maxlength="50" />
				<span class="input-group-btn">
					<button class="btn btn-default" type="submit">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		<?endif;?>
	</form>
</div>