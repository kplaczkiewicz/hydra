// Throttle function
function throttle(func, delay) {
    let lastCallTime = 0;

    return function (...args) {
        const currentTime = new Date().getTime();

        if (currentTime - lastCallTime >= delay) {
            func.apply(this, args);
            lastCallTime = currentTime;
        }
    };
}

// Variables used across multiple functions
const menuToggle = document.querySelector(".hamburger");
const mobileMenu = document.querySelector(".mobile-menu");
const siteHeader = document.querySelector('.site-header');

// Execute after DOM loaded
document.addEventListener("DOMContentLoaded", function () {
    // Toggle mobile menu
    menuToggle.addEventListener('click', function () {
        this.classList.toggle('active');
        mobileMenu.classList.toggle('grid-rows-[1fr]');
    })

    // Add class to scrolled header
    const throttleHeaderScrollClass = throttle(headerScrollClass, 20);
    window.addEventListener('scroll', throttleHeaderScrollClass);
    window.addEventListener('load', throttleHeaderScrollClass);
});

// Add shadow to header on scroll
function headerScrollClass() {
    const isScroll = window.scrollY > 50;
    siteHeader.classList.toggle('shadow-xl', isScroll);
    siteHeader.classList.toggle('!bg-primary', isScroll);
}