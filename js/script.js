/**
 * @file
 * A JavaScript file for the theme.
 *
 * In order for this JavaScript to be loaded on pages, see the instructions in
 * the README.txt next to this file.
 */

// JavaScript should be made compatible with libraries other than jQuery by
// wrapping it with an "anonymous closure". See:
// - http://drupal.org/node/1446420
// - http://www.adequatelygood.com/2010/3/JavaScript-Module-Pattern-In-Depth
(function ($, Drupal, window, document, undefined) {

$(window).load(function() {

  var $window = $(window);
  var flexslider = $('.flexslider').data('flexslider');

  // store the slider in a local variable
  var $window = $(window);

  function getGridSize() {
    return (window.innerWidth < 600) ? 2 :
      (window.innerWidth < 900) ? 3 : 4;
  }

  function update_header_position() {
    if ($('#admin-menu').length > 0) {
      $('#header').css('margin-top', $('#admin-menu').height());
    }
  }

  // check grid size on resize event
  $window.resize(function() {
    if (flexslider) {
      var gridSize = getGridSize();
      flexslider.vars.minItems = gridSize;
      flexslider.vars.maxItems = gridSize;
    }
    update_header_position();
  });

  $(window).trigger('resize');
});
})(jQuery, Drupal, this, this.document);
