
    
  $(document).ready(function () {
    $(".rtp_flow").css({ display: "none" }),
      $(".rtp_somebody").click(function () {
        $(".rtp_flow").css({ display: "block" }),
          $(".somebody_flow").css({ display: "none" });
      }),
      $(".arfstep1").css({ display: "block" }),
      $(".arfsteponenext").click(function () {
        $(".arfstep1").css({ display: "none" }),
          $(".arfstep2").css({ display: "block" });
      }),
      $(".arfsteptwoback").click(function () {
        $(".arfstep2").css({ display: "none" }),
          $(".arfstep1").css({ display: "block" });
      }),
      $(".arfsteptwonext").click(function () {
        $(".arfstep2").css({ display: "none" }),
          $(".arfstep3").css({ display: "block" });
      }),
      $(".arfstepthreeback").click(function () {
        $(".arfstep3").css({ display: "none" }),
          $(".arfstep2").css({ display: "block" });
      }),
      $("#rtp_next").click(function () {
        $(".arfstep3").css({ display: "none" }),
          $(".arfstep4").css({ display: "block" });
      }),
      $(".arfstepfourback").click(function () {
        $(".arfstep4").css({ display: "none" }),
          $(".alt_step-4").css({ display: "none" }),
          $(".arfstep3").css({ display: "block" });
      }),
      $(".arfstepfournext").click(function () {
        $(".arfstep4").css({ display: "none" }),
          $(".arfstep5").css({ display: "block" });
      }),
      $(".arfstepfiveback").click(function () {
        $(".arfstep5").css({ display: "none" }),
          $(".arfstep4").css({ display: "block" });
      }),
      $(".arfstepfivenext").click(function () {
        $(".arfstep5").css({ display: "none" }),
          $(".arfstep6").css({ display: "block" });
      }),
      $(".arfstepsixback").click(function () {
        $(".arfstep6").css({ display: "none" }),
          $(".arfstep5").css({ display: "block" });
      }),
      $(".arfstepsixnext").click(function () {
        $(".arfstep6").css({ display: "none" }),
          $(".arfstep7").css({ display: "block" });
      }),
      $(".arfstepsevenback").click(function () {
        $(".arfstep7").css({ display: "none" }),
          $(".arfstep6").css({ display: "block" });
      }),
      $(".arfstepsevennext").click(function () {
        $(".arfstep7").css({ display: "none" }),
          $(".arfstep8").css({ display: "block" });
      }),
      $(".arfstepeightback").click(function () {
        $(".arfstep8").css({ display: "none" }),
          $(".arfstep7").css({ display: "block" });
      }),
      $(".arfstepeightnext").click(function () {
        $(".arfstep8").css({ display: "none" }),
          $(".arfstep9").css({ display: "block" });
      }),
      $(".arfstepnineback").click(function () {
        $(".arfstep9").css({ display: "none" }),
          $(".arfstep8").css({ display: "block" });
      }),
      $(".arfstepninenext").click(function () {
        $(".arfstep9").css({ display: "none" }),
          $(".arfstep10").css({ display: "block" });
      }),
      $(".arfsteptenback").click(function () {
        $(".arfstep10").css({ display: "none" }),
          $(".arfstep9").css({ display: "block" });
      }),
      $(".arfsteptennext").click(function () {
        $(".arfstep10").css({ display: "none" }),
          $(".arfstep11").css({ display: "block" });
      }),
      $(".arfstepelevenback").click(function () {
        $(".arfstep11").css({ display: "none" }),
          $(".arfstep10").css({ display: "block" });
      }),
      $(".arfstepelevennext").click(function () {
        $(".arfstep11").css({ display: "none" }),
          $(".arfstep12").css({ display: "block" });
      }),
      $(".arfsteptwelveback").click(function () {
        $(".arfstep12").css({ display: "none" }),
          $(".arfstep11").css({ display: "block" });
      }),
      $(".arfsteptwelvenext").click(function () {
        $(".arfstep12").css({ display: "none" }),
          $(".arfstep13").css({ display: "block" });
      }),
      $(".arfstepthirteenenext").click(function () {
        $(".arfstep13").css({ display: "none" }),
          $(".arfstep14").css({ display: "block" });
      }),
      $(".somebody_flow").css({ display: "none" }),
      $(".somebody_rtp").click(function () {
        $(".somebody_flow").css({ display: "block" }),
          $(".rtp_flow").css({ display: "none" });
      }),
      $("#somebody_next").click(function () {
        $(".arfstep3").css({ display: "none" }),
          $(".alt_step-4").css({ display: "block" });
      }),
      $(".alt_step-4next").click(function () {
        $(".alt_step-4").css({ display: "none" }),
          $(".alt_step-5").css({ display: "block" });
      }),
      $(".alt_step-5back").click(function () {
        $(".alt_step-5").css({ display: "none" }),
          $(".alt_step-4").css({ display: "block" });
      }),
      $(".alt_step-5next").click(function () {
        $(".alt_step-5").css({ display: "none" }),
          $(".alt_step-6").css({ display: "block" });
      }),
      $(".alt_step-6back").click(function () {
        $(".alt_step-6").css({ display: "none" }),
          $(".alt_step-5").css({ display: "block" });
      }),
      $(".alt_step-6next").click(function () {
        $(".alt_step-6").css({ display: "none" }),
          $(".alt_step-7").css({ display: "block" });
      }),
      $(".alt_step-7back").click(function () {
        $(".alt_step-7").css({ display: "none" }),
          $(".alt_step-6").css({ display: "block" });
      }),
      $(".alt_step-7next").click(function () {
        $(".alt_step-7").css({ display: "none" }),
          $(".alt_step-8").css({ display: "block" });
      }),
      $(".alt_step-8back").click(function () {
        $(".alt_step-8").css({ display: "none" }),
          $(".alt_step-7").css({ display: "block" });
      }),
      $(".alt_step-8next").click(function () {
        $(".alt_step-8").css({ display: "none" }),
          $(".alt_step-9").css({ display: "block" });
      }),
      $(".alt_step-9back").click(function () {
        $(".alt_step-9").css({ display: "none" }),
          $(".alt_step-8").css({ display: "block" });
      }),
      $(".alt_step-9next").click(function () {
        $(".alt_step-9").css({ display: "none" }),
          $(".alt_step-10").css({ display: "block" });
      }),
      $(".alt_step-10back").click(function () {
        $(".alt_step-10").css({ display: "none" }),
          $(".alt_step-9").css({ display: "block" });
      }),
      $(".alt_step-10next").click(function () {
        $(".alt_step-10").css({ display: "none" }),
          $(".arfstep11").css({ display: "block" });
      });
  })