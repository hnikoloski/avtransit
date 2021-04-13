$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 1) {
    //clearHeader, not clearheader - caps H
    $("#masthead").addClass("sticky");
  } else {
    $("#masthead").removeClass("sticky");
  }
});
$(document).ready(function () {
  // Mobile toggler
  $("#burger-icon").click(function (e) {
    e.preventDefault();
    $(this).toggleClass("open");
    $(".menu-mainmenu-container").slideToggle();
  });
});
