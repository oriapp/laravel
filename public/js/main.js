(function ($) {
 "use strict";

// Preloader -section
    //-------------------------------------------------------
  // Preloader 
	jQuery(window).on('load', function() {
		jQuery("#status").fadeOut();
		jQuery("#preloader").delay(350).fadeOut("slow");
	});


/*----------------------------
 2. Mobile Menu Activation
-----------------------------*/
    jQuery('.mobile-menu nav').meanmenu({
        meanScreenWidth: "991",
    });


/*--------------------------
 3. Sticky Menu 
---------------------------- */
	$(window).on('scroll', function(){
		if( $(window).scrollTop()>900 ){
			$('#sticky').addClass('sticky');
			} else {
			$('#sticky').removeClass('sticky');
		}
	});	
	
/*----------------------------
4. wow js active
------------------------------ */
	new WOW().init();
 
/*----------------------------
5. owl active
------------------------------ */
	//Events slider 
	$(".events-img").owlCarousel({
		autoPlay: true, 
		slideSpeed:2000,
		pagination:false,
		navigation:true,	  
		items : 3,
		/* transitionStyle : "fade", */    /* [This code for animation ] */
		navigationText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [992,2],
		itemsTablet: [768,2],
		itemsMobile : [480,1],
	});

	//Products slider
	$(".pro-sliders").owlCarousel({
		autoPlay: true, 
		slideSpeed:2000,
		pagination:false,
		navigation:true,	  
		items : 4,
		/* transitionStyle : "fade", */    /* [This code for animation ] */
		navigationText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
		itemsDesktop : [1199,4],
		itemsDesktopSmall : [992,3],
		itemsTablet: [768,2],
		itemsMobile : [480,1],
	});
	
	$(".ln-sliders").owlCarousel({
		autoPlay: true, 
		slideSpeed:2000,
		pagination:false,
		navigation:true,	  
		items : 2,
		/* transitionStyle : "fade", */    /* [This code for animation ] */
		navigationText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
		itemsDesktop : [1199,2],
		itemsDesktopSmall : [992,2],
		itemsTablet: [768,2],
		itemsMobile : [480,1],
	});

	//Event speaker slider
	$(".speakers-slider").owlCarousel({
		autoPlay: true, 
		slideSpeed:2000,
		pagination:false,
		navigation:false,	  
		items : 3,
		/* transitionStyle : "fade", */    /* [This code for animation ] */
		navigationText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
		itemsDesktop : [1199,3],
		itemsDesktopSmall : [992,3],
		itemsTablet: [768,2],
		itemsMobile : [480,1],
	});

	//Twitter posts slider
	$(".twitt-sliders").owlCarousel({
		autoPlay: true, 
		slideSpeed:2000,
		pagination:false,
		navigation:true,	  
		items : 1,
		/* transitionStyle : "fade", */    /* [This code for animation ] */
		navigationText:["<i class='fas fa-long-arrow-alt-left'></i>","<i class='fas fa-long-arrow-alt-right'></i>"],
		itemsDesktop : [1199,1],
		itemsDesktopSmall : [992,1],
		itemsTablet: [768,1],
		itemsMobile : [480,1],
	});
/*--------------------------
6. jarallax active
---------------------------- */
	$('.jarallax').jarallax({
		speed: 0.5
	});

/*----------------------------
7. range-slider active
------------------------------ */  
	$( "#range-price" ).slider({
		range: true,
		min: 0,
		max: 1200,
		values: [ 300, 875 ],
		slide: function( event, ui ) {
	$( "#price" ).val("$" + ui.values[ 0 ] + " - " +  " $" + ui.values[ 1 ]  );
	}
	});

	$( "#price" ).val( "$" + $( "#range-price" ).slider( "values", 0 ) +
	" - " + " $" + $( "#range-price" ).slider( "values", 1 ));

/*----------------------------
8. magnific Popup active
------------------------------ */
	$('.gallery').magnificPopup({
		delegate: 'a',
		type: 'image',
		closeOnContentClick: false,
		closeBtnInside: false,
		mainClass: 'mfp-with-zoom mfp-img-mobile',
		image: {
			verticalFit: true,
			titleSrc: function(item) {
				return item.el.attr('title') + ' &middot; <a class="image-source-link" href="'+item.el.attr('data-source')+'" target="_blank">image source</a>';
			}
		},
		gallery: {
			enabled: true
		},
		zoom: {
			enabled: true,
			duration: 300, // don't foget to change the duration also in CSS
			opener: function(element) {
				return element.find('img');
			}
		}
	});

	//Video Play
	$('.video-play-icon').magnificPopup({
        type: 'iframe'
      });
      $.extend(true, $.magnificPopup.defaults, {
        iframe: {
          patterns: {
            youtube: {
              index: 'youtube.com/',
              id: 'v=',
              src: 'http://www.youtube.com/embed/%id%?autoplay=1'
            }
          }
        }
      });
	
/*----------------------------
9. ist grid view active
------------------------------ */ 
	$('#listview').on('click',function(event){
		event.preventDefault();
		$('.products').addClass('list-item');
	});
    $('#gridview').on('click',function(event){
    	event.preventDefault();
    	$('.products').removeClass('list-item');
    	$('.products').addClass('grid-item'); 
    });
/*--------------------------
10. bxslider active
---------------------------- */   
	$('.bx-demo').bxSlider({
		pagerCustom: '.bx-thumb'
	});

	//Home slider     
	$('.item-content').bxSlider({
		pagerCustom: '.item-thumbnail',
		mode: 'fade',
		speed:1000,
		auto:true
	});

/*--------------------------
11. masonry active
---------------------------- */	
	$('.masonry').masonry({
	  itemSelector: '.grid-item'
	}); 

/*--------------------------
12. slick active
---------------------------- */	
	$('.blog-slider').slick({
	  slidesToShow: 3,
	  variableWidth: true,
	  prevArrow: '<button type="button" class="slick-prev"><i class="fas fa-long-arrow-alt-left"></i></button>',
	  nextArrow: '<button type="button" class="slick-next"><i class="fas fa-long-arrow-alt-right"></i></button>',
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        slidesToShow: 1
	      }
	    }
	  ]
	});


/*--------------------------
13. Search box jquery
---------------------------- */	
	$( ".searchd" ).on( "click", function() {
      $( ".searchbox" ).addClass( "open", 1000);
    });

    $( ".close" ).on( "click", function() {
      $( ".searchbox" ).removeClass( "open", 1000);
    });
/*--------------------------
14. Events collapsed
---------------------------- */	
	$( ".panel-heading>a" ).on( "click", function() {
      	$( ".cnc" ).removeClass( "btncnc");
    });

/*----------------------------
15. Toggle Cart box
------------------------------ */
	$( ".cart-head>button" ).on("click",function() {
	  $( ".nav-shop-cart" ).slideToggle("slow");
	});

/*--------------------------
16. scrollUp
---------------------------- */	
	$.scrollUp({
        scrollText: '<i class="fas fa-angle-up"></i>',
        easingType: 'linear',
        scrollSpeed: 900,
        animation: 'fade'
    });


/*--------------------------
 17. counterdown
---------------------------- */
	function e() {
	    var e = new Date;
	        e.setDate(e.getDate() + 3);
	    var dd = e.getDate();
	    var mm = e.getMonth() + 1;
	    var y = e.getFullYear();
	    var futureFormattedDate = mm + "/" + dd + "/" + y + ' 12:00:00';
	    return futureFormattedDate;
	}

	$('.eventleft').downCount({
		date: e(),
	    offset: 16
	});

	
/*--------------------------
18. Product cart added value
---------------------------- */ 
	$(".vertical-spin").TouchSpin({
		verticalbuttons: true,
		verticalupclass: 'fas fa-plus',
		verticaldownclass: 'fas fa-minus'
	});	   
 
})(jQuery); 