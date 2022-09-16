$(function () {
 
    $('#rating-btn').on('click', function () {
      $('.rating-modal').modal('hide');
      $('.review-modal').modal('show');
    });
   
    $('#review-btn').on('click', function () {
      $('.review-modal').modal('hide');
      $('.delete-review-modal').modal('show');
    });
   
    $('#mpayemnt').on('click', function () {
      $('.pdetails-popup').modal('hide');
      $('.mpayemnt-popup').modal('show');
    });

    $('.edit-profile').on('click', function () {
      $('#profile_about').hide();
      $('#profile_about2').show();
    });
    $('.change-password').on('click', function () {
      $('#profile_about').hide();
      $('#profile_about3').show();
    });

  
  });

  
$('.seller-slider-1').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navText: ["<img src='images/arrow-left.png'>","<img src='images/arrow-right.png'>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
$('.seller-slider-2').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navText: ["<img src='images/arrow-left.png'>","<img src='images/arrow-right.png'>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
$('.seller-slider-3').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    dots:false,
    navText: ["<img src='images/arrow-left.png'>","<img src='images/arrow-right.png'>"],
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})
$('.beginning-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    navText: ["<img src='images/arrow-left.png'>","<img src='images/arrow-right.png'>"],
    dots:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:1
        },
        1000:{
            items:1
        }
    }
})
$('.product-carousel').owlCarousel({
    loop:true,
    margin:0,
    nav:false,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:2
        },
        1000:{
            items:4
        }
    }
})


$(document).ready(function () {
    $('.dmenu').hover(function () {
            $(this).find('.sm-menu').first().stop(true, true).slideDown(150);
        }, function () {
            $(this).find('.sm-menu').first().stop(true, true).slideUp(105)
        });
    }); 
     
        $(document).ready(function() {
        $(".megamenu").on("click", function(e) {
            e.stopPropagation();
        });
    });

    $(".product-slider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: false,
        fade: true,
        asNavFor: ".product-thumbnail",
        autoplay: false,
      });
      
      $(".product-thumbnail").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        asNavFor: ".product-slider",
        dots: false,
        arrows: false,
        focusOnSelect: true,
        loop: true,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1,
              infinite: true,
            },
          },
        ],
      });

      function increaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value++;
        document.getElementById('number').value = value;
      }
      
      function decreaseValue() {
        var value = parseInt(document.getElementById('number').value, 10);
        value = isNaN(value) ? 0 : value;
        value == 1 ? "" : value--;
        // value--;
        document.getElementById('number').value = value;
      }

      $('.similar-items-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        navText:["<img src='images/nav-left.png'>","<img src='images/nav-right.png'>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })
      $('.more-items-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        navText:["<img src='images/nav-left-1.png'>","<img src='images/nav-right-1.png'>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:4
            }
        }
    })

    $( ".confirm-icon" ).click(function() {
		$(this).toggleClass("fa-eye fa-eye-slash");
	var input = $(".confirm-input");
	if (input.attr("type") === "password") {
		input.attr("type", "text");
	} else {
		input.attr("type", "password");
	}
	});

	$( ".enter-icon" ).click(function() {
		$(this).toggleClass("fa-eye fa-eye-slash");
	var input = $(".enter-input");
	if (input.attr("type") === "password") {
		input.attr("type", "text");
	} else {
		input.attr("type", "password");
	}
	});

	$( ".current-icon" ).click(function() {
		$(this).toggleClass("fa-eye fa-eye-slash");
	var input = $(".current-input");
	if (input.attr("type") === "password") {
		input.attr("type", "text");
	} else {
		input.attr("type", "password");
	}
	});

    $('.post-slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        dots:false,
        navText:["<img src='images/post-slider-left.png'>","<img src='images/post-slider-right.png'>"],
        responsive:{
            0:{
                items:1
            },
            600:{
                items:1
            },
            1000:{
                items:1
            }
        }
    })

    $('#datepicker-1').datepicker();