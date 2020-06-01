$(function () {
    $('.zoom-photo__href').each(function (e) {
        let url = $(this).data('src');
        $(this).zoom({url:url});
    })
});