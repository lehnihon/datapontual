( function( $ ) {
	$(function() {
        $(".anima-a").css('visibility','hidden');
        $(".anima-b").css('visibility','hidden');
        $(".anima-c").css('visibility','hidden');
        $(".anima-d").css('visibility','hidden');
	});


	$(window).scroll(function() {
		if ($(this).scrollTop() > 300 ) {
        	$(".anima-a").css('visibility','visible');
        	$(".anima-a").addClass('animated fadeIn');
		}

        if ($(this).scrollTop() > 600 ) {
			var FunctionOne = function () {
				var r = $.Deferred();

	        	$(".anima-b").css('visibility','visible');
	        	$(".anima-b").addClass('animated bounceInLeft');
	        	$(".anima-d").css('visibility','visible');
	        	$(".anima-d").addClass('animated bounceInRight');

				setTimeout(function () {
				r.resolve();
				}, 500);
				return r;
			};
	
			FunctionOne().done(
				function () {
		        	$(".anima-c").css('visibility','visible');
		        	$(".anima-c").addClass('animated fadeIn');
				    $('.counter').counterUp({
				        delay: 50,
				        time: 1500
				    }).removeClass('counter');			 
				}
			);

        }

        if($(window).scrollTop() + $(window).height() > $(document).height()-100) {
        	$(".anima-rino").addClass('animated wobble');
     	}

	});

} )( jQuery );