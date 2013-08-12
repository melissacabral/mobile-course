/**
 * main menu toggle for small screens
 */
$(document).ready(function() {
  $('body').addClass('js');
  var $menu = $('#menu'),
    $menulink = $('.menu-link');
    $iconlink = $('.menu-link i');
  
$menulink.click(function() {
  $menulink.toggleClass('active');
  $menu.toggleClass('active');
  $iconlink.toggleClass('icon-rotate-90'); //nifty font awesome icon rotation
  return false;
});});

/**
 * converts menu to select */

$(document).ready(function() {
    	  /*! http://tinynav.viljamis.com v1.03 by @viljamis */
			(function ($, window, i) {
			  $.fn.tinyNav = function (options) {
			
			    // Default settings
			    var settings = $.extend({
			      'active' : 'selected', // String: Set the "active" class
			      'header' : false // Boolean: Show header instead of the active item
			    }, options);
			
			    return this.each(function () {
			
			      // Used for namespacing
			      i++;
			
			      var $nav = $(this),
			        // Namespacing
			        namespace = 'tinynav',
			        namespace_i = namespace + i,
			        l_namespace_i = '.l_' + namespace_i,
			        $select = $('<select/>').addClass(namespace + ' ' + namespace_i);
			
			      if ($nav.is('ul,ol')) {
			
			        if (settings.header) {
			          $select.append(
			            $('<option/>').text('Navigation')
			          );
			        }
			
			        // Build options
			        var options = '';
			
			        $nav
			          .addClass('l_' + namespace_i)
			          .find('a')
			          .each(function () {
			            options +=
			              '<option value="' + $(this).attr('href') + '">' +
			              $(this).text() +
			              '</option>';
			          });
			
			        // Append options into a select
			        $select.append(options);
			
			        // Select the active item
			        if (!settings.header) {
			          $select
			            .find(':eq(' + $(l_namespace_i + ' li')
			            .index($(l_namespace_i + ' li.' + settings.active)) + ')')
			            .attr('selected', true);
			        }
			
			        // Change window location
			        $select.change(function () {
			          window.location.href = $(this).val();
			        });
			
			        // Inject select
			        $(l_namespace_i).after($select);
			
			      }
			
			    });
			
			  };
			})(jQuery, this, 0);
			

			//make it tiny!
			$(".tour-list").tinyNav();}); //selector is the <ul> element 