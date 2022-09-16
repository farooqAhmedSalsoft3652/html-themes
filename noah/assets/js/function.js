wow = new WOW({
	boxClass:     'wow',      // default
	animateClass: 'animate__animated',
	offset: 100,
	mobile: false, // default
	live: true
});
wow.init();


/**** Home Forum Carousal ****/
let servicesSlider = $(".recent-blog-carousel");

servicesSlider.owlCarousel({
	autoplay: true,
	autoplay: 5000,
	autoplaySpeed: 2000,
	autoplayHoverPause: true,
	loop: true,
	nav: false,
	dots: false,
	margin: 30,
	slideBy: 1,
	center: false,
	stagePadding: 0,
	navText: [
		'<i class="far fa-chevron-left"></i>',
		'<i class="far fa-chevron-right"></i>',
	],
	responsive: {
		0: {
			items: 1,
			nav: false,
		},
		576: {
			items: 2,
			nav: false,
		},
		768: {
			items: 3,
			nav: false,
		},
		992: {
			items: 3,
		},
		1400:{
			items: 4,
		},
		1666: {
			items: 4,
			stagePadding: 150,
		},
	},
});

/**** Team Carousal (Home Page)****/
$(".team-carousel").owlCarousel({
	autoplay: true,
	autoplay: 2000,
	autoplaySpeed: 800,
	stagePadding: 10,
	loop: true,
	margin: 30,
	nav: false,
	arrows: false,
	dots: true,
	navText: [
		"<i class='fas fa-arrow-left'></i>",
		"<i class='fas fa-arrow-right'></i>",
	],
	responsive: {
		0: {
			items: 1,
		},
		575: {
			items: 2,
			nav: false,
		},
		768: {
			items: 2,
		},
		992: {
			items: 3,
			stagePadding: 100,
		},
		1300: {
			items: 4,
			stagePadding: 100,
		},
		1666: {
			items: 4,
			stagePadding: 150,
		},
	},
});