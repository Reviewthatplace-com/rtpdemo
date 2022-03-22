$('.timeInHours').pickatime({
    // 12 or 24 hour
    twelvehour: true,
    });

    var hours = new Date().getHours();
    var mid='am';
    if(hours==0){ //At 00 hours we need to show 12 am
    hours=12;
    }
    else if(hours>12)
    {
    hours=hours%12;
    mid='pm';
    }

function insuranceTime() 
{ 
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = mm + '/' + dd + '/' + yyyy;
  var currentdate = new Date(); 

  var datetime = today + " @ "  
                  + hours + ":"  
                  + currentdate.getMinutes()  
                  + mid;
  document.querySelector('.insuranceTime').textContent 
                  = datetime;
}

function demoTime() 
{ 
  var today = new Date();
  var dd = String(today.getDate()).padStart(2, '0');
  var mm = String(today.getMonth() + 1).padStart(2, '0'); //January is 0!
  var yyyy = today.getFullYear();

  today = mm + '/' + dd + '/' + yyyy;
  var currentdate = new Date(); 

  var datetime = today + " @ "  
                  + hours + ":"  
                  + currentdate.getMinutes()  
                  + mid;
  document.querySelector('.demoTime').textContent 
                  = datetime;
} 



$("#insurance1").click(function(){
  $(this).hide();
  $("#insurance2").show();
  insuranceTime();
});

$("#insurance2").click(function(){
  $(this).hide();
  $("#insurance1").show();
  insuranceTime();
});

 //for demo button
 $("#demo1").click(function(){
  $(this).hide();
  $("#demo2").show();
  demoTime();
});

 $("#demo2").click(function(){
  $(this).hide();
  $("#demo1").show();
  demoTime();
});

 //for pharmacy button
 $("#pharmacy1").click(function(){
  $(this).hide();
  $("#pharmacy2").show();
});

 $("#pharmacy2").click(function(){
  $(this).hide();
  $("#pharmacy1").show();
});

//for payment button
$("#payment1").click(function(){
  $(this).hide();
  $("#payment2").show();
});

$("#payment2").click(function(){
  $(this).hide();
  $("#payment1").show();
});

 //for vitals button
 $("#vitals1").click(function(){
  $(this).hide();
  $("#vitals2").show();
});

 $("#vitals2").click(function(){
  $(this).hide();
  $("#vitals1").show();
});

