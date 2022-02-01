//Scroll to top function
jQuery(document).on('scroll', function() {
  if (jQuery(document).scrollTop() > 30) {
    jQuery('#header-box').removeClass('large').addClass('small');
    jQuery('.logo').addClass('small-logo');
    jQuery('#big-title').addClass('main-title');
  } else {
    jQuery('#header-box').removeClass('small header-border').addClass('large');
    jQuery('.logo').removeClass('small-logo');
    jQuery('#big-title').removeClass('main-title');
  }
  setTimeout((function() {
    if (jQuery('#header-box').hasClass('small')) {
      jQuery('#header-box').addClass('header-border');
    }
  }), 400);
  if (jQuery(this).scrollTop() > 100) {
    jQuery('#scroll-top').fadeIn();
  } else {
    jQuery('#scroll-top').fadeOut();
  }
});

jQuery('#scroll-top').click(function() {
  jQuery('html, body').animate({
    scrollTop: 0
  }, 600);
  return false;
});

$( ".caret" ).click(function(e) {
  $( ".dropdown-menu" ).toggle();
});   

$('body').on('click', '.dropdown-toggle', function(e){
     if(e.target.className=='caret') 
         e.preventDefault();
})