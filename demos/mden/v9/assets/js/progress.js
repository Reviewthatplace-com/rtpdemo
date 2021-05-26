$(document).ready(function(){
  $("#next_step2").click(function(){
    $("#second-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active1");
    $("#progress-value").html(11);
  })
  $("#next_step3").click(function(){
    $("#third-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active2");
    $("#progress-value").html(22);
  })
  $("#next_step4").click(function(){
    $("#fourth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active3");
    $("#progress-value").html(33);
  })
  $("#next_step5").click(function(){
    $("#fifth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active4");
    $("#progress-value").html(44);
  })
  $("#next_step6").click(function(){
    $("#sixth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active5a");
    $(".progress-left .progress-bar").addClass("active5b");
    $("#progress-value").html(55);
  })
  $("#next_step7").click(function(){
    $("#seventh-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active6");
    $("#progress-value").html(66);
  })
  $("#next_step8").click(function(){
    $("#eighth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active7");
    $("#progress-value").html(77);
  })
  $("#next_step9").click(function(){
    $("#ninth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active8");
    $("#progress-value").html(88);
  })
  $("#btn-finish").click(function(){
    $(".progress-left .progress-bar").addClass("active9");
    $("#progress-value").html(100);
  })
})
