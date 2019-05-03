jQuery(document).ready(function($){
	$('.den-vybor input').datepicker({
		language: "ru",
		autoclose: true,
		todayHighlight: true,
		format: "dd/mm/yyyy"
	});
});

$(function(){
	
	$('.call_ord').on('submit', function(event){
		var loadText = "<img src='/bitrix/components/interra/callback/images/animation.gif'>";

		$(".loadBar").html(loadText).show();
		//подготавливаем и отправляем данные…
		
		var form = $(this);
		var url = form.attr('action');
		
		var type = $(this).attr('class');
		var sessid = $(this).find("input[name=sessid]").val();
		var name = $(this).find("input[name=cbkf_name]").val();
		var phone = $(this).find("input[name=cbkf_phone]").val();
		var day = $(this).find("input[name=cbkf_day]").val();
		var time = $(this).find("select[name=cbkf_time]").val();
		
		var captcha_sid = $(this).find("input[name=captcha_sid]").val();
		var captcha_word = $(this).find("input[name=captcha_word]").val();
		
		// если поле Сообщение активно
			$.post(url, 
			  {
				  form_type: type,
				  sessid: sessid,					  
				  cbkf_name: name,
				  cbkf_phone: phone,
				  cbkf_time: time,
				  cbkf_day: day,
				  captcha_sid: captcha_sid,
				  captcha_word: captcha_word,
			  }, 
				 function(data){
					$('.loadBar').empty().html(data);
				}													
			);			
		event.preventDefault();

	
	});
});