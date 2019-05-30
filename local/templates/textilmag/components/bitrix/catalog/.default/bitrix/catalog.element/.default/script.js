$(function () {
    $(".qtybutton").on("click", function () {
        let $button = $(this);
        let newVal;
        let oldValue = $button.parent().find('input').val();
        let size = $button.parent().find('input').data('quantity');
        if ($button.hasClass("inc")) {
            newVal = parseFloat(oldValue) + size;
        } else {
            // Don't allow decrementing below zero
            if (oldValue > 1) {
                newVal = parseFloat(oldValue) - size;
            } else {
                newVal = 0;
            }
        }
        $button.parent().find("input").val(newVal);
        summbuy();
    });
    $('form#buyItem').on('submit',function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $.ajax({
            type: "POST",
            url: BX.message('TEMPLATE_PATH'),
            data: formData,
            success: function (data) {
                if(data.status)
                {
                    $("#result").html(JSON.stringify(data));
                    console.log(data);
                }
            },
            dataType: 'json'
        });

        // BX.ajax.runComponentAction('sergar:cart',
        //     'addItem', {
        //         mode: 'class',
        //         data: {post: formData},
        //     })
        //     .then(function(response) {
        //         $("#query").text(JSON.stringify(formData));
        //         $("#result").text(JSON.stringify(response));
        //         // if (response.status === 'success') {
        //         //     // Если форма успешно отправилась
        //         // }
        //     });
    });
});
function summbuy(){
    let result = 0;
    $("input.quantity-input").each(function(){
        let price = parseFloat($(this).closest('.sku-block').find('.sku-price').text());
        let value = $(this).val();
        if(value!== "" && !isNaN(price)) {

            result = result + value*price;
        }
    });
    $("span#summ_buy").text(result.toFixed(2));
}
