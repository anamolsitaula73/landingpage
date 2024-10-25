// Testimonials Slider
const testimonials = document.querySelectorAll('.testimonial-item');
const prevBtn = document.getElementById('prev');
const nextBtn = document.getElementById('next');
let current = 0;

function showTestimonial(index) {
    testimonials.forEach((testimonial, i) => {
        testimonial.classList.remove('active');
        if (i === index) {
            testimonial.classList.add('active');
        }
    });
}

function prevTestimonial() {
    current = (current === 0) ? testimonials.length - 1 : current - 1;
    showTestimonial(current);
}

function nextTestimonial() {
    current = (current === testimonials.length - 1) ? 0 : current + 1;
    showTestimonial(current);
}

prevBtn.addEventListener('click', prevTestimonial);
nextBtn.addEventListener('click', nextTestimonial);

// Initialize first testimonial
showTestimonial(current);

// Survey Form Submission (Basic Example)
const surveyForm = document.getElementById('survey-form');
surveyForm.addEventListener('submit', function(e) {
    e.preventDefault();
    // Here you can add code to handle form submission, e.g., send data to a server
    alert('Thank you for your feedback!');
    surveyForm.reset();
});
// Show popup when the page is loaded
window.onload = function() {
    var popup = document.getElementById('surveyPopup');
    popup.style.display = 'block';  // Show the popup
}

// Close the popup when 'x' is clicked
document.getElementById('closePopup').onclick = function() {
    var popup = document.getElementById('surveyPopup');
    popup.style.display = 'none';  // Hide the popup
}

// Close the popup when the user clicks outside the popup content
window.onclick = function(event) {
    var popup = document.getElementById('surveyPopup');
    if (event.target == popup) {
        popup.style.display = 'none';  // Hide the popup
    }
}
