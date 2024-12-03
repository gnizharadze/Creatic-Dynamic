let currentSlide = 0;

// Function to change slides
function changeSlide(index) {
  const slideContainer = document.querySelector(".carousel-slide");
  const dots = document.querySelectorAll(".dot");

  // Update transform to show the selected slide
  slideContainer.style.transform = `translateX(-${index * 100}%)`;

  // Update the active dot
  dots.forEach((dot) => dot.classList.remove("active"));
  dots[index].classList.add("active");

  // Update current slide
  currentSlide = index;
}

// Autoplay feature
function startAutoplay() {
  setInterval(() => {
    const dots = document.querySelectorAll(".dot");
    currentSlide = (currentSlide + 1) % dots.length; // Loop back to the first slide
    changeSlide(currentSlide);
  }, 3000); // Change every 3 seconds
}

// Initialize the carousel on page load
document.addEventListener("DOMContentLoaded", () => {
  startAutoplay();
});
