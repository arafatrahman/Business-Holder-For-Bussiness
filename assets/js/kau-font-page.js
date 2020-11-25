
$(window).scroll(function () {
    if ($(this).scrollTop() > 100) {
        $('#kau-header').addClass('header-scrolled');
        $('#topbar').addClass('topbar-scrolled');
    } else {
        $('#kau-header').removeClass('header-scrolled');
        $('#topbar').removeClass('topbar-scrolled');
    }
});

// Mobile Navigation
if ($('.nav-menu').length) {

    var $mobile_nav = $('.nav-menu').clone().prop({
        class: 'kau-mobile-device-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="kau-mobile-device-nav-toggle d-lg-none"><i class="bx bx-menu"></i></button>');
    $('body').append('<div class="kau-mobile-device-nav-overly"></div>');

    $(document).on('click', '.kau-mobile-device-nav-toggle', function (e) {
        $('body').toggleClass('kau-mobile-device-nav-active');
        $('.kau-mobile-device-nav-toggle i').toggleClass('bx bx-menu');
        $('.kau-mobile-device-nav-overly').toggle();
    });

    $(document).on('click', '.kau-mobile-device-nav .drop-down > a', function (e) {
        e.preventDefault();
        $(this).next().slideToggle(300);
        $(this).parent().toggleClass('active');
    });

    $(document).click(function (e) {
        var container = $(".kau-mobile-device-nav, .kau-mobile-device-nav-toggle");
        if (!container.is(e.target) && container.has(e.target).length === 0) {
            if ($('body').hasClass('kau-mobile-device-nav-active')) {
                $('body').removeClass('kau-mobile-device-nav-active');
                $('.kau-mobile-device-nav-toggle i').toggleClass('bx bx-menu');
                $('.kau-mobile-device-nav-overly').fadeOut();
            }
        }
    });
} else if ($(".kau-mobile-device-nav, .kau-mobile-device-nav-toggle").length) {
    $(".kau-mobile-device-nav, .kau-mobile-device-nav-toggle").hide();
}

// Navigation active state on scroll
var nav_sections = $('section');
var main_nav = $('.nav-menu, .kau-mobile-device-nav');

$(window).on('scroll', function () {
    var cur_pos = $(this).scrollTop() + 200;

    nav_sections.each(function () {
        var top = $(this).offset().top,
                bottom = top + $(this).outerHeight();

        if (cur_pos >= top && cur_pos <= bottom) {
            if (cur_pos <= bottom) {
                main_nav.find('li').removeClass('active');
            }
            main_nav.find('a[href="#' + $(this).attr('id') + '"]').parent('li').addClass('active');
        }
        if (cur_pos < 300) {
            $(".nav-menu ul:first li:first, .mobile-menu ul:first li:first").addClass('active');
        }
    });
    // Init AOS
    function aos_init() {
        AOS.init({
            duration: 1000,
            once: true
        });
    }

    aos_init();

});

