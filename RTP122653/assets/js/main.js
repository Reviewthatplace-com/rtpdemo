(function($) {
  "use strict";

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all)
    if (selectEl) {
      if (all) {
        selectEl.forEach(e => e.addEventListener(type, listener))
      } else {
        selectEl.addEventListener(type, listener)
      }
    }
  }

  /**
   * Animation on scroll
   */
  window.addEventListener('load', () => {
    AOS.init({
      duration: 1000,
      easing: 'ease-in-out',
      once: true,
      mirror: false
    })
  });

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#main-nav').outerHeight() - 1;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if (window.matchMedia("(max-width:991px)").matches) {
          $('.nav-menu').hide();
        }
        return false;
      }
    }
  });

  // Activate smooth scroll on page load with hash links in the url
  $(document).ready(function() {
    if (window.location.hash) {
      var initial_nav = window.location.hash;
      if ($(initial_nav).length) {
        var scrollto = $(initial_nav).offset().top - scrolltoOffset;
        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  // ========================================================================= //
  //  //NAVBAR SHOW - HIDE
  // ========================================================================= //

  $(window).scroll(function() {
    var scroll = $(window).scrollTop();
    if (!$('.subpage-nav').length) {
      if (scroll > 200) {
        $("#main-nav").slideDown(700);
      } else {
        $("#main-nav").slideUp(700);
      }
    }
  });

  // ========================================================================= //
  //  // RESPONSIVE MENU
  // ========================================================================= //

  $('.responsive').on('click', function(e) {
    $('.nav-menu').slideToggle();
  });

  // ========================================================================= //
  //  Typed Js
  // ========================================================================= //

  

  $(function() {
    var typed = $(".hero-typed");
    var strings = $('.hero-items').text();
    strings = $('.hero-items').data('typed-hero') + ',' + strings;
    strings = strings.split(',');

    hero-typed.typed({
      strings: strings,
      typeSpeed: 100,
      loop: true,
    });
  });

  // ========================================================================= //
  // Impressed Typed Js
  // ========================================================================= //

  if ($('.impressedtyped').length) {
    var typed_strings = $(".impressedtyped").data('impressed-items');
    typed_strings = typed_strings.split(',')
    new Typed('.impressedtyped', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 40,
      backDelay: 2000
    });
  }

  // ========================================================================= //
  // Paperwork Typed Js
  // ========================================================================= //

  if ($('.paperworktyped').length) {
    var typed_strings = $(".paperworktyped").data('paperwork-items');
    typed_strings = typed_strings.split(',')
    new Typed('.paperworktyped', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 40,
      backDelay: 2000
    });
  }

  // ========================================================================= //
  // Portal Typed Js
  // ========================================================================= //

  if ($('.portaltyped').length) {
    var typed_strings = $(".portaltyped").data('portal-items');
    typed_strings = typed_strings.split(',')
    new Typed('.portaltyped', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 40,
      backDelay: 2000
    });
  }

  // ========================================================================= //
  // Package Typed Js
  // ========================================================================= //

  if ($('.packagetyped').length) {
    var typed_strings = $(".packagetyped").data('package-items');
    typed_strings = typed_strings.split(',')
    new Typed('.packagetyped', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 40,
      backDelay: 2000
    });
  }

  // ========================================================================= //
  // Seo Typed Js
  // ========================================================================= //

  if ($('.seotyped').length) {
    var typed_strings = $(".seotyped").data('seo-items');
    typed_strings = typed_strings.split(',')
    new Typed('.seotyped', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 40,
      backDelay: 2000
    });
  }

  // ========================================================================= //
  // Review Typed Js
  // ========================================================================= //

  if ($('.reviewtyped').length) {
    var typed_strings = $(".reviewtyped").data('review-items');
    typed_strings = typed_strings.split(',')
    new Typed('.reviewtyped', {
      strings: typed_strings,
      loop: true,
      typeSpeed: 100,
      backSpeed: 40,
      backDelay: 2000
    });
  }

  // ========================================================================= //
  //  Owl Carousel Resources
  // ========================================================================= //

  $('.resources-carousel').owlCarousel({
    autoplay: false,
    loop: true,
    margin: 20,
    dots: false,
    nav: true,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      900: {
        items: 3
      }
    }
  });

  // ========================================================================= //
  //  Owl Carousel Recent Blogs
  // ========================================================================= //

  $('.recentblogs-carousel').owlCarousel({
    autoplay: true,
    loop: true,
    margin: 20,
    dots: true,
    nav: false,
    responsiveClass: true,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      900: {
        items: 1
      }
    }
  });

   $(".right-side-toggle").click(function () {
      $(".right-sidebar").slideDown(50);
      $(".right-sidebar").toggleClass("shw-rside");
  });

   // ========================================================================= //
   //  Porfolio isotope and filter
   // ========================================================================= //
   $(window).on('load', function() {
     var portfolioIsotope = $('.portfolio-container').isotope({
       itemSelector: '.portfolio-item',
       layoutMode: 'fitRows'
     });

     $('#portfolio-flters li').on('click', function() {
       $("#portfolio-flters li").removeClass('filter-active');
       $(this).addClass('filter-active');

       portfolioIsotope.isotope({
         filter: $(this).data('filter')
       });
     });
   });

   // Initiate venobox (lightbox feature used in portofilo)
   $(document).ready(function() {
     $('.venobox').venobox();
   });

   $("[title]").tooltip({
     delay: { "show": 500, "hide": 10 },
     offset: '0 10',
     boundary: 'window',
     template: '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
   });

})(jQuery);