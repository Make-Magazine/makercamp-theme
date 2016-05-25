/**
 * navigation.js
 *
 * Handles toggling the navigation menu for small screens.
 */


  // MOBILE HAMBURGER BAR ANIMATION
  $(document).ready(function () {
    $(".navbar-toggle").on("click", function () {
    	$(this).toggleClass("active-bar");
    });
  });
