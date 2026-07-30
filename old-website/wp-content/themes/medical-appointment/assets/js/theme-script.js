function medical_appointment_openNav() {
  jQuery(".sidenav").addClass('show');
}
function medical_appointment_closeNav() {
  jQuery(".sidenav").removeClass('show');
}

( function( window, document ) {
  function medical_appointment_keepFocusInMenu() {
    document.addEventListener( 'keydown', function( e ) {
      const medical_appointment_nav = document.querySelector( '.sidenav' );

      if ( ! medical_appointment_nav || ! medical_appointment_nav.classList.contains( 'show' ) ) {
        return;
      }

      const elements = [...medical_appointment_nav.querySelectorAll( 'input, a, button' )],
        medical_appointment_lastEl = elements[ elements.length - 1 ],
        medical_appointment_firstEl = elements[0],
        medical_appointment_activeEl = document.activeElement,
        tabKey = e.keyCode === 9,
        shiftKey = e.shiftKey;

      if ( ! shiftKey && tabKey && medical_appointment_lastEl === medical_appointment_activeEl ) {
        e.preventDefault();
        medical_appointment_firstEl.focus();
      }

      if ( shiftKey && tabKey && medical_appointment_firstEl === medical_appointment_activeEl ) {
        e.preventDefault();
        medical_appointment_lastEl.focus();
      }
    } );
  }
  medical_appointment_keepFocusInMenu();
} )( window, document );

var btn = jQuery('#button');

jQuery(window).scroll(function() {
  if (jQuery(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  jQuery('html, body').animate({scrollTop:0}, '300');
});

jQuery(document).ready(function() {
    var slider_loop = jQuery('#top-slider').attr('slider-loop');
    var owl = jQuery('#top-slider .owl-carousel');
    owl.owlCarousel({
    margin: 0,
    nav:false,
    autoplay : true,
    lazyLoad: true,
    autoplayTimeout: 5000,
    loop: slider_loop == 0 ? false : slider_loop,
    dots: false,
    navText : ['<i class="fa fa-lg fa-chevron-left" aria-hidden="true"></i>','<i class="fa fa-lg fa-chevron-right" aria-hidden="true"></i>'],
    responsive: {
      0: {
        items: 1
      },
      576: {
        items: 1
      },
      768: {
        items: 1
      },
      1000: {
        items: 1
      },
      1200: {
        items: 1
      }
    },
    autoplayHoverPause : false,
    mouseDrag: true
  });

  window.addEventListener('load', (event) => {
    jQuery(".loading").delay(1000).fadeOut("slow");
  });
})