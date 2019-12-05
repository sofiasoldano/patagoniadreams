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
    
    var bancoData = [
        {
            text: "Banco Galicia",
            value: 1,
            selected: true,
            description: "Hasta 12 cuotas sin interés o 18 cuotas con interés",
            imageSrc: "img/galicia.png"
        },
        {
            text: "Banco Galicia",
            value: 2,
            selected: false,
            description: "Hasta 12 cuotas sin interés o 18 cuotas con interés",
            imageSrc: "img/galicia.png"
        },
        {
            text: "Banco Galicia",
            value: 3,
            selected: false,
            description: "Hasta 12 cuotas sin interés o 18 cuotas con interés",
            imageSrc: "img/galicia.png"
        },

    ];
    
    $('.selectBanco').ddslick({
        data:bancoData,
        selectText: "Seleccioná tu banco",
        imagePosition:"left",
        onSelected: function(selectedData){
            //callback function: do something with selectedData;
        }   
    });
    
     var tarjetaData = [
        {
            text: "Visa",
            value: 1,
            selected: true,
            description: "Hasta 12 cuotas sin interés o 18 cuotas con interés",
            imageSrc: "img/visa.png"
        },
        {
            text: "Visa",
            value: 2,
            selected: false,
            description: "Hasta 12 cuotas sin interés o 18 cuotas con interés",
            imageSrc: "img/visa.png"
        },
        {
            text: "Visa",
            value: 3,
            selected: false,
            description: "Hasta 12 cuotas sin interés o 18 cuotas con interés",
            imageSrc: "img/visa.png"
        },

    ];
    
    $('.selectTarjeta').ddslick({
        data:tarjetaData,
        selectText: "Seleccioná tu tarjeta",
        imagePosition:"left",
        onSelected: function(selectedData){
            //callback function: do something with selectedData;
        }   
    });
    
    var cuotaData = [
        {
            text: "9 cuotas fijas de $210",
            value: 1,
            selected: true,
            description: "Total a pagar $2.300. Interés $350 ",
        },
        {
            text: "9 cuotas fijas de $210",
            value: 2,
            selected: false,
            description: "Total a pagar $2.300. Interés $350 ",
        },
        {
            text: "9 cuotas fijas de $210",
            value: 3,
            selected: false,
            description: "Total a pagar $2.300. Interés $350 ",
        },

    ];
    
    $('.selectCuotas').ddslick({
        data: cuotaData,
        selectText: "Seleccioná cuantas cuotas"
    });
    
    
    if( $('.purchase').length ) {
        $('.content-debito').fadeOut();
        $('input[type="radio"][name="payment"]').on('change',function(){
          var ThisIt = $(this);
          if(ThisIt.val() == "credito"){
               $('.content-credito').slideDown();
               $('.content-debito').slideUp();
          } else if(ThisIt.val() == "debito"){
               $('.content-credito').slideUp();
               $('.content-debito').slideDown();
          }
        });
    }
    
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

    