let menu =document.querySelector('#menu-btn');
let navbar =document.querySelector('.header .nav');
let header=document.querySelector('.header');

menu.onclick =()=>{
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');

}
window.onscroll =()=>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');

   if(window.scrollY>0){
    header.classList.add('active');
   }else{
    header.classList.remove('active');
   }

}

// transition in section
document.addEventListener("DOMContentLoaded", function() {
    const fadeInSections = document.querySelectorAll('section');

    function checkVisibility() {
        fadeInSections.forEach(section => {
            const sectionTop = section.getBoundingClientRect().top;
            const windowHeight = window.innerHeight;

            if (sectionTop < windowHeight - 50) {  
                section.classList.add('visible');
            }
        });
    }

    window.addEventListener('scroll', checkVisibility);
    checkVisibility(); 
});

let slideIndex = 0;
showSlides();

// Function to show the slides
function showSlides() {
    let i;
    let slides = document.getElementsByClassName("mySlides");
    let dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; // Hide all slides initially
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block"; // Show the current slide
    dots[slideIndex-1].className += " active"; // Activate the current dot
    setTimeout(showSlides, 5000); // Change slide every 5 seconds
}

// Next/previous controls
function plusSlides(n) {
    showSlides(slideIndex += n - 1);
}

// Thumbnail image controls
function currentSlide(n) {
    showSlides(slideIndex = n - 1);
}
// code for login 
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}