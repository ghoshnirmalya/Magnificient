/* ------------------------------------ */
/*  Back to top
/* ------------------------------------ */
jQuery(document).ready(function($){
	// browser window scroll (in pixels) after which the "back to top" link is shown
	var offset = 300,
    //browser window scroll (in pixels) after which the "back to top" link opacity is reduced
	offset_opacity = 1200,
	//duration of the top scrolling animation (in ms)
	scroll_top_duration = 700,
	//grab the "back to top" link
	$back_to_top = $('.back-to-top');

	//hide or show the "back to top" link
	$(window).scroll(function(){
		( $(this).scrollTop() > offset ) ? $back_to_top.addClass('back-to-is-visible') : $back_to_top.removeClass('back-to-is-visible back-to-fade-out');
		if( $(this).scrollTop() > offset_opacity ) { 
			$back_to_top.addClass('back-to-fade-out');
		}
	});

	//smooth scroll to top
	$back_to_top.on('click', function(event){
		event.preventDefault();
		$('body,html').animate({
			scrollTop: 0 ,
		 	}, scroll_top_duration
		);
	});
    
});


/* ------------------------------------ */
/*  Foundation init
/* ------------------------------------ */
(function($) {
		$(document).foundation();
	})(jQuery);


/* ------------------------------------ */
/*  WOW init
/* ------------------------------------ */
new WOW().init();


/* ------------------------------------ */
/*  Fitvids init
/* ------------------------------------ */
jQuery('.post').fitVids();


/* ------------------------------------ */
/*  Flexslider init
/* ------------------------------------ */
(function($) {
    $(window).load(function() {
      $('#slider').flexslider({
        // change #slider to #carousel to use the carousel and uncomment all the lines
        animation: "slide",
        prevText: " ",
        nextText: " ",
        slideshow: true,
        directionNav: true,
        pauseOnHover: true,
        slideshowSpeed: 7000,
        animationSpeed: 600,
        smoothHeight: true,
        controlNav: true,
        animationLoop: true,
        //slideshow: false,
        //itemWidth: 210,
        //itemMargin: 5,
        //asNavFor: '#slider'
      });

      /*$('#slider').flexslider({
        animation: "slide",
        prevText: " ",
        nextText: " ",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel"
      });*/
    });
})(jQuery);


/* ------------------------------------ */
/*  Swipebox init
/* ------------------------------------ */
;( function( $ ) {
	$( '.swipebox' ).swipebox();
} )( jQuery );