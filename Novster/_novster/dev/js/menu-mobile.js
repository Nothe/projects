Slideout = require('slideout');

function initMobileMenu() {

  var slideout = new Slideout({
      'panel': document.getElementById('site-wrap'),
      'menu':  document.getElementById('mobile_menu'),
      'padding': 256,
      'tolerance': 70,
      'side': 'left'
  });

  $('#mobile_menu_open_link').on('click', function(e) {
    e.preventDefault();
    slideout.toggle();
  });

  // document.querySelector('.menu').addEventListener('click', function(eve) {
  //     if (eve.target.nodeName === 'A') { slideout.close(); }
  // });

	// slideout.on('beforeopen', function() {
	//   document.querySelector('.site-header').classList.add('fixed-open');
	// });

	// slideout.on('close', function() {
	//   document.querySelector('.site-header').classList.remove('fixed-open');
	// });

  function mobileWidth() {

    var menuWidth = 840;
    var screenWidth = $(window).width();

    if( screenWidth < menuWidth ){
      $('body').addClass('mobile_mode');
    }else{
      $('body').removeClass('mobile_mode');
      $('#site-wrap').css('transform', 'none');
      $('html').removeClass('slideout-open');
    }

  }

  $( window ).resize(function() {
    mobileWidth();
  });
  mobileWidth();

  $('.slideout-menu ul:first > li > a').on('click', function(e){

    if( $(this).parent().find('.stadvancedmenu_sub').length ){
      $('.slideout-menu .stadvancedmenu_sub').removeClass('active');
      return false;
    }

    return true;

  });

}

module.exports = initMobileMenu;