$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 1) {
    //clearHeader, not clearheader - caps H
    $("#masthead").addClass("sticky");
  } else {
    $("#masthead").removeClass("sticky");
  }
});
