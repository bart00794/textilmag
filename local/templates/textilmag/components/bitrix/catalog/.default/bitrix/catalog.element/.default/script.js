$(function () {
    function roundTo(i, size) {
        return Math.ceil(i / size) * size;
    }

    $(".qtybutton").on("click", function () {
        let button = $(this),
            newValue = 0,
            input = button.parent().find('input'),
            oldValue = input.val(),
            size = input.data('quantity');
        if (button.hasClass("inc")) {
            newValue = parseFloat(oldValue) + size;
        } else {
            if (oldValue > 1) {
                newValue = parseFloat(oldValue) - size;
            } else {
                newValue = 0;
            }
        }
        input.val(roundTo(newValue, size));
        summbuy();
    });
    $('.quantity-input').on('change', function () {
        let size = $(this).data('quantity');
        let value = roundTo($(this).val(),size);
        $(this).val(value);
        summbuy();
    });
    $('form#buyItem').on('submit', function (e) {
        e.preventDefault();
        let formData = $(this).serializeArray();
        $.ajax({
            type: "POST",
            url: BX.message('TEMPLATE_PATH'),
            data: formData,
            success: function (data) {
                if (data.status) {
                    $('#modalBuyPopup').modal('show');
                    $("#result").html(JSON.stringify(data));
                }
            },
            dataType: 'json'
        });
    });
});

function summbuy() {
    let result = 0;
    $("input.quantity-input").each(function () {
        let price = parseFloat($(this).closest('.sku-block').find('.sku-price').text());
        let value = $(this).val();
        if (value !== "" && !isNaN(price)) {

            result = result + value * price;
        }
    });
    $("span#summ_buy").text(result.toFixed(2));
}
