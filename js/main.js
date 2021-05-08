$(window).scroll(function () {
  var scroll = $(window).scrollTop();

  if (scroll >= 1) {
    //clearHeader, not clearheader - caps H
    $("#masthead").addClass("sticky");
  } else {
    $("#masthead").removeClass("sticky");
  }
  if (scroll > 300) {
    $("#to-top-btn").slideDown();
  } else {
    $("#to-top-btn").slideUp();
  }
});
$(document).ready(function () {
  $(".loader-wrapper").slideUp();
  // Mobile toggler
  $("#burger-icon").on("click", function (e) {
    e.preventDefault();
    $(this).toggleClass("open");
    $("#mobile-menu").toggleClass("opened-mob-menu");
    $("body").toggleClass("opened-mob-menu overflow-hidden");
    $(".backdrop").fadeIn(800);
  });
  $("#mobile-menu .close-wrapper a").on("click", function (e) {
    e.preventDefault();
    $("#burger-icon").toggleClass("open");
    $("#mobile-menu").toggleClass("opened-mob-menu");
    $("body").toggleClass("opened-mob-menu overflow-hidden");
    $(".backdrop").fadeOut(800);
  });
});
