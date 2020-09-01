(function ($) {
 "use strict";


/*--------------------------
 Sticky Menu 
---------------------------- */      
  $(window).on('scroll', function(){
    if( $(window).scrollTop()>400 ){
      $('#sticky').addClass('stick');
      } else {
      $('#sticky').removeClass('stick');
    }
  });  

/*----------------------------
 jQuery MeanMenu
------------------------------ */
	jQuery('nav#dropdown').meanmenu();	
	
/*----------------------------
 wow js active
------------------------------ */
 new WOW().init();
 
/*----------------------------
 owl active
------------------------------ */  
  $(".team-area").owlCarousel({
      autoPlay: true, 
	  slideSpeed:1000,
	  pagination:false,
	  navigation:true,	  
      items : 3,
	  /* transitionStyle : "fade", */    /* [This code for animation ] */
	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      itemsDesktop : [1199,3],
	  itemsDesktopSmall : [992,2],
	  itemsTablet: [768,2],
	  itemsMobile : [480,1],
  });

  /*----------------------------
   Blog Slider
  ------------------------------ */  
    $(".blog-slider").owlCarousel({
        autoPlay: true, 
      slideSpeed:1000,
      pagination:false,
      navigation:true,    
        items : 3,
      /* transitionStyle : "fade", */    /* [This code for animation ] */
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        itemsDesktop : [1199,3],
      itemsDesktopSmall : [992,2],
      itemsTablet: [768,1],
      itemsMobile : [480,1],
    });

  /*----------------------------
Classes Features
  ------------------------------ */  
    $(".list-slide").owlCarousel({
        autoPlay: true, 
  	  slideSpeed:1000,
  	  pagination:false,
  	  navigation:true,	  
        items : 1,
  	  /* transitionStyle : "fade", */    /* [This code for animation ] */
  	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        itemsDesktop : [1199,1],
  	  itemsDesktopSmall : [992,1],
  	  itemsTablet: [768,1],
  	  itemsMobile : [480,1],
    });

  /*----------------------------
Home Shop Slide
  ------------------------------ */  
    $(".shop-slide").owlCarousel({
        autoPlay: true, 
      slideSpeed:1000,
      pagination:false,
      navigation:true,    
        items : 3,
      /* transitionStyle : "fade", */    /* [This code for animation ] */
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        itemsDesktop : [1199,3],
      itemsDesktopSmall : [992,2],
      itemsTablet: [768,1],
      itemsMobile : [480,1],
    });

  /*----------------------------
Home Shop Slide
  ------------------------------ */  
    $(".shop-slide-two").owlCarousel({
        autoPlay: true, 
  	  slideSpeed:1000,
  	  pagination:false,
  	  navigation:true,	  
      items : 1,
  	  /* transitionStyle : "fade", */    /* [This code for animation ] */
  	  navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
        itemsDesktop : [1199,1],
  	  itemsDesktopSmall : [992,1],
  	  itemsTablet: [768,1],
  	  itemsMobile : [480,1],
    });
      /*----------------------------
    About Trainer Slide
      ------------------------------ */  
        $(".about-trainer-slide").owlCarousel({
            autoPlay: true, 
          slideSpeed:1000,
          pagination:false,
          navigation:true,    
            items : 4,
          /* transitionStyle : "fade", */    /* [This code for animation ] */
          navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            itemsDesktop : [1199,3],
          itemsDesktopSmall : [992,2],
          itemsTablet: [768,1],
          itemsMobile : [480,1],
        });
    /*----------------------------
    About Trainer Slide
    ------------------------------ */  
        $(".class-image-slide").owlCarousel({
            autoPlay: true, 
          slideSpeed:100,
          pagination:false,
          navigation:false,    
            items : 1,
          /* transitionStyle : "fade", */    /* [This code for animation ] */
          navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            itemsDesktop : [1199,1],
          itemsDesktopSmall : [992,1],
          itemsTablet: [768,1],
          itemsMobile : [480,1],
        });
        /*----------------------------
        More Classes Slide
        ------------------------------ */  
        $(".more-classes").owlCarousel({
          autoPlay: true, 
          slideSpeed:100,
          pagination:false,
          navigation:true,    
            items : 3,
          /* transitionStyle : "fade", */    /* [This code for animation ] */
          navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            itemsDesktop : [1199,3],
          itemsDesktopSmall : [992,2],
          itemsTablet: [768,1],
          itemsMobile : [480,1],
        });
        /*----------------------------
        Home Two Classes Slide
        ------------------------------ */  
        $(".our-classes-slide").owlCarousel({
          autoPlay: true, 
          slideSpeed:100,
          pagination:false,
          navigation:true,    
            items : 3,
          /* transitionStyle : "fade", */    /* [This code for animation ] */
          navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
            itemsDesktop : [1199,3],
          itemsDesktopSmall : [992,2],
          itemsTablet: [768,1],
          itemsMobile : [480,1],
        });

        //Trainer section Jquery
        $(".tabmenu-list").on("click", ".owl-item li", function () {
            $("#tabmenu .owl-item li").each(function () {
                $(this).removeClass('active');
            });
        });
        //jquery Trainer activation code
        $("#tabmenu").owlCarousel({
            autoPlay: false,
            slideSpeed: 2000,
            pagination: false,
            navigation: true,
            items: 4,
            /* transitionStyle : "fade", */    /* [This code for animation ] */
            navigationText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
            itemsDesktop: [1199, 4],
            itemsDesktopSmall: [992, 3],
            itemsTablet: [768, 2],
            itemsMobile: [480, 1],
        });

        /*----------------------------
         Product Items added
        ------------------------------ */
        $('.spinner .btn:first-of-type').on('click', function() {
            $('.spinner input').val( parseInt($('.spinner input').val(), 10) + 1);
          });
          $('.spinner .btn:last-of-type').on('click', function() {
            $('.spinner input').val( parseInt($('.spinner input').val(), 10) - 1);
          }); 
        /*-----
/*----------------------------
 price-slider active
------------------------------ */  
	  $( "#slider-range" ).slider({
	   range: true,
	   min: 40,
	   max: 600,
	   values: [ 60, 570 ],
	   slide: function( event, ui ) {
		$( "#amount" ).val( "£" + ui.values[ 0 ] + " - £" + ui.values[ 1 ] );
	   }
	  });
	  $( "#amount" ).val( "£" + $( "#slider-range" ).slider( "values", 0 ) +
	   " - £" + $( "#slider-range" ).slider( "values", 1 ) );  
	   
/*--------------------------
 scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fa fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    }); 
/*-------------------------------
Counter Up
---------------------------------*/
$('.about-counter').counterUp({
	delay: 50,
	time: 3000
});
/*--------------------------
bxslider
---------------------------- */ 
  //Testimonial slider     
  $('.client-content').bxSlider({
    pagerCustom: '.client-img'
  });

  //Property details slider    
  $('.bg-photo').bxSlider({
    pagerCustom: '.sm-photo'
  });

/*-------------------------------------
Single Product Slide
---------------------------------------*/
$('.bxslider').bxSlider({
  pagerCustom: '#bx-pager'
});

/*Fancybox Activation code*/
      $('.fancybox').fancybox(); 

      /*---------------------
      Circular Bars - Knob
      --------------------- */  
      if(typeof($.fn.knob) != 'undefined') {
        $('.knob').each(function () {
          var $this = $(this),
            knobVal = $this.attr('data-rel');

          $this.knob({
            'draw' : function () { 
            $(this.i).val(this.cv + '%')
            }
          });

          $this.appear(function() {
            $({
              value: 0
            }).animate({
              value: knobVal
            }, {
              duration : 2000,
              easing   : 'swing',
              step     : function () {
              $this.val(Math.ceil(this.value)).trigger('change');
              }
            });
          }, {accX: 0, accY: -150});
        });
      }

      /*----------------------------

        mixitup active

        ------------------------------ */  

          $('#Container').mixItUp();
 
})(jQuery); 


function galleryMasonaryLayout() {

    if ($('.masonary-layout').length) {
        $('.masonary-layout').isotope({
            layoutMode: 'masonry'
        });
    }
    if ($('.post-filter').length) {
        $('.post-filter li').children('span').on('click', function() {
            var Self = $(this);
            var selector = Self.parent().attr('data-filter');
            $('.post-filter li').children('span').parent().removeClass('active');
            Self.parent().addClass('active');
            $('.filter-layout').isotope({
                filter: selector,
                stagger: 30,
                transitionDuration: 400,
                hiddenStyle: {
                    opacity: 0
                },
                visibleStyle: {
                    opacity: 1
                }
            });
            return false;
        });
    }
}
function galleryMasonaryLayout() {
    if ($('.masonary-layout').length) {
        $('.masonary-layout').isotope({
            layoutMode: 'masonry'
        });
    }
  if ($('.post-filter').length) {
        $('.post-filter li').children('span').on('click', function() {
            var Self = $(this);
            var selector = Self.parent().attr('data-filter');
            $('.post-filter li').children('span').parent().removeClass('active');
            Self.parent().addClass('active');
            $('.filter-layout').isotope({
                filter: selector,
                stagger: 30,
                transitionDuration: 400,
                hiddenStyle: {
                    opacity: 0
                },
                visibleStyle: {
                    opacity: 1
                }
            });
            return false;
        });
    }
}
// window load function

jQuery(window).on('load', function() {
    (function($) {
        // add your functions
        galleryMasonaryLayout();
    })(jQuery);
});