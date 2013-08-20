//force the back button to appear on all pages

// http://jquerymobile.com/demos/1.0.1/docs/api/globalconfig.html
$(document).bind("mobileinit", function(){
	$.extend( $.mobile , {
		defaultPageTransition:"slide",
		defaultDialogTransition:"slide"

	});

});