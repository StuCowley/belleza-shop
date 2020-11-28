/**
 * ORISUE UI
 * 
 * Contains all of the scripts for Orisue UI components
 * 
 * Version: 1.0.0
 */
jQuery(document).ready(function($) {

  /**
   * HEADER MENU TOGGLE
   * 
   * Toggles the header menu when the header menu toggle button is tapped. This 
   * is done by adding or removing the .sc-header-menu-open class.
   * 
   * Version: 1.0.0 
   */
  let menuToggleAnimationDuration = 200;
  
  $('.sc-header-menu-toggle').on('click', function() {
    if ($('.sc-header-menu').css('display') === 'none') {
      $('.sc-header-menu').slideDown(menuToggleAnimationDuration);
    } else {
      $('.sc-header-menu').slideUp(menuToggleAnimationDuration);
    }
  });
});
