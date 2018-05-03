(function($) {
	"use strict"

	// Preloader
	$(window).on('load', function() {
		$("#preloader").delay(600).fadeOut();
	});
	
	// Mobile Toggle Btn
	$('.navbar-toggle').on('click',function(){
		$('#header').toggleClass('nav-collapse');
	});
	
	// Fixed Nav
	$(window).on('scroll', function() {
		var wScroll = $(this).scrollTop();
		wScroll > $('.banner-area').height() ? $('#header').addClass('fixed') : $('#header').removeClass('fixed');
	});
	
	// Banner Area Height
	function bannerHeight () {
		$('.banner-area').css({'paddingTop': $('#header').height() + 30});
	}
	$(window).on('resize', function() {
		bannerHeight();
	});
	bannerHeight();
	
	// Galery Slider
	$('#galery').owlCarousel({
		items:2,
		loop:true,
		margin:0,
		dots : false,
		nav: true,
		navText : ['<i class="fa fa-angle-left"></i>','<i class="fa fa-angle-right"></i>'],
		autoplay : true,
		responsive:{
			0: {
				items:1
			},
			992:{
				items:2
			}
		}
	});


	// date-picker
	$(".datepicker").datepicker({
		inline: true,
		dateFormat: 'dd/mm/yy' 
	});

	// when click main menu as auto scroll.
	$('#menu-main a').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        var target = this.hash;
		var $target = $(target);

		if (typeof($target.offset()) !== "undefined"){
			$('html, body').stop().animate({
				'scrollTop': $target.offset().top
			}, 500, 'swing', function () {});
		} else {
			window.location.href= this.href;
		}
    });

})(jQuery);