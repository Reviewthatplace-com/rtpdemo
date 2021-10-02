
    
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
      $(".spq-1").css({ display: "block" }),
      $(".spq-next").click(function () {
        $(".spq-1").css({ display: "none" }),
          $(".spq-2").css({ display: "block" });
      }),
      $(".spq-back").click(function () {
        $(".spq-2").css({ display: "none" }),
          $(".spq-1").css({ display: "block" });
      })
  })