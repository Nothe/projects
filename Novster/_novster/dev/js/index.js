// fix with jquery
lightcase = require('lightcase');
require('lightcase/src/scss/lightcase.scss');

require('fullpage.js');
bodymovin = require('bodymovin');

function initIndex() 
{

	//$('#home-page-tabs li:first, #index .tab-content ul:first').addClass('active');

	// EXTERNAL LINKS
	$('.ext').attr('target', '_blank');
	

	//SOCIAL LINKS
	$('.top_socialsharing button').on('click', function(){
		type = $(this).attr('data-type');

		if( typeof sharing_name == 'undefined' || !sharing_name )
			sharing_name = document.title;

		if( typeof sharing_url == 'undefined' || !sharing_url )
			sharing_url = window.location.href;

		if (type.length)
		{
			switch(type)
			{
				case 'twitter':
					window.open('https://twitter.com/intent/tweet?text=' + sharing_name + ' ' + encodeURIComponent(sharing_url), 'sharertwt', 'toolbar=0,status=0,width=640,height=445');
					break;
				case 'facebook':
					window.open('http://www.facebook.com/sharer.php?u=' + sharing_url, 'sharer', 'toolbar=0,status=0,width=660,height=445');
					break;
				case 'google-plus':
					window.open('https://plus.google.com/share?url=' + sharing_url, 'sharer', 'toolbar=0,status=0,width=660,height=445');
					break;
				case 'pinterest':
					var img_url = sharing_img;
					if (typeof $("#bigpic").attr('src') != 'undefined' && $("#bigpic").attr('src') != '') {
						img_url = $("#bigpic").attr('src');
					}
					window.open('http://www.pinterest.com/pin/create/button/?media=' + img_url + '&url=' + sharing_url, 'sharerpinterest', 'toolbar=0,status=0,width=660,height=445');
					break;
			}
		}
	});	

	//LIGHTBOX
    $('a[data-rel^=lightcase]').lightcase({
        swipe: true,
        shrinkFactor: 0.95,
        maxHeight: 1500,
        maxWidth: 1500,
        showSequenceInfo: false,
        showTitle: false,
        showCaption: false
    });	

    var intervalAnimationID = false;
    var sectionIndex = false;
    var iconAnimation = function(){

    	var icon_container = $('#hp_full_slider').find('.hp_section').eq(sectionIndex - 1);
    	var count_icon = $(icon_container).find('.animation-icon').length;

    	for (var i = 0; i < Math.round(count_icon / 3); i++) {
			icon_n = Math.floor(Math.random() * count_icon + 1);
			$(icon_container).find(".position-" + icon_n).fadeToggle(Math.floor(800 * Math.random() + 200));
    	}	
    }

    $('#hp_full_slider').fullpage({
    	autoScrolling: true,
    	sectionSelector: '.hp_section',
    	anchors: ['intro', 'summary', 'preparation', 'orientation', 'experimentation', 'diffusion', 'contact', 'legal'],
		navigation: true,
		navigationPosition: 'right',
		navigationTooltips: ['', '', 'Se préparer', 'S\'orienter', 'Expérimenter', 'Diffuser'],
		responsiveWidth: 768,
		onLeave: function( index, nextIndex, direction){

			sectionIndex = nextIndex;

			if( $(window).width() > 768 ){
				if( nextIndex < 3 | nextIndex > 6 ){
					$('#fp-nav').fadeOut('slow');
				}else{
					$('#fp-nav').fadeIn('slow');
				}

				clearInterval(intervalAnimationID);
				if( nextIndex > 1 | nextIndex < 7 ){
					intervalAnimationID = window.setInterval(iconAnimation, 1200);
				}
			}	


		}    	
    });


    $('.hamburger-menu, .main-navigation a').on('click', function(e){
    	$('.site-header').toggleClass('active');
    	$('.site-content').toggleClass('menu-open');

    	$('.hamburger-menu').toggleClass('is-active');
    });

    console.log( $(window).width() );
    if( $(window).width() > 768 ){
	    $.getJSON( wordpressData.theme_url + "/bodymovin/menu/data.json", function( data ) {

	    	animationData = data;


			/* Shapes */
			var svgContainer = document.getElementById('svgContainerMenu');
			var animItem = bodymovin.loadAnimation({
			  wrapper: svgContainer,
			  animType: 'svg',
			  loop: true,
			  animationData: animationData
			});

	    });
   	}

}

module.exports = initIndex;