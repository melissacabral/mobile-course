//force the back button to appear on all pages
$(document).bind("mobileinit", function(){
  $.mobile.page.prototype.options.addBackBtn = true;
});