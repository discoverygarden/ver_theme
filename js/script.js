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


// Place your code here.

$(window).load(function() {
	$("#edit-islandora-simple-search-query").val("Search this repository");

	  $("#edit-islandora-simple-search-query").focus(function() {
      $(this).val("");
	  });
    if ($(".views_slideshow_cycle_main").length > 0) {
	 var row = get_active_carousel_item();
	 $('.views-slideshow-cycle-main-frame').height(row.height());
	  $( window ).resize(function() {
		  var row = get_active_carousel_item();
		  $('.views-slideshow-cycle-main-frame').height(row.height());
		  if ($('#admin-menu').length > 0) {
			  var bar_top = $( window ).height() - $('#admin-menu').height();
			  $('#page').attr('top', bar_top + 'px');
			  
		  }
	  });
   }
   if ($('#admin-menu').length > 0) {
	  var bar_top = $('#admin-menu').height();
	  console.log($('#admin-menu').height());
	  console.log(bar_top);
	  $('#page').attr('top', bar_top + 'px');
	  
   }
  
  function get_active_carousel_item() {
    var row = $('.views-slideshow-cycle-main-frame-row').filter(
      function(){
        return $(this).css('opacity') == '1';
      });
    return row;
  }
});

})(jQuery, Drupal, this, this.document);