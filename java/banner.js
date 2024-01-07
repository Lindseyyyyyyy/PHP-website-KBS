//Houdt bij welke dia wordt weergegeven
let slideIndex = 1;

//
function showSlide(index) {
    const slides = document.querySelectorAll('.slider img');
    const navItems = document.querySelectorAll('.slider-nav a');


    slides.forEach(slide => slide.style.display = 'none');
    navItems.forEach(item => item.classList.remove('active'));


    slides[index - 1].style.display = 'block';
    navItems[index - 1].classList.add('active');
}

function nextSlide() {
    slideIndex++;
    if (slideIndex > document.querySelectorAll('.slider img').length) {
        slideIndex = 1;
    }
    showSlide(slideIndex);
}

function init() {

    showSlide(slideIndex);
    setInterval(nextSlide, 3000);
}

document.addEventListener('DOMContentLoaded', init);

