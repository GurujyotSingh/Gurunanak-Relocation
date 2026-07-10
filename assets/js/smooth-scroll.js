/**
 * Smooth Scroll Engine (Lerp)
 * Hijacks native scroll to create a buttery smooth translation.
 */

class SmoothScroll {
    constructor() {
        this.container = document.querySelector('#scroll-container');
        if (!this.container) return;


        document.documentElement.classList.add('has-smooth-scroll');

        this.scroll = {
            current: 0,
            target: 0,
            ease: 0.08 // Interpolation speed (lower = smoother/slower)
        };

        this.windowHeight = window.innerHeight;
        this.containerHeight = this.container.getBoundingClientRect().height;
        this.maxScroll = this.containerHeight - this.windowHeight;

        this.init();
    }

    init() {
        document.body.style.height = `${this.containerHeight}px`;

        // Update height automatically if DOM changes (images load, etc)
        const resizeObserver = new ResizeObserver(() => {
            this.windowHeight = window.innerHeight;
            this.containerHeight = this.container.getBoundingClientRect().height;
            this.maxScroll = this.containerHeight - this.windowHeight;
            document.body.style.height = `${this.containerHeight}px`;
        });
        resizeObserver.observe(this.container);

        window.addEventListener('resize', () => {
            this.windowHeight = window.innerHeight;
            this.containerHeight = this.container.getBoundingClientRect().height;
            this.maxScroll = this.containerHeight - this.windowHeight;
            document.body.style.height = `${this.containerHeight}px`;
        });

        // Listen to native scroll to update target
        window.addEventListener('scroll', () => {
            this.scroll.target = window.scrollY;
        }, { passive: true });

        // Start render loop
        this.render();
    }

    lerp(start, end, factor) {
        return start + (end - start) * factor;
    }

    render() {
        // Interpolate current scroll position towards target
        this.scroll.current = this.lerp(this.scroll.current, this.scroll.target, this.scroll.ease);

        // Round to 2 decimals for performance
        this.scroll.current = parseFloat(this.scroll.current.toFixed(2));

        // Apply translation
        this.container.style.transform = `translate3d(0, -${this.scroll.current}px, 0)`;

        // Dispatch a custom event with current scroll value for parallax/animations
        window.dispatchEvent(new CustomEvent('smoothscroll', { 
            detail: { y: this.scroll.current, maxY: this.maxScroll } 
        }));

        requestAnimationFrame(() => this.render());
    }
}

// Initialize after all assets (images, fonts) are fully loaded
window.addEventListener('load', () => {
    new SmoothScroll();
});
