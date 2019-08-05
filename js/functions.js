$(document).ready(function() {
   $('.hero-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: true,
        animationLoop: true,
        directionNav: false,
        controlNav: true
    });
    
     if( $('.gallery').length ) {
        $('.gallery-container').masonry({
          itemSelector: '.gallery-image'
        });
    }
    
	$('.icon-menu').click(function() {
        $('header .menu').addClass("show");   
    });
    
    $('.close-menu').click(function() {
        $('header .menu').removeClass("show");  
    });

});
    