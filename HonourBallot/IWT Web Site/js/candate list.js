
let currentSlide = 0;
const slides = document.getElementsByClassName('slide');

function showSlide(n) {
    if (n >= slides.length) {
        currentSlide = 0;
    } else if (n < 0) {
        currentSlide = slides.length - 1;
    }

    for (let i = 0; i < slides.length; i++) {
        slides[i].style.display = 'none';
    }

    slides[currentSlide].style.display = 'flex';
}

showSlide(currentSlide);

setInterval(function() {
    currentSlide++;
    showSlide(currentSlide);
}, 5000);
