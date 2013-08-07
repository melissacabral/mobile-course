/**
 * main menu toggle for small screens
 */
 $(document).ready(function() {
 	$('body').addClass('js');
 	var $menu = $('#menu'),
 	$menulink = $('.nav-toggle');
 	

 	$menulink.click(function() {
 		$menulink.toggleClass('active');
 		$menu.toggleClass('active');
  		return false;
	});
});

