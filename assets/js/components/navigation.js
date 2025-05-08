/**
 * Navigation Component
 * 
 * This file contains the navigation functionality
 */

// Create a window-level function that can be called from main.js
window.initNavigation = function($) {
    // Mobile menu toggle
    $('.menu-toggle').on('click', function() {
      $(this).toggleClass('active');
      $('.nav-menu').toggleClass('active');
    });
    
    // Toggle submenu on mobile
    if ($(window).width() <= 1024) {
      $('.menu-item-has-children > a').on('click', function(e) {
        if ($(this).next('.sub-menu').length) {
          e.preventDefault();
          $(this).next('.sub-menu').toggleClass('active');
        }
      });
    }
    
    // Reset menu on window resize
    $(window).on('resize', function() {
      if ($(window).width() > 1024) {
        $('.nav-menu').removeClass('active');
        $('.sub-menu').removeClass('active');
        $('.menu-toggle').removeClass('active');
      }
    });
  };