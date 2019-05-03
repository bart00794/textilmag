$(function(){
	$('.owl-carousel').owlCarousel({
		items:5,
		loop:true,
		margin:5,
		autoplay:true,
		autoplayTimeout:4000,
		autoplayHoverPause:false
	});
    $("button.buy_plus").click(function(){
        var $quantityInput = $(this).parent().prev("input.buy_razmer");
        var quant_steep = $(this).closest(".razmer_add").data("quantity");
        var quantity = parseInt($quantityInput.val());
        if (!isNaN(quantity)) $quantityInput.val(quantity + quant_steep);
        else $quantityInput.val(quant_steep);
        summbuy();
    });
    $("button.buy_minus").click(function(){
        var $quantityInput = $(this).parent().next("input.buy_razmer");
        var quant_steep = $(this).closest(".razmer_add").data("quantity");
        var quantity = parseInt($quantityInput.val());
        if (!isNaN(quantity)) {
            if (quantity > quant_steep) $quantityInput.val(quantity - quant_steep);
            else $quantityInput.val(null);
        }
        summbuy();
    });
    $("button.buyall_plus").click(function(){
        $("input.buy_razmer").each(function(index,elem){
            var quantity = parseInt($(this).val());
            if (!isNaN(quantity)) $(this).val(quantity + 1);
            else $(this).val(1);
        });
        summbuy();
    });
    $("button.buyall_minus").click(function(){
        $("input.buy_razmer").each(function(index,elem){
            var quantity = parseInt($(this).val());
            if (!isNaN(quantity)) {
                if (quantity > 1) $(this).val(quantity - 1);
                else $(this).val(null);
            }
        });
        summbuy();
    });
    $("input.buy_razmer").change(function() {
        summbuy();
    });
    $('div#left-menu ul').each(function(index) {
		$(this).prev().addClass('collapsible').click(function() {
			if ($(this).next().css('display') == 'none') {
				$(this).next().slideDown(200, function () {
					$(this).prev().removeClass('collapsed').addClass('expanded');
				});
			}else {
				$(this).next().slideUp(200, function () {
					$(this).prev().removeClass('expanded').addClass('collapsed');
					$(this).find('ul').each(function() {
						$(this).hide().prev().removeClass('expanded').addClass('collapsed');
					});
				});
			}
			return false;
		});
	});
	$(".fancybox").fancybox({padding:0});
});
function addtobasket(id) {
    var formelem;
    $(".buy_razmer").each(function(index,elem){
        if($(elem).val()!="") {
            if(formelem===undefined){
                formelem=$(this);
            }else{
                formelem = formelem.add($(this));
            }
        }
    });
    var razmer = formelem.serialize();
    $.post("/include/addtovar.php", { id: id , razmer: razmer },
        function(data) {
            $('#buy_ok').modal('toggle');
        }
    );
}
function summbuy(){
    var summ_itog;
    $("input.buy_razmer").each(function(index,elem){
        var summ;
        if($(this).val() != "") {
            summ = $(this).val()*$(this).parent().parent().parent().find(".buy_price").text();
            if(summ_itog === undefined){summ_itog = summ;}else{summ_itog = summ_itog + summ;}
        }
    });
    if(summ_itog === undefined){summ_itog = 0;}
    $("span#summ_buy").text(summ_itog.toFixed(2));
}
