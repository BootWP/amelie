(function ($) {
	"use strict";

	// Slider
	let swiper = new Swiper('.aml-slider', {
		slidesPerView: 2,
		// spaceBetween: 30,
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


})(jQuery);