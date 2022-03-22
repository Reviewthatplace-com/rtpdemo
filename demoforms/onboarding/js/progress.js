$(document).ready(function(){
  $(".letsbuild").click(function(){
    $(".progress-right .progress-bar").addClass("active1");
    $("#progress-value").html(4);
  })
  $("#continueStep2").click(function(){
    $(".progress-right .progress-bar").addClass("active2");
    $("#progress-value").html(10);
  })
  $("#continueStep3").click(function(){
    $(".progress-right .progress-bar").addClass("active3");
    $("#progress-value").html(16);
  })
  $("#continueStep4").click(function(){
    $(".progress-right .progress-bar").addClass("active4");
    $("#progress-value").html(22);
  })
  $("#continueStep5").click(function(){
    $(".progress-right .progress-bar").addClass("active5");
    $("#progress-value").html(28);
  })
  $("#continueStep6").click(function(){
    $(".progress-right .progress-bar").addClass("active6");
    $("#progress-value").html(34);
  })
  $("#continueStep7").click(function(){
    $(".progress-right .progress-bar").addClass("active7");
    $("#progress-value").html(40);
  })
  $("#continueStep8a").click(function(){
    $(".progress-right .progress-bar").addClass("active8a");
    $("#progress-value").html(46);
  })
  $("#continueStep8b").click(function(){
    $(".progress-right .progress-bar").addClass("active8ba");
    $(".progress-left .progress-bar").addClass("active8bb");
    $("#progress-value").html(52);
  })
  $("#continueStep8c").click(function(){
    $(".progress-left .progress-bar").addClass("active8c");
    $("#progress-value").html(58);
  })
  $("#continueStep8d").click(function(){
    $(".progress-left .progress-bar").addClass("active8d");
    $("#progress-value").html(64);
  })
  $("#continueStep8e").click(function(){
    $(".progress-left .progress-bar").addClass("active8e");
    $("#progress-value").html(70);
  })
  $("#continueStep8f").click(function(){
    $(".progress-left .progress-bar").addClass("active8f");
    $("#progress-value").html(76);
  })
  $("#continueStep9").click(function(){
    $(".progress-left .progress-bar").addClass("active9");
    $("#progress-value").html(82);
  })
  $("#continueStep10").click(function(){
    $(".progress-left .progress-bar").addClass("active10");
    $("#progress-value").html(88);
  })
  $("#continueStep11").click(function(){
    $(".progress-left .progress-bar").addClass("active11");
    $("#progress-value").html(94);
  })
  $("#continueStep12").click(function(){
    $(".progress-left .progress-bar").addClass("active12");
    $("#progress-value").html(100);
  })
})