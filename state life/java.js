// JavaScript for Scroll Effect
window.addEventListener('scroll', function() {
    const navbar = document.getElementById('navbar');
    if (window.scrollY > 50) { // Change 50 to adjust scroll distance
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});
