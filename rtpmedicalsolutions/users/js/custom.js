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
