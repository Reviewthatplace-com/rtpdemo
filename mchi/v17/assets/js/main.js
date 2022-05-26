!(function($) {
  "use strict";

  // Smooth scroll for the navigation menu and links with .scrollto classes
  var scrolltoOffset = $('#header').outerHeight() - 2;
  $(document).on('click', '.nav-menu a, .mobile-nav a, .scrollto', function(e) {
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {
        e.preventDefault();

        var scrollto = target.offset().top - scrolltoOffset;

        if ($(this).attr("href") == '#header') {
          scrollto = 0;
        }

        $('html, body').animate({
          scrollTop: scrollto
        }, 1500, 'easeInOutExpo');

        if ($(this).parents('.nav-menu, .mobile-nav').length) {
          $('.nav-menu .active, .mobile-nav .active').removeClass('active');
          $(this).closest('li').addClass('active');
        }

        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
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

  // Mobile Navigation
  if ($('.nav-menu').length) {
    var $mobile_nav = $('.nav-menu').clone().prop({
      class: 'mobile-nav d-lg-none'
    });
    $('body').append($mobile_nav);
    $('body').prepend('<button type="button" class="mobile-nav-toggle d-lg-none"><i class="icofont-navigation-menu"></i></button>');
    $('body').append('<div class="mobile-nav-overly"></div>');

    $(document).on('click', '.mobile-nav-toggle', function(e) {
      $('body').toggleClass('mobile-nav-active');
      $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
      $('.mobile-nav-overly').toggle();
    });

    $(document).on('click', '.mobile-nav .drop-down > a', function(e) {
      e.preventDefault();
      $(this).next().slideToggle(300);
      $(this).parent().toggleClass('active');
    });

    $(document).click(function(e) {
      var container = $(".mobile-nav, .mobile-nav-toggle");
      if (!container.is(e.target) && container.has(e.target).length === 0) {
        if ($('body').hasClass('mobile-nav-active')) {
          $('body').removeClass('mobile-nav-active');
          $('.mobile-nav-toggle i').toggleClass('icofont-navigation-menu icofont-close');
          $('.mobile-nav-overly').fadeOut();
        }
      }
    });
  } else if ($(".mobile-nav, .mobile-nav-toggle").length) {
    $(".mobile-nav, .mobile-nav-toggle").hide();
  }

  // Toggle .header-scrolled class to #header when page is scrolled
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('#header').addClass('header-scrolled');
    } else {
      $('#header').removeClass('header-scrolled');
    }
  });

  if ($(window).scrollTop() > 100) {
    $('#header').addClass('header-scrolled');
  }

  // Intro carousel
  var heroCarousel = $("#heroCarousel");
  var heroCarouselIndicators = $("#hero-carousel-indicators");
  heroCarousel.find(".carousel-inner").children(".carousel-item").each(function(index) {
    (index === 0) ?
    heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "' class='active'></li>"):
      heroCarouselIndicators.append("<li data-target='#heroCarousel' data-slide-to='" + index + "'></li>");
  });

  // Back to top button
  $(window).scroll(function() {
    if ($(this).scrollTop() > 100) {
      $('.back-to-top').fadeIn('slow');
    } else {
      $('.back-to-top').fadeOut('slow');
    }
  });

  $('.back-to-top').click(function() {
    $('html, body').animate({
      scrollTop: 0
    }, 1500, 'easeInOutExpo');
    return false;
  });

  // Service Main carousel (uses the Owl Carousel library)
  $(".service-main-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    center: false,
    margin: 25,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 2
      },
      992: {
        items: 4
      },
      1200: {
        items: 4
      }
    }
  });

  // Social Media carousel (uses the Owl Carousel library)
  $(".social-media-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    center: false,
    responsive: {
      0: {
        items: 4
      },
      768: {
        items: 5
      },
      992: {
        items: 6
      },
      1200: {
        items: 8
      }
    }
  });

  // Insurance isotope and filter
  $(window).on('load', function() {
    var galleryIsotope = $('.insurance-inner-container').isotope({
      itemSelector: '.insurance-inner-item'
    });

    $('#insurance-inner-flters li').on('click', function() {
      $("#insurance-inner-flters li").removeClass('filter-active');
      $(this).addClass('filter-active');

      galleryIsotope.isotope({
        filter: $(this).data('filter')
      });
    });

    // Initiate venobox lightbox
    $(document).ready(function() {
      $('.venobox').venobox({
        'share': false
      });
    });
  });

  // Blogs Main carousel (uses the Owl Carousel library)
  $(".blogs-main-carousel").owlCarousel({
    autoplay: true,
    dots: true,
    loop: true,
    center: false,
    responsive: {
      0: {
        items: 1
      },
      768: {
        items: 1
      },
      992: {
        items: 1
      },
      1200: {
        items: 1
      }
    }
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

  $(".right-side-toggle").click(function () {
      $(".right-sidebar").slideDown(50);
      $(".right-sidebar").toggleClass("shw-rside");
  });

})(jQuery);