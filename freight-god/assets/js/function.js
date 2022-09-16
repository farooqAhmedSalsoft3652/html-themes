$(document).ready(function () {

	/**** Home Client Review Carousal ****/
	let servicesSlider = $(".clients-review-carousel");

	servicesSlider.owlCarousel({
		autoplay: true,
		autoplay: 5000,
		autoplaySpeed: 2000,
		autoplayHoverPause: true,
		loop: true,
		nav: false,
		dots: true,
		margin: 30,
		slideBy: 1,
		stagePadding: 0,
		navText: [
			'<i class="far fa-chevron-left"></i>',
			'<i class="far fa-chevron-right"></i>',
		],
		responsive: {
			0: {
				items: 1,
			},
			767: {
				items: 1,

			},
			768: {
				items: 2,

			},
			991: {
				items: 2,

			},
			992: {
				items: 3,
			},
			1400: {
				items: 3,
			}
		},
	});

});

wow = new WOW({
	boxClass:     'wow',      // default
	animateClass: 'animate__animated',
	offset: 100,
	mobile: false, // default
	live: true
});
wow.init();

(function (window, document) {
	'use strict';    
	window.addEventListener('resize', deviceCheck);
    window.addEventListener('load', deviceCheck);
})
(window, document);
 

function deviceCheck() {    
    
	let screenWidth = window.innerWidth
	let videoBg = document.getElementsByClassName('video-bg')[0]

	if (screenWidth > 0) {
		videoBg.style.setProperty('width', screenWidth + "px");   
        console.log(window.innerWidth)
    }
    
}