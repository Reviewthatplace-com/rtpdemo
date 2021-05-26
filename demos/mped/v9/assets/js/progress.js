$(document).ready(function(){
  $("#next_step2").click(function(){
    $("#second-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active1");
    $("#progress-value").html(8);
  })
  $("#next_step3").click(function(){
    $("#third-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active2");
    $("#progress-value").html(16);
  })
  $("#next_step4").click(function(){
    $("#fourth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active3");
    $("#progress-value").html(24);
  })
  $("#next_step5").click(function(){
    $("#fifth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active4");
    $("#progress-value").html(32);
  })
  $("#next_step6").click(function(){
    $("#sixth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active5");
    $("#progress-value").html(40);
  })
  $("#next_step7").click(function(){
    $("#seventh-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active6");
    $("#progress-value").html(48);
  })
  $("#next_step8").click(function(){
    $("#eighth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active7a");
    $(".progress-left .progress-bar").addClass("active7b");
    $("#progress-value").html(56);
  })
  $("#next_step9").click(function(){
    $("#ninth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active8");
    $("#progress-value").html(64);
  })
  $("#next_step10").click(function(){
    $("#tenth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active9");
    $("#progress-value").html(72);
  })
  $("#next_step11").click(function(){
    $("#eleventh-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active10");
    $("#progress-value").html(80);
  })
  $("#next_step12").click(function(){
    $("#tweleveth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active11");
    $("#progress-value").html(88);
  })
  $("#next_step13").click(function(){
    $("#thirteenth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active12");
    $("#progress-value").html(96);
  })
  $("#submitButton").click(function(){
    $(".progress-left .progress-bar").addClass("active13");
    $("#progress-value").html(100);
  })
})
