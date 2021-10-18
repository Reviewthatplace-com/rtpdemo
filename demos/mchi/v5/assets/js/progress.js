$(document).ready(function(){
  $("#next_step2").click(function(){
    $("#second-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active1");
    $("#progress-value").html(9);
  })
  $("#next_step3").click(function(){
    $("#third-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active2");
    $("#progress-value").html(18);
  })
  $("#next_step4").click(function(){
    $("#fourth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active3");
    $("#progress-value").html(27);
  })
  $("#next_step5").click(function(){
    $("#fifth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active4");
    $("#progress-value").html(36);
  })
  $("#next_step6").click(function(){
    $("#sixth-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active5");
    $("#progress-value").html(45);
  })
  $("#next_step7").click(function(){
    $("#seventh-step").addClass("active");
    $(".progress-right .progress-bar").addClass("active6a");
    $(".progress-left .progress-bar").addClass("active6b");
    $("#progress-value").html(54);
  })
  $("#next_step8").click(function(){
    $("#eighth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active7");
    $("#progress-value").html(63);
  })
  $("#next_step9").click(function(){
    $("#ninth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active8");
    $("#progress-value").html(72);
  })
  $("#next_step10").click(function(){
    $("#tenth-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active9");
    $("#progress-value").html(81);
  })
  $("#next_step11").click(function(){
    $("#eleventh-step").addClass("active");
    $(".progress-left .progress-bar").addClass("active10");
    $("#progress-value").html(90);
  })
  $("#btn-finish").click(function(){
    $(".progress-left .progress-bar").addClass("active11");
    $("#progress-value").html(100);
  })
})
