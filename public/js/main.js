(function($) {
    "use strict";
     $(document).on('ready', function() {

        jQuery(window).on('scroll', function() {
			if ($(this).scrollTop() > 200) {
				$('#header .header-inner').addClass("sticky");
			} else {
				$('#header .header-inner').removeClass("sticky");
			}
		});

		/*====================================
			Sticky Header JS
		======================================*/
		jQuery(window).on('scroll', function() {
			if ($(this).scrollTop() > 100) {
				$('.header').addClass("sticky");
			} else {
				$('.header').removeClass("sticky");
			}
		});

		$('.pro-features .get-pro').on( "click", function(){
			$('.pro-features').toggleClass('active');
		});


		/*====================================
			Mobile Menu
		======================================*/
		$('.menu').slicknav({
			prependTo:".mobile-nav",
			duration: 300,
			closeOnClick:true,
		});

		/*===============================
			Hero Slider JS
		=================================*/
		$(".hero-slider").owlCarousel({
			loop:true,
			autoplay:false,
			smartSpeed: 500,
			autoplayTimeout:3500,
			singleItem: true,
			autoplayHoverPause:true,
			items:1,
			nav:true,
			navText: ['<i class="fa fa-angle-left" aria-hidden="true"></i>', '<i class="fa fa-angle-right" aria-hidden="true"></i>'],
			dots:false,
		});


		/*=====================================
			Counter Up JS
		======================================*/
		$('.counter').counterUp({
			delay:20,
			time:2000
		});

		// /*===============================
		// 	Clients Slider JS
		// =================================*/
		// $('.clients-slider').owlCarousel({
		// 	items:5,
		// 	autoplay:true,
		// 	autoplayTimeout:3500,
		// 	margin:15,
		// 	smartSpeed: 400,
		// 	autoplayHoverPause:true,
		// 	loop:true,
		// 	nav:false,
		// 	dots:false,
		// 	responsive:{
		// 		300: {
		// 			items:1,
		// 		},
		// 		480: {
		// 			items:2,
		// 		},
		// 		768: {
		// 			items:3,
		// 		},
		// 		1170: {
		// 			items:5,
		// 		},
		// 	}
		// });

		/*===================
			Accordion JS
		=====================*/
		$('.accordion > li:eq(0) a').addClass('active').next().slideDown();
		$('.accordion a').on('click', function(j) {
			var dropDown = $(this).closest('li').find('p');
			$(this).closest('.accordion').find('p').not(dropDown).slideUp(300);
			if ($(this).hasClass('active')) {
				$(this).removeClass('active');
			} else {
				$(this).closest('.accordion').find('a.active').removeClass('active');
				$(this).addClass('active');
			}
			dropDown.stop(false, true).slideToggle(300);
			j.preventDefault();
		});

		/*====================================
			Nice Select JS
		======================================*/
		$('select').niceSelect();

		/*===============================
			Checkbox JS
		=================================*/
		$('input[type="checkbox"]').change(function(){
			if($(this).is(':checked')){
				$(this).parent("label").addClass("checked");
			} else {
				$(this).parent("label").removeClass("checked");
			}
		});

		/*===============================
			Right Bar JS
		=================================*/
		$('.right-bar .bar').on( "click", function(){
			$('.sidebar-menu').addClass('active');
		});
		$('.sidebar-menu .cross').on( "click", function(){
			$('.sidebar-menu').removeClass('active');
		});


		/*===================
			Scroll Up JS
		=====================*/
		$.scrollUp({
			scrollText: '<span><i class="fa fa-angle-up"></i></span>',
			easingType: 'easeInOutExpo',
			scrollSpeed: 900,
			animation: 'fade'
		});

		/*=======================
			Animate Scroll JS
		=========================*/
		$('.scroll').on("click", function (e) {
			var anchor = $(this);
				$('html, body').stop().animate({
					scrollTop: $(anchor.attr('href')).offset().top - 100
				}, 1000);
			e.preventDefault();
		});

	});

	/*====================
		Preloader JS
	======================*/
    window.addEventListener('load', function() {
        var preloaderContainer = document.querySelector('.preloader-container');
        preloaderContainer.style.display = 'none';
    });


    /*====================
		Button click JS
	======================*/
    //get appointment go to fillupform appointment
    document.addEventListener('DOMContentLoaded', function() {
        function scrollToSection(buttonId, sectionSelector) {
            var button = document.getElementById(buttonId);
            var section = document.querySelector(sectionSelector);
            button.addEventListener('click', function(event) {
                event.preventDefault();
                section.scrollIntoView({ behavior: 'smooth' });
            });
        }
        scrollToSection('book-appointment-btn', '.appointment');
        scrollToSection('services-btn', '.pricing-table');
        scrollToSection('about-btn', '.header');
        scrollToSection('contact-btn', '.footer');
        scrollToSection('about-footer', '.header');
        scrollToSection('services-footer', '.pricing-table');
    });



})(jQuery);
