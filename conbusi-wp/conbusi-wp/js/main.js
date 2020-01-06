(function (jQuery) {
"use strict";
// TOP Menu Sticky
jQuery(window).on('scroll', function () {
	var scroll = jQuery(window).scrollTop();
	if (scroll < 400) {
    jQuery("#sticky-header").removeClass("sticky");
    jQuery('#back-top').fadeIn(500);
	} else {
    jQuery("#sticky-header").addClass("sticky");
    jQuery('#back-top').fadeIn(500);
	}
});


jQuery(document).ready(function(){

  // mobile_menu
  var menu = jQuery('ul#navigation');
  if(menu.length){
    menu.slicknav({
      prependTo: ".mobile_menu",
      closedSymbol: '+',
      openedSymbol:'-'
    });
  };
// blog-menu
  // $('ul#blog-menu').slicknav({
  //   prependTo: ".blog_menu"
  // });

// review-active
jQuery('.slider_active').owlCarousel({
  loop:false,
  margin:0,
items:1,
autoplay:true,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
  nav:false,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          nav:false,
      },
      767:{
          items:1,
          nav:false,
      },
      992:{
          items:1,
          nav:false
      },
      1200:{
          items:1,
          nav:false
      },
      1600:{
          items:1,
          nav:true
      }
  }
});

// review-active
jQuery('.testmonial_active').owlCarousel({
  loop:false,
  margin:0,
items:1,
autoplay:true,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
  nav:true,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          dots:false,
          nav:false,
      },
      767:{
          items:1,
          dots:false,
          nav:false,
      },
      992:{
          items:1,
          nav:false
      },
      1200:{
          items:1,
          nav:false
      },
      1500:{
          items:1
      }
  }
});

// review-active
jQuery('.financial_active').owlCarousel({
  loop:true,
  margin:0,
items:1,
autoplay:true,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
  nav:true,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,

  responsive:{
      0:{
          items:1,
          nav:false
      },
      767:{
          items:1,
          nav:false
      },
      992:{
          items:1
      },
      1200:{
          items:1
      },
      1500:{
          items:1
      }
  }
});

// review-active
jQuery('.case_active').owlCarousel({
  loop:false,
  margin:30,
items:1,
autoplay:true,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
  nav:true,
dots:true,
autoplayHoverPause: true,
autoplaySpeed: 800,
//  dotsData: true,
center: false,
  responsive:{
      0:{
          items:1,
          nav:false
      },
      767:{
          items:3,
          nav:false
      },
      992:{
          items:3,
          nav:false
      },
      1200:{
          items:3,
          nav:false
      },
      1500:{
          items:3,
          nav:true
      }
  }
});

// for filter
  // init Isotope
  var $grid = jQuery('.grid').isotope({
    itemSelector: '.grid-item',
    percentPosition: true,
    masonry: {
      // use outer width of grid-sizer for columnWidth
      columnWidth: 1
    }
  });

  // filter items on button click
  jQuery('.portfolio-menu').on('click', 'button', function () {
    var filterValue = jQuery(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });

  //for menu active class
  jQuery('.portfolio-menu button').on('click', function (event) {
    jQuery(this).siblings('.active').removeClass('active');
    jQuery(this).addClass('active');
    event.preventDefault();
	});
  
  // wow js
  new WOW().init();

  // counter 
  jQuery('.counter').counterUp({
    delay: 10,
    time: 10000
  });

/* magnificPopup img view */
jQuery('.popup-image').magnificPopup({
	type: 'image',
	gallery: {
	  enabled: true
	}
});

/* magnificPopup img view */
jQuery('.img-pop-up').magnificPopup({
	type: 'image',
	gallery: {
	  enabled: true
	}
});

/* magnificPopup video view */
jQuery('.popup-video').magnificPopup({
	type: 'iframe'
});


  // scrollIt for smoth scroll
  jQuery.scrollIt({
    upKey: 38,             // key code to navigate to the next section
    downKey: 40,           // key code to navigate to the previous section
    easing: 'linear',      // the easing function for animation
    scrollTime: 600,       // how long (in ms) the animation takes
    activeClass: 'active', // class given to the active nav element
    onPageChange: null,    // function(pageIndex) that is called when page is changed
    topOffset: 0           // offste (in px) for fixed top navigation
  });

  // scrollup bottom to top
  jQuery.scrollUp({
    scrollName: 'scrollUp', // Element ID
    topDistance: '4500', // Distance from top before showing element (px)
    topSpeed: 300, // Speed back to top (ms)
    animation: 'fade', // Fade, slide, none
    animationInSpeed: 200, // Animation in speed (ms)
    animationOutSpeed: 200, // Animation out speed (ms)
    scrollText: '<i class="fa fa-angle-double-up"></i>', // Text for element
    activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
  });


  // blog-page

  //brand-active
jQuery('.brand-active').owlCarousel({
  loop:true,
  margin:30,
items:1,
autoplay:true,
  nav:false,
dots:false,
autoplayHoverPause: true,
autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          nav:false

      },
      767:{
          items:4
      },
      992:{
          items:7
      }
  }
});

// blog-dtails-page

  //project-active
jQuery('.project-active').owlCarousel({
  loop:true,
  margin:30,
items:1,
// autoplay:true,
navText:['<i class="Flaticon flaticon-left-arrow"></i>','<i class="Flaticon flaticon-right-arrow"></i>'],
nav:true,
dots:false,
// autoplayHoverPause: true,
// autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          nav:false

      },
      767:{
          items:1,
          nav:false
      },
      992:{
          items:2,
          nav:false
      },
      1200:{
          items:1,
      },
      1501:{
          items:2,
      }
  }
});

if (document.getElementById('default-select')) {
  jQuery('select').niceSelect();
}

  //about-pro-active
jQuery('.details_active').owlCarousel({
  loop:true,
  margin:0,
items:1,
// autoplay:true,
navText:['<i class="ti-angle-left"></i>','<i class="ti-angle-right"></i>'],
nav:true,
dots:false,
// autoplayHoverPause: true,
// autoplaySpeed: 800,
  responsive:{
      0:{
          items:1,
          nav:false

      },
      767:{
          items:1,
          nav:false
      },
      992:{
          items:1,
          nav:false
      },
      1200:{
          items:1,
      }
  }
});

});

// resitration_Form
jQuery(document).ready(function() {
	jQuery('.popup-with-form').magnificPopup({
		type: 'inline',
		preloader: false,
		focus: '#name',

		// When elemened is focused, some mobile browsers in some cases zoom in
		// It looks not nice, so we disable it:
		callbacks: {
			beforeOpen: function() {
				if(jQuery(window).width() < 700) {
					this.st.focus = false;
				} else {
					this.st.focus = '#name';
				}
			}
		}
	});
});



jQuery( document ).ready(function() {
  jQuery('.single_sidebar_widget > ul').addClass('list cat-list');
  jQuery('#comment').addClass('form-control');
  jQuery('#author').addClass('form-control');
  jQuery('#email').addClass('form-control');
  jQuery('#url').addClass('form-control');
  jQuery('input[type="submit"]').addClass('boxed-btn3');

});





        // Search Toggle
        jQuery("#search_input_box").hide();
        jQuery("#search").on("click", function () {
            jQuery("#search_input_box").slideToggle();
            jQuery("#search_input").focus();
        });
        jQuery("#close_search").on("click", function () {
            jQuery('#search_input_box').slideUp(500);
        });
        // Search Toggle
        jQuery("#search_input_box").hide();
        jQuery("#search_1").on("click", function () {
            jQuery("#search_input_box").slideToggle();
            jQuery("#search_input").focus();
        });

})(jQuery);	