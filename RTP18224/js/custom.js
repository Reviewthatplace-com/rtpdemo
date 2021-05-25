var $zoho=$zoho || {};$zoho.salesiq = $zoho.salesiq || {widgetcode:"fc7419b0bac87beaf78d08583abd967e32e2d0769bce422fef99d3d69b81fcbb", values:{},ready:function(){}};var d=document;s=d.createElement("script");s.type="text/javascript";s.id="zsiqscript";s.defer=true;s.src="https://salesiq.zoho.com/widget";t=d.getElementsByTagName("script")[0];t.parentNode.insertBefore(s,t);d.write("<div id='zsiqwidget'></div>"); 


$('document').ready(function(){
        $('.btn-cta1').css({'background-color':'#F05A2D','color':'white'});
        $('.btn-cta2').css({'border':'2px solid #F05A2D'});
        $('.btn-cta1').click(function(){
          $(this).css({'background-color':'#F05A2D','color':'white'});
          $('.btn-cta2').css({'background-color':'white','color':'black','border':'2px solid #F05A2D'});
        });
        $('.btn-cta2').click(function(){
          $(this).css({'background-color':'#F05A2D','color':'white'});
          $('.btn-cta1').css({'background-color':'white','color':'black','border':'2px solid #F05A2D'});
        });
      });

/*===============owl carousel====================*/

$('.owl-carousel').owlCarousel({
    loop:true,
    margin:30,
    nav:false,
    autoplay:1000,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})


/*=======================navbar=======================*/
$(document).ready(function(){
  $(window).scroll(function(){
    var scroll = $(window).scrollTop();
      if (scroll > 100) {
        $(".navbar").addClass('sticky');
      }

      else{
          $(".navbar").removeClass('sticky');
      }
  })
})