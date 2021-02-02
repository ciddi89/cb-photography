/* Sticky Header */
( function( $ ) {
$(window).scroll(function() {
  var header = $(document).scrollTop();
  var headerHeight = $('0.1px').outerHeight();
  if (header > headerHeight) {
    $(".site-header").addClass("sticky-header");
  } else {
    $(".site-header").removeClass("sticky-header");
  }
});
} ( jQuery ) );
