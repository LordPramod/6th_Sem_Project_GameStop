
let index = 0;

function autoScrollCarousel() {
const carouselInner = document.querySelector('.carousel-inner');
const items = document.querySelectorAll('.img-item');


index++;

if (index >= items.length) {
    index = 0;
}

// Calculate the new translateX value for the carousel
const translateX = -index * 100 / items.length;

// Apply the transform to shift the carousel
carouselInner.style.transform = `translateX(${translateX}%)`;
}

// Set the interval to scroll every 3 seconds (3000 milliseconds)
setInterval(autoScrollCarousel, 3000);

