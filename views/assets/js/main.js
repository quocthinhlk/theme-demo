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

/* Scroll to top */
jQuery(document).ready(function ($) {
    "use strict";
    $('.go-to-top').on('click', function () {
        $('html, body').animate({scrollTop: 0}, 800);
        return false;
    });
});

/* Show/Hide search form */


/* Mobile menu */
// jQuery( document ).ready(function() {
//     jQuery(".burger").on('click', function (event) {
//         event.preventDefault();
//         if (jQuery('.burger').hasClass('burger_active')) {
//             jQuery('.burger').removeClass('burger_active');
//             jQuery('.nav-menu-mobile').removeClass('menu-mobile-active');
//         } else {
//             jQuery('.burger').addClass('burger_active');
//             jQuery('.nav-menu-mobile').addClass('menu-mobile-active');
//         }
//         return false;
//     });
// })


/* percent product saled */
function loading() {
  document.querySelectorAll(".bar").forEach(function(current) {
    let startWidth = 0;
    const endWidth = current.dataset.size;
    const interval = setInterval(frame, 20);
    function frame() {
      if (startWidth >= endWidth) {
        clearInterval(interval);
      } else {
          startWidth++;
          current.style.width = `${endWidth}%`;
          current.firstElementChild.innerText = `${startWidth}%`;
        }
     }
  });
}
setTimeout(loading, 1000);


/* The date count down */
var targetDate = new Date("2021/01/01 00:00:00");   
var days;
var hrs;
var min;
var sec;
jQuery(function() {
   timeToLaunch();
      numberTransition('#days .number', days, 1000, 'easeOutQuad');
      numberTransition('#hours .number', hrs, 1000, 'easeOutQuad');
      numberTransition('#minutes .number', min, 1000, 'easeOutQuad');
      numberTransition('#seconds .number', sec, 1000, 'easeOutQuad');
      setTimeout(countDownTimer,1001);
});
function timeToLaunch(){
    var currentDate = new Date();
    var diff = (currentDate - targetDate)/1000;
    var diff = Math.abs(Math.floor(diff));  
    days = Math.floor(diff/(24*60*60));
    sec = diff - days * 24*60*60;
    hrs = Math.floor(sec/(60*60));
    sec = sec - hrs * 60*60;
    min = Math.floor(sec/(60));
    sec = sec - min * 60;
}
function countDownTimer(){ 
    timeToLaunch();
    $( "#days .number" ).text(days);
    $( "#hours .number" ).text(hrs);
    $( "#minutes .number" ).text(min);
    $( "#seconds .number" ).text(sec);
    setTimeout(countDownTimer,1000);
}
function numberTransition(id, endPoint, transitionDuration, transitionEase){
  $({numberCount: $(id).text()}).animate({numberCount: endPoint}, {
      duration: transitionDuration,
      easing:transitionEase,
      step: function() {
        $(id).text(Math.floor(this.numberCount));
      },
      complete: function() {
        $(id).text(this.numberCount);
      }
   }); 
};