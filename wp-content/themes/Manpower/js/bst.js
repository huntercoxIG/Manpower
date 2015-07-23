(function ($) {

	"use strict";

	$(document).ready(function() {

		// Comments
		$(".commentlist li").addClass("panel panel-default");
		$(".comment-reply-link").addClass("btn btn-default");

		// Forms
		$('select, input[type=text], input[type=email], input[type=password], textarea').addClass('form-control');
		$('input[type=submit]').addClass('btn btn-primary');

		// Slickslider Initialization

		$('.successful-associates').slick({
	    autoplay: false,
	    dots: true
	  });


	  // Search Textfield styles
	  $('.form-control').click(function(){
	  	$(this).css('border', '1px solid #e87c22');

	  	$('.search-submit').css({"color": "#e87c22", "background-color": "#444", "border-left": "1px solid #e87c22" });
	  	$('.search-submit').toggleClass("clicked");

	  });



		// Manpower Logo

		var faderIndex = 0,
		faders = $('.mp-logo-text');

		function nextFade() {
			// fade out & call function
			$(faders[faderIndex]).fadeOut(1000, function() {
				// start counting
				faderIndex++;
				// check and reset before overflow
				if (faderIndex >= faders.length) faderIndex = 0;

				// fade in
				$(faders[faderIndex]).fadeIn(2500, function() {
					// check if '.mp-logo-text' has 'id="eci"'
					if ($(faders[faderIndex]).is('#eci')) {
						// delay "East Central Indiana"
						$(this).delay(3000);

						// repeat function indefinitely
						nextFade();
					}
					else {
						// repeat function indefinitely
						nextFade();
					}
				});
			});
		}

		// Initiate function
		nextFade();



		// A Closer Look Map
		$('.county-shapes').hover(function () {
			$('.county-shapes').addClass('hov');
			$('.circle-wrap').addClass('hov');
			$(this).css('opacity','1.0');
		}, function () {
			$('.county-shapes').removeClass('hov');
			$('.circle-wrap').removeClass('hov');
			$(this).css('opacity', '');
		});


		$('.cff-page-name').css('padding-top', '0px');


	});

}(jQuery));
