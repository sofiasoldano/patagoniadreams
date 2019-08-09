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

    mobileSlider();
    $( window ).resize(function() {
        mobileSlider();
    });
});

function mobileSlider(){
    if($( window ).width() < 768){
        $('.mobile-slider').addClass('flexslider');
        $('.tab-pane').removeClass('slides');
        $('.tab-pane.active').addClass('slides');
          
         $('.mobile-slider').flexslider({
            animation: "slide",
            animationLoop: false,
            slideshow: true,
            animationLoop: true,
            directionNav: true,
            controlNav: false,
            selector: ".slides > .col-md-6",
            itemWidth: 800,
            minItems: 1,
            maxItems: 1
        });
        
    }
}
    