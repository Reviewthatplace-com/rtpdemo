$(document).ready(function(){
  $("#next_step2").click(function(){
    $("#second-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active1");
    $("#progress-value").html(6);
  })
  $("#next_step3").click(function(){
    $("#third-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active2");
    $("#progress-value").html(12);
  })
  $("#next_step4").click(function(){
    $("#fourth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active3");
    $("#progress-value").html(18);
  })
  $("#next_step5").click(function(){
    $("#fifth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active4");
    $("#progress-value").html(24);
  })
  $("#next_step6").click(function(){
    $("#sixth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active5");
    $("#progress-value").html(30);
  })
  $("#next_step7").click(function(){
    $("#seventh-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active6");
    $("#progress-value").html(36);
  })
  $("#next_step8").click(function(){
    $("#eighth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active7");
    $("#progress-value").html(42);
  })
  $("#next_step9").click(function(){
    $("#ninth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active8");
    $("#progress-value").html(48);
  })
  $("#next_step10").click(function(){
    $("#tenth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active9a");
    $(".progress-left .progress-bar").addClass("active9b");
    $("#progress-value").html(54);
  })
  $("#next_step11").click(function(){
    $("#eleventh-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active10");
    $("#progress-value").html(60);
  })
  $("#next_step12").click(function(){
    $("#tweleveth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active11");
    $("#progress-value").html(66);
  })
  $("#next_step13").click(function(){
    $("#thirteenth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active12");
    $("#progress-value").html(72);
  })
  $("#next_step14").click(function(){
    $("#fourteenth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active13");
    $("#progress-value").html(78);
  })
  $("#next_step15").click(function(){
    $("#fifteenth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active14");
    $("#progress-value").html(84);
  })
  $("#next_step16").click(function(){
    $("#sixteenth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active15");
    $("#progress-value").html(90);
  })
  $("#btn-finish").click(function(){
    $(".progress-left .progress-bar").addClass("active16");
    $("#progress-value").html(100);
  })
})
