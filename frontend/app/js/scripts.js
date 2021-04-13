(function ($) {
	"use strict";

	// Slide elements on load
	$(window).on('load', function () {
		$('.slide-on-load').addClass('show');
	});

	// Check element view
	function check_is_in_view(this_el) {
		var rect = this_el.getBoundingClientRect()
		return (
			(rect.height > 0 || rect.width > 0) &&
			rect.bottom >= 0 &&
			rect.right >= 0 &&
			rect.top <= (window.innerHeight || document.documentElement.clientHeight) &&
			rect.left <= (window.innerWidth || document.documentElement.clientWidth)
		)
	}

	// Slide elements on scroll
	$(window).on('scroll', function () {
		$('.slide-on-scroll:not(.show)').each(function () {
			if (check_is_in_view(this)) {
				$(this).addClass('show');
			}
		});
	});

	// Slider
	let swiper = new Swiper('.aml-slider', {
		slidesPerView: 1.5,
		spaceBetween: 30,
		centeredSlides: true,
		loop: true,
		speed: 9000,
		loop: true,
		//allowTouchMove: false,
		autoplay: {
			delay: 0,
			// disableOnInteraction: false,
		}
	});

	// Scroll down nav-bar
	$(window).on('scroll', function () {
		if ($(this).scrollTop() != 0) {
			$('.aml-navbar').addClass('scroll-down');
		} else {
			$('.aml-navbar').removeClass('scroll-down');
		}
	});

	// Custom cursor
	let cursor = $(".cursor");

	$(window).on('mousemove', function (e) {
		cursor.css({
			top: e.clientY - cursor.height() / 2,
			left: e.clientX - cursor.width() / 2
		});
	});

	$('a')
		.on('mouseenter', function () {
			cursor.addClass('hover-on-link');
		})
		.on('mouseleave', function () {
			cursor.removeClass('hover-on-link');
		});

	$('.aml-footer')
		.on('mouseenter', function () {
			cursor.addClass('hover-on-footer');
		})
		.on('mouseleave', function () {
			cursor.removeClass('hover-on-footer');
		});

	$('.aml-typography__navbar')
		.on('mouseenter', function () {
			cursor.addClass('hover-on-footer');
		})
		.on('mouseleave', function () {
			cursor.removeClass('hover-on-footer');
		});

	// Scroll
	$("body").on('click', '[href*="#"]', function (e) {
		let navHeight = $('.aml-navbar').height() + 100;
		$('html,body').stop().animate({
			scrollTop: $(this.hash).offset().top - navHeight
		}, 1000);
		e.preventDefault();
	});

})(jQuery);


