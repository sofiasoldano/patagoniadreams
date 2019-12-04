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
    
    
    $('.multi-destino').multiselect({
        numberDisplayed: 1,
       nonSelectedText:"DESTINO",
       nSelectedText : "destinos",
       includeSelectAllOption: false,
       selectAllText: "Select all",
    });
    $('.multi-actividad').multiselect({
        numberDisplayed: 1,
       nonSelectedText:"TIPO DE ACTIVIDAD",
       nSelectedText : "actividades",
       includeSelectAllOption: false,
       selectAllText: "Select all",
    });
    $('.multi-duracion').multiselect({
        numberDisplayed: 1,
       nonSelectedText:"DURACION",
       nSelectedText : "duraciones",
       includeSelectAllOption: false,
       selectAllText: "Select all",
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
    
    if($('.page-home').length){
        $("#personas").focus(function() { 
            $('.input-dropdown').addClass('show');
        }); 
        $("#personas").focusout(function() { 
            $('.input-dropdown').removeClass('show');
        }); 
        $('.input-dropdown').click(function() {
          $("#personas").focus();
        });
    }
    
    dropdown();
    $( window ).resize(function() {
        dropdown();
    });
    
    numberPicker();
    
    
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

function dropdown(){
    var inputPosition = $("#personas").position().left;
    var value = inputPosition ;
    $(".input-dropdown").css("left", value);
}

function numberPicker(){
    $(".number-picker .icon").on("click", function() {

      var $button = $(this);
      var oldValue = $button.parent().find("input").val();

      if ($button.hasClass('plus')) {
          var newVal = parseFloat(oldValue) + 1;
        } else {
       // Don't allow decrementing below zero
        if (oldValue > 0) {
          var newVal = parseFloat(oldValue) - 1;
        } else {
          newVal = 0;
        }
      }

      $button.parent().find("input").val(newVal);

    });
}

    