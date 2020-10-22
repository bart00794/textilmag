$(function () {
    let roundTo10 = i => Math.ceil(i / 10) * 10;

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
        $button.parent().find("input").val(roundTo10(newVal));
        let $tr = $button.closest('tr');
        let price = $tr.find('.product-price').text();
        $tr.find('.product-total-price strong').html(price * newVal);

    });
    $(".product-remove a").click(function (e) {
        e.preventDefault();
        $.get($(this).attr('href'), function () {
            location.reload();
        });
    });
    $('.quantity-input').on('change', function () {
        let value = roundTo10($(this).val());
        $(this).val(value);
        let $tr = $(this).closest('tr');
        let price = $tr.find('.product-price').text();
        $tr.find('.product-total-price strong').html(price * value);
    });
    $("#updateCart").click(function (e) {
        e.preventDefault();
        var formData = new FormData();
        $(this).closest('.row').find('table input').each(function (key, input) {
            formData.append(input.name, input.value);
        });
        formData.append('update', 'Y');
        $.ajax({
            url: window.location.href,
            data: formData,
            processData: false,
            contentType: false,
            type: 'POST',
            success: function (data) {
                location.reload();
            }
        });
    });
});
