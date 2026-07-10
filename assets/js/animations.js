/**
 * Elegant Enterprise Animation Engine
 * Handles Parallax and Smooth Reveals
 */

document.addEventListener('DOMContentLoaded', () => {

    // 1. Text Splitting (for elegant staggered fade-ins)
    const initTextSplit = () => {
        const splitElements = document.querySelectorAll('.js-split-text');
        
        splitElements.forEach(el => {
            const text = el.innerText;
            const words = text.split(' ');
            el.innerHTML = ''; // Clear existing
            
            words.forEach((word, wordIndex) => {
                const wordSpan = document.createElement('span');
                wordSpan.classList.add('split-word');
                wordSpan.style.display = 'inline-block';
                wordSpan.style.marginRight = '0.25em'; // Space between words
                
                const innerSpan = document.createElement('span');
                innerSpan.innerText = word;
                innerSpan.style.display = 'inline-block';
                // Elegant subtle translate and blur
                innerSpan.style.transform = 'translateY(15px)';
                innerSpan.style.opacity = '0';
                innerSpan.style.filter = 'blur(4px)';
                innerSpan.style.transition = `transform 0.8s cubic-bezier(0.16, 1, 0.3, 1) ${wordIndex * 0.03}s, opacity 0.8s ease ${wordIndex * 0.03}s, filter 0.8s ease ${wordIndex * 0.03}s`;
                
                wordSpan.appendChild(innerSpan);
                el.appendChild(wordSpan);
            });
        });
    };

    // 4. Scroll Triggers (Parallax & Reveals linked to smoothscroll event)
    const initScrollTriggers = () => {
        const parallaxElements = document.querySelectorAll('.js-parallax');
        const revealElements = document.querySelectorAll('.js-reveal');
        const splitTextElements = document.querySelectorAll('.js-split-text');
        
        const windowHeight = window.innerHeight;

        const handleScroll = (e) => {
            const scrollY = e.type === 'smoothscroll' ? e.detail.y : window.scrollY;

            // Parallax
            parallaxElements.forEach(el => {
                const speed = parseFloat(el.getAttribute('data-speed')) || 0.2;
                const rect = el.getBoundingClientRect(); // Note: bounded to container, not viewport due to transform
                
                // Simple parallax calculation based on global scroll
                const yPos = -(scrollY * speed);
                el.style.transform = `translate3d(0, ${yPos}px, 0)`;
            });

            // Standard Reveals (Calculate via getBoundingClientRect which is affected by the wrapper's transform)
            revealElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < windowHeight * 0.85 && !el.classList.contains('is-visible')) {
                    el.classList.add('is-visible');
                    el.style.transform = 'translateY(0) scale(1)';
                    el.style.opacity = '1';
                    el.style.filter = 'blur(0px)';
                }
            });

            // Split Text Reveals
            splitTextElements.forEach(el => {
                const rect = el.getBoundingClientRect();
                if (rect.top < windowHeight * 0.85 && !el.classList.contains('is-visible')) {
                    el.classList.add('is-visible');
                    const spans = el.querySelectorAll('.split-word > span');
                    spans.forEach(span => {
                        span.style.transform = 'translateY(0)';
                        span.style.opacity = '1';
                        span.style.filter = 'blur(0px)';
                    });
                }
            });

            // Timeline Animation
            const timelineContainer = document.getElementById('timeline-container');
            const timelineProgress = document.getElementById('timeline-progress');
            const timelineItems = document.querySelectorAll('.js-timeline-item');
            
            if (timelineContainer && timelineProgress) {
                const rect = timelineContainer.getBoundingClientRect();
                // We want the line to start drawing when the top of the container reaches the middle of the screen
                const startPoint = windowHeight * 0.5;
                
                if (rect.top < startPoint) {
                    // Calculate how far we've scrolled past the start point
                    const distanceScrolled = startPoint - rect.top;
                    // Calculate percentage of the total height
                    let percentage = (distanceScrolled / rect.height) * 100;
                    
                    // Clamp between 0 and 100
                    percentage = Math.max(0, Math.min(100, percentage));
                    timelineProgress.style.height = `${percentage}%`;
                } else {
                    timelineProgress.style.height = '0%';
                }

                // Activate dots when the progress line reaches them
                timelineItems.forEach(item => {
                    const itemRect = item.getBoundingClientRect();
                    // The dot is near the top of the item. Let's say if the item top is above the middle of screen + some buffer
                    if (itemRect.top < windowHeight * 0.5) {
                        item.classList.add('is-active');
                    } else {
                        item.classList.remove('is-active');
                    }
                });
            }
        };

        window.addEventListener('smoothscroll', handleScroll);
        window.addEventListener('scroll', (e) => {
            if (!document.documentElement.classList.contains('has-smooth-scroll')) {
                handleScroll(e);
            }
        });
    };

    // Initialize all
    initTextSplit();
    initScrollTriggers();

});
