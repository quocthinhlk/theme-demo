jQuery(document).ready(function(){
    jQuery('.view-full').click(function(event){
        jQuery('.single-faq-actives').removeClass('single-faq-actives');
        jQuery(this).parent().addClass('single-faq-actives');
        jQuery('.single-faq-actives .single-faq-title .single-faq-title-inner-border .tcon-plus-check').toggleClass('tcon-transform');
        jQuery('.single-faq-actives .single-faq-answer').toggleClass('single-faq-answer-active');
        jQuery('.single-faq-actives').toggleClass('single-faq-active');
        event.preventDefault();
    });
});

function openGallery(evt, name) {
  var i, galleryImages, filter;
  galleryImages = document.getElementsByClassName("gallery-images");
  for (i = 0; i < galleryImages.length; i++) {
    galleryImages[i].style.display = "none";
  }
  filter = document.getElementsByClassName("filter");
  for (i = 0; i < filter.length; i++) {
    filter[i].className = filter[i].className.replace(" filter-active", "");
  }
  document.getElementById(name).style.display = "block";
  evt.currentTarget.className += " filter-active";
}

jQuery(function () {
    "use strict";
    
    jQuery(".gallery-single-image").click(function () {
        var $src = jQuery(this).attr("src");
        jQuery(".custom-model-wrap img").attr("src", $src);
        jQuery(".custom-model-main").addClass('model-open');
    });
    
    jQuery(".close-btn, .bg-overlay").click(function() {
        jQuery(".custom-model-main").removeClass('model-open');
    });
    
});

/* Back to top button */
jQuery(window).scroll(function(){
    if (window.pageYOffset > 100){
        jQuery(".go-to-top").css("display","flex");
    } else {
        jQuery(".go-to-top").css("display","none");
    }
});

/* Scroll to top */
jQuery(document).ready(function ($) {
    "use strict";
    $('.go-to-top').on('click', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});

/* Menu mobile */
function myFunction() {
  var x = document.getElementById("nav-menu-mobile");
  if (x.style.display === "block") {
    x.style.display = "none";
  } else {
    x.style.display = "block";
  }
}
jQuery(document).ready(function() {
  jQuery("#nav-menu-mobile .menu-item-has-children").append("<i class='fas fa-angle-right'></i>");
  jQuery("#nav-menu-mobile .menu-item-has-children > i").attr("data-active", "0");
  jQuery("#nav-menu-mobile .menu-item-has-children > i").click(function(){
    data = jQuery(this).attr("data-active");
    li = jQuery(this).closest(".menu-item-has-children");
    if(data == '0') {
      jQuery(this).attr("data-active", "1");
      jQuery(this).addClass("i-rote");
      jQuery(this).addClass("fa-angle-down");
      jQuery(this).removeClass("fa-angle-right");
      jQuery(li).children(".sub-menu").show();
      jQuery(li).children(".sub-menu").addClass("data-active");

    } else {
      jQuery(this).attr("data-active", "0");
      jQuery(li).children(".sub-menu").hide();
      jQuery(this).removeClass("i-rote");
      jQuery(this).removeClass("fa-angle-down");
      jQuery(this).addClass("fa-angle-right");
    }
  });
});

/* Popup view video */
jQuery(function() {
    //----- OPEN
    jQuery('[data-popup-open]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-open');
        jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);
 
        e.preventDefault();
    });
 
    //----- CLOSE
    jQuery('[data-popup-close]').on('click', function(e)  {
        var targeted_popup_class = jQuery(this).attr('data-popup-close');
        jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);
 
        e.preventDefault();
    });
});
