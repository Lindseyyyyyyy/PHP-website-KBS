let slideIndex = 1;

function nextSlide() {
    const slides = document.querySelectorAll('.slider-nav li');
    const currentSlide = document.querySelector('.slider-nav .active');
    const nextSlide = currentSlide.nextElementSibling;

    if (nextSlide) {
        currentSlide.classList.remove('active');
        nextSlide.classList.add('active');
    }
}

function init() {
    const firstSlide = document.querySelector('.slider-nav li:first-child');
    firstSlide.classList.add('active');

    setInterval(nextSlide, 3000);
}

document.addEventListener('DOMContentLoaded', init);
