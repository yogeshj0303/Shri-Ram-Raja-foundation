


;(function ($) {

	'use strict';

	$('.videoplay').modalVideo();
	$('.portfolio-single-slider').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000

	});

	$('.clients-logo').slick({
		infinite: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 2000
	});

	$('.testimonial-wrap').slick({
		slidesToShow: 2,
		slidesToScroll: 2,
		infinite: true,
		dots: true,
		arrows: false,
		autoplay: true,
		autoplaySpeed: 6000,
		responsive: [
		    {
		      breakpoint: 1024,
		      settings: {
		        slidesToShow: 3,
		        slidesToScroll: 3,
		        infinite: true,
		        dots: true
		      }
		    },
		    {
		      breakpoint: 900,
		      settings: {
		        slidesToShow: 2,
		        slidesToScroll: 2
		      }
		    },{
		      breakpoint: 600,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    },
		    {
		      breakpoint: 480,
		      settings: {
		        slidesToShow: 1,
		        slidesToScroll: 1
		      }
		    }
		  
  		]
	});

	$('.carousel').slick({
		// slidesToShow: 1,
		// dots:true,
		// centerMode: true,
		// autoplay: true,
		// autoplaySpeed: 6000,
		dots: true,
		infinite: 0,
		autoplay: true,
		autoplaySpeed: 3000,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		cssEase: 'linear'
	});

	$(".tab-slider").slick({		
		dots: true,
		infinite: 0,
		autoplay: true,
		autoplaySpeed: 3000,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		cssEase: 'linear'
	});

	// accreditations-slider

	$(".accreditations-slider").slick({		
		dots: true,
		customPaging : function(slider, i) {
			var thumb = $(slider.$slides[i]).data();
			return '<a class="dot">'+i+'</a>';
					},
		arrows: false,
		infinite: 0,
		autoplay: true,
		autoplaySpeed: 2000,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		cssEase: 'linear'
	});

	// Health-carousel
	$('.health-carousel').slick({		
		dots: true,
		infinite: 0,
		autoplay: true,
		autoplaySpeed: 3000,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		cssEase: 'linear'
	});

	
	// livelihood-carousel
	$('.livelihood-carousel').slick({		
		dots: true,
		infinite: 0,
		autoplay: true,
		autoplaySpeed: 3000,
		pauseOnFocus: false,
		pauseOnHover: false,
		pauseOnDotsHover: false,
		slidesToShow: 1,
		slidesToScroll: 1,
		fade: true,
		cssEase: 'linear'
	});




   $('.gallery-wrap').each(function () {
        $(this).find('.gallery-popup').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });
    });


	var map;

	function initialize() {
		var mapOptions = {
			zoom: 13,
			center: new google.maps.LatLng(50.97797382271958, -114.107718560791)
			// styles: style_array_here
		};
		map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);
	}

	var google_map_canvas = $('#map-canvas');

	if (google_map_canvas.length) {
		google.maps.event.addDomListener(window, 'load', initialize);
	}

	// Counter

	$('.counter-stat').counterUp({
	      delay: 10,
	      time: 1000
	  });

	

})(jQuery);
