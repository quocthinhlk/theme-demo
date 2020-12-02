/* Back to top */
jQuery(window).scroll(function(){
    if (window.pageYOffset > 100){
        jQuery(".go-to-top").css("display","flex");
        jQuery(".wapper_menu").addClass("wapper_menu_active");
    } else {
        jQuery(".go-to-top").css("display","none");
        jQuery(".wapper_menu").removeClass("wapper_menu_active");
    }
});

jQuery(document).ready(function ($) {
    "use strict";
    /* Scroll to top */
    $('.go-to-top').on('click', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});

/* Show/Hide search form */
jQuery( document ).ready(function() {
    jQuery(".btn_search").on('click', function (event) {
        event.preventDefault();
        if (jQuery('.search-text').hasClass('search-form-active')) {
            jQuery('.search-text, .search-close').removeClass('search-form-active');
        } else {
            jQuery('.search-text, .search-close').addClass('search-form-active');
        }
        return false;
    });
    jQuery(".close_button").on('click', function (event) {
        jQuery('.search-text, .search-close').removeClass('search-form-active');
        });
})
/* Slider */
jQuery( document ).ready(function() {
    jQuery('.slider').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        mouseDrag:false,
        autoplay:true,
        animateOut: 'fadeOut',
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })
});

/* Mobile menu */
jQuery( document ).ready(function() {
    jQuery(".burger").on('click', function (event) {
        event.preventDefault();
        if (jQuery('.burger').hasClass('burger_active')) {
            jQuery('.burger').removeClass('burger_active');
            jQuery('.nav-menu-mobile').removeClass('menu-mobile-active');
        } else {
            jQuery('.burger').addClass('burger_active');
            jQuery('.nav-menu-mobile').addClass('menu-mobile-active');
        }
        return false;
    });
})