let slideIndex = 1;

function showSlide(index) {
    const slides = document.querySelectorAll('.slider img');
    const navItems = document.querySelectorAll('.slider-nav a');

    // Verberg alle dia's en verwijder 'active' klasse van navigatielinks
    slides.forEach(slide => slide.style.display = 'none');
    navItems.forEach(item => item.classList.remove('active'));

    // Toon het gewenste dia en markeer de bijbehorende navigatielink
    slides[index - 1].style.display = 'block';
    navItems[index - 1].classList.add('active');
}

function nextSlide() {
    slideIndex++;
    if (slideIndex > document.querySelectorAll('.slider img').length) {
        slideIndex = 1; // Terug naar het begin als het einde is bereikt
    }
    showSlide(slideIndex);
}

function init() {
    // Toon het eerste dia bij het initialiseren
    showSlide(slideIndex);

    // Schakel automatisch naar het volgende dia elke 2000 milliseconden (2 seconden)
    setInterval(nextSlide, 3000);
}

document.addEventListener('DOMContentLoaded', init);

