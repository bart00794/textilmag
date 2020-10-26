$(function () {
    function roundTo(i, size) {
        return Math.ceil(i / size) * size;
    }

    $(".qtybutton").on("click", function () {
        let button = $(this),
            newValue = 0,
            input = button.parent().find('input'),
            oldValue = input.val(),
            size = input.data('quantity'),
            tr = button.closest('tr'),
            price = tr.find('.product-price').text();
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
        tr.find('.product-total-price strong').html(price * newValue);
    });
    $(".product-remove a").click(function (e) {
        e.preventDefault();
        $.get($(this).attr('href'), function () {
            location.reload();
        });
    });
    $('.quantity-input').on('change', function () {
        let size = $(this).data('quantity'),
            tr = $(this).closest('tr'),
            price = tr.find('.product-price').text();
        let value = roundTo($(this).val(), size);
        $(this).val(value);
        tr.find('.product-total-price strong').html(price * value);
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
