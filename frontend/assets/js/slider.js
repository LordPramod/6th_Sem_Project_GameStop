
// Get the necessary elements
const sliderContainer = document.querySelector('.slider-container');
const prevBtn = document.querySelector('.slider-prev');
const nextBtn = document.querySelector('.slider-next');

// Set initial slide index
let slideIndex = 0;

// Function to display the current slide
function showSlide() {
  const slides = document.querySelectorAll('.slider-container img');
  if (slideIndex < 0) slideIndex = slides.length - 1;
  if (slideIndex >= slides.length) slideIndex = 0;
  sliderContainer.style.transform = `translateX(-${slideIndex * 100}%)`;
}

// Event listeners for previous and next buttons
prevBtn.addEventListener('click', () => {
  slideIndex--;
  showSlide();
});

nextBtn.addEventListener('click', () => {
  slideIndex++;
  showSlide();
});

// Display the initial slide
showSlide();
