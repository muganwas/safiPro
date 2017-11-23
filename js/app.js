(function($, document, window){
	
	$(document).ready(function(){

		// Cloning main navigation for mobile menu
		$(".mobile-navigation").append($(".main-navigation .menu").clone());

		// Mobile menu toggle 
		$(".menu-toggle").click(function(){
			$(".mobile-navigation").slideToggle();
		});
		//this is totally uncalled for
		/*$(".offer img, .news img").panr({
			sensitivity: 15,
			scale: false,
			scaleOnHover: true,
			scaleTo: 1.2,
			scaleDuration: 0.25,
			panY: true,
			panX: true,
			panDuration: 1.25,
			resetPanOnMouseLeave: false
		});*/

		$(".testimonial-slider, .hero-slider").flexslider({
			directionNav: false,
			controlNav: true
		});

		if( $(".map").length ) {
			$('.map').gmap3({
				map: {
					options: {
						maxZoom: 14,
						scrollwheel: false
					}  
				},
				marker:{
					address: "Kitemu, Wakiso, Uganda",
					// options: {
					// 	icon: new google.maps.MarkerImage(
					// 		"images/map-marker.png",
					// 		new google.maps.Size(43, 53, "px", "px")
					// 	)
					// }
				}
			},
			"autofit" );
	    	
		}

		$('.prod').on('mouseover', function () {
			$(this).animate({width: "20%"}, 300);
		}).on('mouseout', function () {
			$(this).animate({width: "19%"}, 300);
		});
		$('.trucks').on('mouseover', function () {
			$(this).animate({width: "25%"}, 300);
		}).on('mouseout', function () {
			$(this).animate({width: "24%"}, 300);
		});
	});
})(jQuery, document, window);