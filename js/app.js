// Foundation JavaScript
// Documentation can be found at: http://foundation.zurb.com/docs
(function($) {
$(document).ready(function() {

  autosize($('textarea'));

$(window).scroll(function() {    

  var scroll = $(window).scrollTop();
  var height = $(document).height() - 1600;
  var windowheight = $(window).height() - 150;

  if (scroll >= windowheight && scroll <= height) {
      $(".single-bar").addClass('visible');
      } else {
        $(".single-bar").removeClass('visible');
      }
    var header = $('.single-header');
    var headercontents = $('.header-contents');
    var range = 300;

    var offset = header.offset().top;
    var height = header.outerHeight();
    offset = offset + height / 2;

    var calc = 1 - (scroll / range);
    var calcscale = 1 - ((1 - calc)/6);
    var calcmargin = -1*((scroll / range) * 50);
    console.log(calcmargin);

    headercontents.css({ 'opacity': calc,
    '-webkit-transform': 'scale(' + calcscale + ')',
    '-moz-transform': 'scale(' + calcscale + ')',
    '-o-transform': 'scale(' + calcscale + ')'
     });
    $('.prevnext.prev').css({
      'left': calcmargin
    })
    $('.prevnext.next').css({
      'right': calcmargin
    })
    $('.home-menu').css({
      'top': calcmargin
    })


  
    if ( calc > '1' ) {
      headercontents.css({ 'opacity': 1 });
    } else if ( calc < '0' ) {
      headercontents.css({ 'opacity': 0 });
    }

});


});
})(jQuery);