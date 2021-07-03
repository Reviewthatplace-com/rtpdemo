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

//google analytics
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());

gtag('config', 'UA-96678346-4');



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