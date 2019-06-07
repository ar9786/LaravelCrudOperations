$(document).ready(function(){
  $('[data-toggle="tooltip"]').tooltip(); 
  $('[data-toggle="popover"]').popover();
    // $('[data-toggle="tab"]').tab();
});
/* smooth scroll starts here */
$(document).ready( function(){
  $('.hashscroll').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
       if (target.length) {
        $('html, body').animate({
          scrollTop: target.offset().top -0
        }, 1000);
        return false;
      }
    }
  });
});
/* smooth scroll starts here */

$(window).scroll(function() { 
  var scroll = $(window).scrollTop();
  if (scroll >= 200) {
    $(".gototop").show();
  } else {
    $(".gototop").hide();
  }
});

/* owl carousel calling funtion */
$(document).ready(function() {
  $("#mysport").owlCarousel({
    autoplay: true,
    autoplayTimeout:2000,
    items : 4,
    margin : 24,
    loop:true,
    dots : false,
    pagination : false,
    nav : true,
    navText : ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
    responsiveClass: true,
      responsive: {
        221:{
          items: 1
        },
        300:{
          items: 1
        },
        480:{
          items: 2
        },
        768:{
          items: 3
        },
        1170:{
          items: 4
        }
      }
  });
});

$(document).ready(function(){
  $('.owl-carousel').owlCarousel();
});
/* // owl carousel calling funtion */



/* off canvas menu starts here */
$(".offset_trigger").click(function(){
  $(".right_offset_wrap").show(400);
});
$(".offset_close").click(function(){
  $(".right_offset_wrap").hide(400);
});
/* / off canvas menu ends here */

/* // dropdown js*/
$(document).on('click.bs.dropdown.data-api', '.dropdown.keep-inside-clicks-open', function (e) {
    e.stopPropagation();
});
/* // dropdown end js*/