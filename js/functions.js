$(document).ready(function() {
   $('.hero-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: true,
        directionNav: false,
        controlNav: true
    });
    
    $('.single-slider').flexslider({
        animation: "slide",
        animationLoop: false,
        slideshow: true,
        directionNav: true,
        controlNav: false
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
    