// Main JavaScript file for Consultancy Theme

(function($) {
    'use strict';
  
    // Document Ready
    $(document).ready(function() {
      // Initialize functions
      initMobileMenu();
      initStickyHeader();
      initFaqAccordion();
      initAnimations();
      initSmoothScroll();
    });
  
    /**
     * Mobile Menu Functionality
     */
    function initMobileMenu() {
      const $menuToggle = $('.menu-toggle');
      const $navMenu = $('.nav-menu');
      const $mobileMenuOverlay = $('.mobile-menu-overlay');
    
      // Toggle main menu
      $menuToggle.on('click', function() {
        $(this).toggleClass('active');
        $navMenu.toggleClass('active');
        $('body').toggleClass('menu-open');
        $mobileMenuOverlay.toggleClass('active');
      });
    
      // Close menu when clicking outside
      $(document).on('click', function(e) {
        if (
          !$navMenu.is(e.target) && $navMenu.has(e.target).length === 0 &&
          !$menuToggle.is(e.target) && $menuToggle.has(e.target).length === 0
        ) {
          $navMenu.removeClass('active');
          $menuToggle.removeClass('active');
          $('body').removeClass('menu-open');
          $mobileMenuOverlay.removeClass('active');
        }
      });
    
      // Submenu toggle on mobile
      $(document).on('click', '.menu-item-has-children > a', function(e) {
        if (window.innerWidth <= 1024) {
          const $submenu = $(this).next('.sub-menu');
          if ($submenu.length) {
            e.preventDefault();
            $(this).parent().toggleClass('submenu-open');
            $submenu.stop(true, true).slideToggle(200);
          }
        }
      });
    
      // Reset menu on resize
      $(window).on('resize', function() {
        if (window.innerWidth > 1024) {
          $navMenu.removeClass('active');
          $menuToggle.removeClass('active');
          $('body').removeClass('menu-open');
          $('.menu-item-has-children').removeClass('submenu-open');
          $('.sub-menu').removeAttr('style');
        }
      });
    }
    
  
    /**
     * Sticky Header
     */
    function initStickyHeader() {
      const header = $('#masthead');
      const headerHeight = header.outerHeight();
      let scrollPosition = 0;
      
      $(window).on('scroll', function() {
        const currentScroll = $(this).scrollTop();
        
        if (currentScroll > headerHeight) {
          header.addClass('sticky-header');
          $('body').css('padding-top', headerHeight + 'px');
          
          // Hide/show header on scroll direction
          if (currentScroll > scrollPosition) {
            // Scrolling down
            header.addClass('header-hidden');
          } else {
            // Scrolling up
            header.removeClass('header-hidden');
          }
        } else {
          header.removeClass('sticky-header');
          $('body').css('padding-top', '0');
        }
        
        scrollPosition = currentScroll;
      });
    }
  
    /**
     * FAQ Accordion Functionality
     */
    function initFaqAccordion() {
      $('.faq-question').on('click', function() {
        const parent = $(this).parent();
        const answer = $(this).next('.faq-answer');
        
        // Close all other FAQ items
        $('.faq-item').not(parent).removeClass('active');
        $('.faq-answer').not(answer).slideUp(300);
        
        // Toggle current FAQ item
        parent.toggleClass('active');
        answer.slideToggle(300);
      });
    }
  
    /**
     * Scroll Animations
     */
    function initAnimations() {
      const animatedElements = $('.animate-on-scroll');
      
      // Check if elements are in viewport
      function checkElementsInViewport() {
        animatedElements.each(function() {
          const el = $(this);
          const elementTop = el.offset().top;
          const elementBottom = elementTop + el.outerHeight();
          const viewportTop = $(window).scrollTop();
          const viewportBottom = viewportTop + $(window).height();
          
          // If element is in viewport
          if (elementBottom > viewportTop && elementTop < viewportBottom) {
            el.addClass('animated');
          }
        });
      }
      
      // Run on page load
      checkElementsInViewport();
      
      // Run on scroll
      $(window).on('scroll', function() {
        checkElementsInViewport();
      });
    }
  
    /**
     * Smooth Scroll for Anchor Links
     */
    function initSmoothScroll() {
      $('a[href*="#"]:not([href="#"])').on('click', function() {
        if (location.pathname.replace(/^\//, '') === this.pathname.replace(/^\//, '') && 
            location.hostname === this.hostname) {
          
          let target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
          
          if (target.length) {
            $('html, body').animate({
              scrollTop: target.offset().top - 100 // Adjust for header height
            }, 800);
            return false;
          }
        }
      });
    }
  
    /**
     * Contact Form Validation
     */
    $('.consultation-form').on('submit', function(e) {
      const form = $(this);
      const nameInput = form.find('input[name="name"]');
      const emailInput = form.find('input[name="email"]');
      const messageInput = form.find('textarea[name="message"]');
      let isValid = true;
      
      // Simple validation
      if (nameInput.val().trim() === '') {
        nameInput.addClass('invalid');
        isValid = false;
      } else {
        nameInput.removeClass('invalid');
      }
      
      if (emailInput.val().trim() === '' || !isValidEmail(emailInput.val())) {
        emailInput.addClass('invalid');
        isValid = false;
      } else {
        emailInput.removeClass('invalid');
      }
      
      if (messageInput.val().trim() === '') {
        messageInput.addClass('invalid');
        isValid = false;
      } else {
        messageInput.removeClass('invalid');
      }
      
      if (!isValid) {
        e.preventDefault();
      }
    });
    
    // Email validation helper
    function isValidEmail(email) {
      const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
      return regex.test(email);
    }
  
  })(jQuery);