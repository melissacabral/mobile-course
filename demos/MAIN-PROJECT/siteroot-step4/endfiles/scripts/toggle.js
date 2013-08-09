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