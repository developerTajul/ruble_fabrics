/*
* ----------------------------------------------------------------------------------------
    Template Name: amar bazar.
    Template URI: https://mahediamin.com
    Description: N/A
    Author: Mahedi Amin
    Author URI: https://mahediamin.com
    Version: 1.0

* ----------------------------------------------------------------------------------------
*/

(function ($) {
    'use strict';

    jQuery(document).on("ready", function () {









// cart show option

        $("a.cart-box-inner").on("click", function () {
            $(".amar-bazar-cart").toggleClass("active");
        });




    
        
        
        

 
        // owl carosel slider activation
        
        
        $('.slider-active').owlCarousel({
            loop: true,
            margin: 0,
            autoplay: true,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            autoplayTimeout: 6000,
            nav: true,
            navText: ['<i class="icofont icofont-thin-left"></i>', '<i class="icofont icofont-thin-right"></i>'],
            mouseDrag: false,
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 1
                },
                768: {
                    items: 1
                },
                980: {
                    items: 1
                },
                1199: {
                    items: 1
                }
            }
        });
        
        // slider animation
        
  $(".slider-active").on("translate.owl.carousel", function () {
            $(".slide-content h3").removeClass("animated slideInDown").css("opacity", "0");
            $(".slide-content h2").removeClass("animated slideInUp").css("opacity", "0");
            $(".slide-content p").removeClass("animated slideInDown").css("opacity", "0");
            $(".slide-content a").removeClass("animated  slideInRight").css("opacity", "0");
           
        });

        $(".slider-active").on("translated.owl.carousel", function () {
            $(".slide-content h3").addClass("animated slideInDown").css("opacity", "1");
            $(".slide-content h2").addClass("animated slideInUp").css("opacity", "1");
            $(".slide-content p").addClass("animated slideInDown").css("opacity", "1");
            $(".slide-content a").addClass("animated  slideInRight").css("opacity", "1");
           
        });
       
        
        
         $('[data-toggle="tooltip"]').tooltip()



        
        
          $(".has-cat").on('click', function () {


            $(this).children("ul.sub-cat").slideToggle("vis");
            $(this).toggleClass("change-icon");

        });
        
        
        // brand active
        $('.brand__active').owlCarousel({
            loop: true,
            margin: 0,
            nav: true,
            mouseDrag: true,
            dots: false,
            navText: ['<i class="icofont icofont-rounded-left"></i>', '<i class="icofont icofont-rounded-right"></i>'],
            responsive: {
                210: {
                    items: 1
                },
                320: {
                    items: 1
                },
                479: {
                    items: 3
                },
                768: {
                    items: 4
                },
                980: {
                    items: 5
                },
                1199: {
                    items: 5
                },
                1600: {
                    items: 5
                }
            }
        });
        
        
        
        
          /*
        ===================================================
         Scroll up
        ===================================================
        */

        $.scrollUp({
            scrollText: '<i class="fa fa-angle-double-up"></i>'

        });
        
        
        $("#zoom1").elevateZoom();
        
         if ($(window).width() < 991) {
            $('#zoom1').elevateZoom({
                zoomType: "inner",
                cursor: "crosshair"
            });
        };
        
        
        
        
        $(".menu-click").on("click", function(){

	$(".main-menu > ul").toggleClass('show');
	return false;
});



if ($(window).width() < 767) {
   // for mobile menu
      
        $(".main-menu ul li.menu-item-has-children").on("click", function(){
            
            $(this).children("ul.sub-menu").slideToggle();
            $(this).toggleClass('change-icon');
            return false;
            
        });
       
        
};



$(".main-menu ul li, .main-menu ul ul li").on("click", function(p){
            p.stopPropagation();
        });
        
        
        
        
        
        
        
        
        
        
    });

})(jQuery);