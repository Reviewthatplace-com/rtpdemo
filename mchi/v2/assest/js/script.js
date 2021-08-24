var $zoho = $zoho || {};
$zoho.salesiq = $zoho.salesiq || {
  widgetcode:
    "fc7419b0bac87beaf78d08583abd967e32e2d0769bce422fef99d3d69b81fcbb",
  values: {},
  ready: function () {},
};
var d = document;
s = d.createElement("script");
s.type = "text/javascript";
s.id = "zsiqscript";
s.defer = true;
s.src = "https://salesiq.zoho.com/widget";
t = d.getElementsByTagName("script")[0];
t.parentNode.insertBefore(s, t);
d.write("<div id='zsiqwidget'></div>");


$(window).on("load", function () {
  $("#initalPopup").modal("show");
});

// Tooltips Initialization
$(function () {
  $('[data-toggle="tooltip"]').tooltip();
});

$("[title]").tooltip({
  placement: "bottom",
  delay: { show: 500, hide: 100 },
  offset: "0 10",
  boundary: "window",
  template:
    '<div class="tooltip" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>',
});

