/*//navbar
var width = $(window).width();
$("#home").css('width', width);

*/

jQuery(document).ready(function() {
    var offset = 200;
    var duration = 20;
    jQuery(window).scroll(function() {
        if (jQuery(this).scrollTop() > offset) 
        {
            jQuery('.btn-action').fadeIn(duration);
        } 
        else 
        {
            jQuery('.btn-action').fadeOut(duration);
        }
    });
});
window.onscroll = function() {myFunction()};

var navbar = document.getElementById("menu-bar");
var sticky = navbar.offsetTop;

function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky");
    $("#main-menu-brand").removeClass("hide");
    $(".navbar-toggler").removeClass("hide");
    $("#menu-bar").css("background-color","white");
    $("#menu-bar").css("box-shadow","0 2px 5px 0 rgba(0,0,0,.16), 0 2px 10px 0 rgba(0,0,0,.12)");
    $("#menu-container").removeClass("container").addClass("container-fluid");
    $(".main-nav-links").removeClass("important-class");
    $(".main-nav-links").css("padding-left","10px");
    $(".main-nav-links").css("padding-right","10px");
    $(".main-nav-links").css("font-size","15px");
  } else {
    navbar.classList.remove("sticky");
    $("#main-menu-brand").addClass("hide");
    $(".navbar-toggler").addClass("hide");
    $("#menu-bar").css("background-color","transparent");
    $("#menu-bar").css("box-shadow","none");
    $(".main-nav-links").addClass("important-class");
    $(".main-nav-links").css("font-size","20px");
    $("#menu-container").removeClass("container-fluid").addClass("container");
  }
}

//active functionality
$('body').scrollspy({ target: '#navbar-scrollspy'});





