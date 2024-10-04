/* Nadeeja - course slider js */

const slides = document.querySelectorAll(".slides img");
let slideIndex = 0;
let intervalId = null;

document.addEventListener("DOMContentLoaded", initializeSlider);

function initializeSlider() {
    if (slides.length > 0) {
        slides[slideIndex].classList.add("displaySlide");
        intervalId = setInterval(nextSlide, 5000); // Auto-slide every 5 seconds
    }
}

function showSlide(index) {
    slides.forEach(slide => {
        slide.classList.remove("displaySlide");
    });

    if (index >= slides.length) {
        slideIndex = 0; // Reset to the first slide if we reach the end
    } else if (index < 0) {
        slideIndex = slides.length - 1; // Go to the last slide if we go backward past the first slide
    }

    slides[slideIndex].classList.add("displaySlide");
}

function prevSlide() {
    slideIndex--;
    showSlide(slideIndex);
}

function nextSlide() {
    slideIndex++;
    showSlide(slideIndex);
}

