$.fn.elExists = function() {
    return this.length > 0;
};

$(function () {
    let mobileHeaderHeight = ($('.header-mobile').elExists()) ? $('.header-mobile')[0].getBoundingClientRect().height : 0;
    let mainHeaderHeight = ( $('.header').elExists() ) ? $('.header')[0].getBoundingClientRect().height : 0;
    let topBarHeight = ( $('header .top-bar').elExists() ) ? $('header .top-bar')[0].getBoundingClientRect().height : 0;
    let mainHeaderBase = $(".fixed-header__base");

    function stickyHeader(){
        $(window).on({
            load: function(){
                if(window.innerWidth < 992){
                    stickyConditional('.header-mobile', mobileHeaderHeight);
                }else{
                    stickyConditional('.fixed-header', mainHeaderHeight);
                }
            },
            resize: function(){
                if(window.innerWidth < 992){
                    stickyConditional('.header-mobile', mobileHeaderHeight);
                }else{
                    stickyConditional('.fixed-header', mainHeaderHeight);
                }
            }
        });

        function stickyConditional(selector, height){
            $(mainHeaderBase).css('min-height', height+'px');
            $(window).on('scroll', function(){
                if ($(window).scrollTop() >= height) {
                    $(selector).addClass('sticky-header');
                    $(mainHeaderBase).show();
                    $('.header-mobile').css('margin-top', 0);
                }
                else {
                    $(selector).removeClass('sticky-header');
                    $(mainHeaderBase).hide();
                    if($('header .top-bar').elExists()){
                        $('.header-mobile').css('margin-top', -(mainHeaderHeight - topBarHeight));
                    }else{
                        $('.header-mobile').css('margin-top', -(mainHeaderHeight));
                    }
                }
            });
        }
    }

    $('.ai-preloader').removeClass("active");
    stickyHeader();
});