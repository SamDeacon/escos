/* ========================================================================
 * DOM-based Routing
 * Based on http://goo.gl/EUTi53 by Paul Irish
 *
 * Only fires on body classes that match. If a body class contains a dash,
 * replace the dash with an underscore when adding it to the object below.
 *
 * .noConflict()
 * The routing is enclosed within an anonymous function so that you can
 * always reference jQuery with $, even when in .noConflict() mode.
 * ======================================================================== */

(function($) {

  $(document).ready(function() {
    if($("#slick-fader").length !== 0) {
      $('#slick-fader').slick({
        dots: false,
        arrows: false,
        infinite: true,
        speed: 500,
        fade: true,
        autoplay: true,
        autoplaySpeed: 3000,
        cssEase: 'linear'
      });
    }
    $('#navtoggle').click(function(){

      if ($('.mobile-bar').hasClass("extend-bar")) {
        $($('.mobile-bar li').get().reverse()).each(function(i) {
          var $li = $(this);
          setTimeout(function() {
            $li.removeClass('imVisible');
          }, i*120); // delay 100 ms
        });
        setTimeout(function() {
          $('.mobile-bar').removeClass("extend-bar");
        }, 500);

      } else {
          $('.mobile-bar').addClass("extend-bar");
          $('.mobile-bar li').each(function(i) {
            var $li = $(this);
            setTimeout(function() {
              $li.addClass('imVisible');
            }, i*120); // delay 100 ms
          });
      }

    });
  });

})(jQuery); // Fully reference jQuery after this point.
