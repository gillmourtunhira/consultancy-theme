// sloth.js
(function($) {
    $.fn.sloth = function(options) {
        // Default settings
        const defaults = {
            dots: false,
            arrows: false,
            autoplay: false,
            autoplaySpeed: 5000,
            fade: false
        };
        
        // Merge user options with defaults
        const settings = $.extend({}, defaults, options);
        
        // Initialize slider on each matched element
        return this.each(function() {
            const $slider = $(this);
            const $slides = $slider.find('.testimonial');
            let currentIndex = 0;
            let isAnimating = false;
            let autoplayInterval;
            
            // Generate unique IDs for arrows if they don't exist
            if (settings.arrows && !$slider.find('.sloth-arrow-left').length) {
                $slider.append(`
                    <div class="sloth-arrows">
                        <button class="sloth-arrow-left">←</button>
                        <button class="sloth-arrow-right">→</button>
                    </div>
                `);
            }
            
            // Initialize dots navigation if enabled
            if (settings.dots) {
                const $dots = $('<div class="sloth-dots"></div>');
                $slides.each(function(index) {
                    $dots.append(`<button class="sloth-dot" data-index="${index}"></button>`);
                });
                $slider.append($dots);
            }
            
            // Initialize the carousel
            function initializeCarousel() {
                $slides.removeClass('active prev next');
                
                $slides.each(function(index) {
                    if (index === currentIndex) {
                        $(this).addClass('active');
                    } else if (index < currentIndex) {
                        $(this).addClass('prev');
                    } else {
                        $(this).addClass('next');
                    }
                });
                
                updateContainerHeight();
                
                // Update dots if enabled
                if (settings.dots) {
                    $slider.find('.sloth-dot').removeClass('active')
                        .eq(currentIndex).addClass('active');
                }
            }
            
            // Update container height
            function updateContainerHeight() {
                const activeHeight = $slides.filter('.active').outerHeight();
                $slider.css('min-height', activeHeight + 'px');
            }
            
            // Go to specific slide
            function goToSlide(index) {
                if (isAnimating || index === currentIndex) return;
                isAnimating = true;
                
                const direction = index > currentIndex ? 'next' : 'prev';
                const prevIndex = currentIndex;
                currentIndex = index;
                
                $slides.eq(prevIndex).removeClass('active')
                    .addClass(direction === 'next' ? 'prev' : 'next');
                
                $slides.eq(currentIndex).removeClass(direction === 'next' ? 'next' : 'prev')
                    .addClass('active');
                
                setTimeout(function() {
                    updateContainerHeight();
                    isAnimating = false;
                    
                    if (settings.dots) {
                        $slider.find('.sloth-dot').removeClass('active')
                            .eq(currentIndex).addClass('active');
                    }
                }, 500);
            }
            
            // Previous slide
            function goToPrevious() {
                const newIndex = (currentIndex - 1 + $slides.length) % $slides.length;
                goToSlide(newIndex);
            }
            
            // Next slide
            function goToNext() {
                const newIndex = (currentIndex + 1) % $slides.length;
                goToSlide(newIndex);
            }
            
            // Start autoplay
            function startAutoplay() {
                if (settings.autoplay) {
                    autoplayInterval = setInterval(goToNext, settings.autoplaySpeed);
                }
            }
            
            // Stop autoplay
            function stopAutoplay() {
                if (autoplayInterval) {
                    clearInterval(autoplayInterval);
                }
            }
            
            // Event listeners
            if (settings.arrows) {
                $slider.on('click', '.sloth-arrow-left', goToPrevious);
                $slider.on('click', '.sloth-arrow-right', goToNext);
            }
            
            if (settings.dots) {
                $slider.on('click', '.sloth-dot', function() {
                    goToSlide(parseInt($(this).data('index')));
                });
            }
            
            if (settings.autoplay) {
                $slider.hover(stopAutoplay, startAutoplay);
                startAutoplay();
            }
            
            // Handle window resize
            $(window).on('resize', updateContainerHeight);
            
            // Initialize
            initializeCarousel();
            
            // Update height after images load
            $(window).on('load', updateContainerHeight);
        });
    };
})(jQuery);