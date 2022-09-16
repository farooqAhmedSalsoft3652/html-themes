$(document).ready(function () {

/**** Subscription Package Carousal ****/
let CategorySlider = $("#package-carousel");

CategorySlider.owlCarousel({
	loop: false,
	rewind: true,
	nav: false,
	autoplay: false,
	dots: false,
	margin: 20,
	slideBy: 1,
	center: false,
	stagePadding: 0,
	navText: [
		'<i class="fas fa-arrow-left"></i>',
		'<i class="fas fa-arrow-right"></i>',
	],
	responsive: {
		0: {
			items: 1,
		},
		768: {
			items: 2,
		},
		992: {
			items: 2,
		},
		1200: {
			items: 2,
		},
	},
});

	/**** Pasword Visible***/
	$(".enter-icon").click(function () {

		$(this).toggleClass("fa-eye fa-eye-slash");

		var input = $(".enter-input");

		if (input.attr("type") === "password") {
			input.attr("type", "text");
		} else {
			input.attr("type", "password");
		}
	});


	$(".modal").on('shown.bs.modal', function () {
		$("body").addClass("modal-open");
	});


	$('.modal').on('hidden.bs.modal', function (event) {
		$("body").removeClass("modal-open");
	})
		


});

function increaseValue() {
	var value = parseInt(document.getElementById("number").value, 10);
	value = isNaN(value) ? 0 : value;
	value++;
	document.getElementById("number").value = value;
  }
  
  function decreaseValue() {
	var value = parseInt(document.getElementById("number").value, 10);
	value = isNaN(value) ? 0 : value;
	value < 1 ? (value = 1) : "";
	value--;
	document.getElementById("number").value = value;
  }






