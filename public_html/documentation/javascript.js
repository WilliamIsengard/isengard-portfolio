<?
$(window).on("scroll touchmove", function () {
  $('#header_nav').toggleClass('tiny', $(document).scrollTop() > 0);
});

/?>
