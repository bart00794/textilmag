<!-- Modal -->
<div class="modal fade" id="obr_svyaz" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel">Напишите нам!</h4>
      </div>
      <div class="modal-body">


 <?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback", 
	"template", 
	array(
		"USE_CAPTCHA" => "Y",
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"EMAIL_TO" => "zakaz@222111.ru, textilmag@yandex.ru",
		"REQUIRED_FIELDS" => array(
			0 => "NAME",
			1 => "EMAIL",
			2 => "MESSAGE",
		),
		"EVENT_MESSAGE_ID" => array(
			0 => "7",
		)
	),
	false
);?>




      </div>
    </div>
  </div>
</div>