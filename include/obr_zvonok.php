<div id="obr_zvonok" class="modal fade bs-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Заказать обратный звонок</h4>
      </div>
      <div class="modal-body">
<?$APPLICATION->IncludeComponent(
	"interra:callback",
	"",
	Array(
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, мы вам перезвоним.",
		"EMAIL_TO" => "ek@222111.ru",
		"REQUIRED_FIELDS" => array("PHONE")
	),
false
);?>
      </div>
	</div>
  </div>
</div>