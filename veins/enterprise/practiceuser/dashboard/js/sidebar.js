 $(document).ready(function () {
 	$('#sidebarCollapse').on('click', function () {
 		
 	});
 });


 $(document).ready(function(){
 	$(".active").children().show();
 })


 $(document).ready(function(){
 	$("#sidebarCollapse").on('click', function(){
 		if ($(window).width() >= 800) 
 		{
 			$('#sidebar').toggleClass('active');
 			$('#content').toggleClass("collapseContent");
 			
 			$("#sidebar").hover(function(){
 				$("#sidebar").toggleClass("active");
 			});
 		}

 		else if($(window).width() <= 450)
 		{
 			
 			$('#sidebar').removeClass('active');
 			$('#sidebar').removeClass('collapseContent');
 			$("#sidebar").toggleClass('onMobile');
 			$("#sidebar").hover(function()
 			{
 				$("#sidebar").removeClass("active");
 			});
 		}
 		
 	});
 })


  $('input[type=text], input[type=password], input[type=email], input[type=url], input[type=tel], input[type=number], input[type=search], input[type=date], input[type=time], textarea').each(function (element, i) {
    if ((element.value !== undefined && element.value.length > 0) || $(this).attr('placeholder') !== null) {
        $(this).siblings('label').addClass('active');
    }
    else {
        $(this).siblings('label').removeClass('active');
    }
});