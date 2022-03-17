

(function() {
  "use strict";

  /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim()
    if (all) {
      return [...document.querySelectorAll(el)]
    } else {
      return document.querySelector(el)
    }
  }

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
   * company member isotopes isotope and filter
   */
  window.addEventListener('load', () => {
    let companymemberContainer = select('.companymember-container');
    if (companymemberContainer) {
      let companymemberIsotope = new Isotope(companymemberContainer, {
        itemSelector: '.companymember-item'
      });

      let companymemberFilters = select('#companymember-flters li', true);

      on('click', '#companymember-flters li', function(e) {
        e.preventDefault();
        companymemberFilters.forEach(function(el) {
          el.classList.remove('filter-active');
        });
        this.classList.add('filter-active');

        companymemberIsotope.arrange({
          filter: this.getAttribute('data-filter')
        });
        companymemberIsotope.on('arrangeComplete', function() {
          AOS.refresh()
        });
      }, true);
    }

  });

  
})()



function scroll_to(clicked_link, nav_height) {
	var element_class = clicked_link.attr('href').replace('#', '.');
	var scroll_to = 0;
	if(element_class != '.top-content') {
		element_class += '-container';
		scroll_to = $(element_class).offset().top - nav_height;
	}
	if($(window).scrollTop() != scroll_to) {
		$('html, body').stop().animate({scrollTop: scroll_to}, 1000);
	}
}


jQuery(document).ready(function() {
	
	/*
	    Sidebar
	*/
	$('.dismiss, .dark_overlay').on('click', function() {
        $('.sidebar').removeClass('active');
        $('.dark_overlay').removeClass('active');
    });

    $('.open-menu').on('click', function(e) {
    	e.preventDefault();
        $('.sidebar').addClass('active');
        $('.dark_overlay').addClass('active');
        // close opened sub-menus
        $('.collapse.show').toggleClass('show');
        $('a[aria-expanded=true]').attr('aria-expanded', 'false');
    });
    /* change sidebar style */
	$('a.btn-customized-dark').on('click', function(e) {
		e.preventDefault();
		$('.sidebar').removeClass('light');
	});
	$('a.btn-customized-light').on('click', function(e) {
		e.preventDefault();
		$('.sidebar').addClass('light');
	});
	/* replace the default browser scrollbar in the sidebar, in case the sidebar menu has a height that is bigger than the viewport */
	/* $('.sidebar').mCustomScrollbar({
		theme: "minimal-dark"
	}); */
	
	/*
	    Navigation
	*/
	$('a.scroll-link').on('click', function(e) {
		e.preventDefault();
		scroll_to($(this), 0);
	});
	
	$('.to-top a').on('click', function(e) {
		e.preventDefault();
		if($(window).scrollTop() != 0) {
			$('html, body').stop().animate({scrollTop: 0}, 1000);
		}
	});
	/* make the active menu item change color as the page scrolls up and down */
	/* we add 2 waypoints for each direction "up/down" with different offsets, because the "up" direction doesn't work with only one waypoint */
	$('.section-container').waypoint(function(direction) {
		if (direction === 'down') {
			$('.menu-elements li').removeClass('active');
			$('.menu-elements a[href="#' + this.element.id + '"]').parents('li').addClass('active');
			//console.log(this.element.id + ' hit, direction ' + direction);
		}
	},
	{
		offset: '0'
	});
	$('.section-container').waypoint(function(direction) {
		if (direction === 'up') {
			$('.menu-elements li').removeClass('active');
			$('.menu-elements a[href="#' + this.element.id + '"]').parents('li').addClass('active');
			//console.log(this.element.id + ' hit, direction ' + direction);
		}
	},
	{
		offset: '-5'
	});

    /*
        Background slideshow
    */
	$('.top-content').backstretch("assets/img/backgrounds/1.jpg");
    $('.section-4-container').backstretch("assets/img/backgrounds/2.jpg");
    $('.section-6-container').backstretch("assets/img/backgrounds/1.jpg");
    
    /*
	    Wow
	*/
	new WOW().init();
	
	/*
	    Contact form
	*/
	$('.section-6-form form input[type="text"], .section-6-form form textarea').on('focus', function() {
		$('.section-6-form form input[type="text"], .section-6-form form textarea').removeClass('input-error');
	});
	$('.section-6-form form').submit(function(e) {
		e.preventDefault();
	    $('.section-6-form form input[type="text"], .section-6-form form textarea').removeClass('input-error');
	    var postdata = $('.section-6-form form').serialize();
	    $.ajax({
	        type: 'POST',
	        url: 'assets/contact.php',
	        data: postdata,
	        dataType: 'json',
	        success: function(json) {
	            if(json.emailMessage != '') {
	                $('.section-6-form form .contact-email').addClass('input-error');
	            }
	            if(json.subjectMessage != '') {
	                $('.section-6-form form .contact-subject').addClass('input-error');
	            }
	            if(json.messageMessage != '') {
	                $('.section-6-form form textarea').addClass('input-error');
	            }
	            if(json.emailMessage == '' && json.subjectMessage == '' && json.messageMessage == '') {
	                $('.section-6-form form').fadeOut('fast', function() {
	                    $('.section-6-form').append('<p>Thanks for contacting us! We will get back to you very soon.</p>');
	                    $('.section-6-container').backstretch("resize");
	                });
	            }
	        }
	    });
	});
	
});

$(document).ready(function () {
  $('.underthehoodicons').hover(function () {
      // Hover over code
      var title = $(this).attr('alt');
      $(this).data('tipText', title);
      $('<p class="tooltip"></p>').text(title).appendTo('body').fadeIn('slow');
  }, function () {
      // Hover out code
      $(this).attr('alt', $(this).data('tipText'));
      $('.tooltip').remove();
  }).mousemove(function (e) {
      var mousex = e.pageX + 20;
      //Get X coordinates
      var mousey = e.pageY + 10;
      //Get Y coordinates
      $('.tooltip').css({
          top: mousey,
          left: mousex
      })
  });
});

$(document).ready(function () {
  $('.sideicons').hover(function () {
      // Hover over code
      var title = $(this).attr('alt');
      $(this).data('tipText', title);
      $('<p class="tooltip"></p>').text(title).appendTo('body').fadeIn('slow');
  }, function () {
      // Hover out code
      $(this).attr('alt', $(this).data('tipText'));
      $('.tooltip').remove();
  }).mousemove(function (e) {
      var mousex = e.pageX + 20;
      //Get X coordinates
      var mousey = e.pageY + 10;
      //Get Y coordinates
      $('.tooltip').css({
          top: mousey,
          left: mousex
      })
  });
});

$(document).ready(function () {
  $('.sideicons0').hover(function () {
      // Hover over code
      var title = $(this).attr('alt');
      $(this).data('tipText', title);
      $('<p class="tooltip"></p>').text(title).appendTo('body').fadeIn('slow');
  }, function () {
      // Hover out code
      $(this).attr('alt', $(this).data('tipText'));
      $('.tooltip').remove();
  }).mousemove(function (e) {
      var mousex = e.pageX + 20;
      //Get X coordinates
      var mousey = e.pageY + 10;
      //Get Y coordinates
      $('.tooltip').css({
          top: mousey,
          left: mousex
      })
  });
});

$(document).ready(function () {
  $('.dashicons').hover(function () {
      // Hover over code
      var title = $(this).attr('alt');
      $(this).data('tipText', title);
      $('<p class="tooltip"></p>').text(title).appendTo('body').fadeIn('slow');
  }, function () {
      // Hover out code
      $(this).attr('alt', $(this).data('tipText'));
      $('.tooltip').remove();
  }).mousemove(function (e) {
      var mousex = e.pageX + 20;
      //Get X coordinates
      var mousey = e.pageY + 10;
      //Get Y coordinates
      $('.tooltip').css({
          top: mousey,
          left: mousex
      })
  });
});


$(document).ready(function(){
  $(window).scroll(function(){
  	var scroll = $(window).scrollTop();
	  if (scroll > 300) {
	  	$(".navbar").addClass('sticky');
	  }

	  else{
	  	$(".navbar").removeClass('sticky');
	  }
  })
})

$(".header").click(function () {
  var $this = $(this);
  $this.closest(".whole").find(".content").slideToggle();
});

$(".whole").on("click", "a", function () {
  event.preventDefault();
  $(".plan").removeClass("selected");
  $(this).closest(".whole").find(".plan").addClass("selected");
});


jQuery(document).ready(function($) {
  $('.count-number').counterUp({
      delay: 10,
      time: 1000
  });
});


var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
acc[i].addEventListener("click", function() {
this.classList.toggle("active");
var panel = this.nextElementSibling;
if (panel.style.maxHeight) {
panel.style.maxHeight = null;
} else {
panel.style.maxHeight = panel.scrollHeight + "px";
} 
});
}


/* Animate Header */
  (function() {
    // Init
    var container = document.getElementById("container"),
        inner = document.getElementById("inner");

    // Mouse
    var mouse = {
      _x: 0,
      _y: 0,
      x: 0,
      y: 0,
      updatePosition: function(event) {
        var e = event || window.event;
        this.x = e.clientX - this._x;
        this.y = (e.clientY - this._y) * -1;
      },
      setOrigin: function(e) {
        this._x = e.offsetLeft + Math.floor(e.offsetWidth / 2);
        this._y = e.offsetTop + Math.floor(e.offsetHeight / 2);
      },
      show: function() {
        return "(" + this.x + ", " + this.y + ")";
      }
    };

    // Track the mouse position relative to the center of the container.
    mouse.setOrigin(container);

    //----------------------------------------------------

    var counter = 0;
    var refreshRate = 10;
    var isTimeToUpdate = function() {
      return counter++ % refreshRate === 0;
    };

    //----------------------------------------------------

    var onMouseEnterHandler = function(event) {
      update(event);
    };

    var onMouseLeaveHandler = function() {
      inner.style = "";
    };

    var onMouseMoveHandler = function(event) {
      if (isTimeToUpdate()) {
        update(event);
      }
    };

    //----------------------------------------------------

    var update = function(event) {
      mouse.updatePosition(event);
      updateTransformStyle(
        (mouse.y / inner.offsetHeight / 2).toFixed(2),
        (mouse.x / inner.offsetWidth / 2).toFixed(2)
      );
    };

    var updateTransformStyle = function(x, y) {
      var style = "rotateX(" + x + "deg) rotateY(" + y + "deg)";
      inner.style.transform = style;
      inner.style.webkitTransform = style;
      inner.style.mozTranform = style;
      inner.style.msTransform = style;
      inner.style.oTransform = style;
    };

    //--------------------------------------------------------

    container.onmousemove = onMouseMoveHandler;
    container.onmouseleave = onMouseLeaveHandler;
    container.onmouseenter = onMouseEnterHandler;
  })();
/* Animate Header */
