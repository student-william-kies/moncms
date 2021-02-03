jQuery(document).ready(function ($) {

    // $('.site-header .form-section .form-holder').append('<button class="btn-close-form"><i class="fas fa-times"></i></button>');

    $(".site-header .form-section").click(function () {
        $(".site-header .form-section .form-holder").css("display", "block");
        $("body").addClass("menu-open");
    });

    $('.form-holder .btn-form-close').click(function () {
        $(".site-header .form-section .form-holder").css("display", "none");
        $("body").removeClass("menu-open");
    });

    $('.overlay').click(function () {
        $('.site-header .form-section .form-holder').css("display", "none");
        $('body').removeClass("menu-open");
    });

    $('.site-header .form-section .form-holder').click(function (event) {
        event.stopPropagation();
    });

    var winWidth = $(window).width();
    if (winWidth < 1025) {
        // // $('#site-navigation').prepend('<div class="btn-close-menu"><span></span></div>');
        // $('#site-navigation ul li.menu-item-has-children').append('<span class="angle-down"></span>');
        // $('#site-navigation ul li .angle-down').click(function() {
        //     $(this).prev().slideToggle();
        //     $(this).toggleClass('active');
        // });

        //menu accessibility
        $('<button class="angle-down"><i class="fas fa-chevron-down"></i></button>').insertAfter($('.mobile-navigation ul .menu-item-has-children > a'));
        $('.mobile-menu ul li .angle-down').click(function () {
            $(this).next().slideToggle();
            $(this).toggleClass('active');
        });

        $('#toggle-button').click(function () {
            $('body').addClass('menu-open');
            $('.mobile-navigation').addClass('open');
            $('.mobile-navigation').addClass('toggled');
            $('#mobile-site-navigation .primary-menu-list').addClass('toggled');

        });

        $('.close').click(function () {
            $('body').toggleClass('menu-open');
            $('.mobile-navigation').removeClass('open');
            $('.mobile-navigation').removeClass('toggled');
            $('#mobile-site-navigation .primary-menu-list').removeClass('toggled');

        });

        // $('.btn-close-menu').click(function() {
        //     $('body').removeClass('menu-open');
        //     $('.main-navigation').removeClass('open');
        // });

        $('.overlay').click(function () {
            $('body').removeClass('menu-open');
            $('.mobile-navigation').removeClass('open');
            $('.mobile-navigation').removeClass('toggled');
                $('#mobile-site-navigation .primary-menu-list').removeClass('toggled');
        });

        // $('#toggle-button').click(function (event) {
        //     event.stopPropagation();
        // });

        // $('#site-navigation').click(function (event) {
        //     event.stopPropagation();
        // });
    }

    if (winWidth > 1024) {
        $("#site-navigation ul li a").focus(function () {
            $(this).parents("li").addClass("focus");
        }).blur(function () {
            $(this).parents("li").removeClass("focus");
        });
    }

    // cart open-close
    $(".site-header .right .tools .cart").click(function () {
        $(".site-header .right .tools .cart .product-holder").slideToggle();
    });

    /* Portfolio Isotope Filter */
    if (($('.page-template-portfolio').length > 0) && (digital_download.is_rtc_active == 1)) {
        // init Isotope
        var $grid = $('.item-holder').imagesLoaded(function () {
            $grid.isotope({
                // options
            });
            // filter items on select
            $('.filter-button-group').on('click', 'button', function () {
                $('.filter-button-group button').removeClass('is-active');
                $(this).addClass('is-active');
                var filterValue = $(this).attr('data-filter');
                $grid.isotope({ filter: filterValue });
            });
        });
    }
});
