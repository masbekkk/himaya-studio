// Add smooth scrolling to all links
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        document.querySelector(this.getAttribute('href')).scrollIntoView({
            behavior: 'smooth'
        });
    });
});

// Function to update height and width
function updateNavbarVisibility() {
    let w = window.innerWidth;
    const navbar = document.querySelector('header');

    if (w > 400) {
        // Add navbar background on scroll
        window.addEventListener('scroll', navAnimation);
    } else {

        // Remove navbar background on scroll
        window.removeEventListener('scroll', navAnimation);
        navbar.classList.add("nav-white")
    }
}

function navAnimation() {
    const navbar = document.querySelector('header');
    if (window.scrollY > 50) {
        navbar.classList.add("nav-white")
    } else {
        navbar.classList.remove("nav-white")
    }
}

// Add event listener for window resize
window.addEventListener('resize', updateNavbarVisibility);

// Initial update
updateNavbarVisibility();

// change toggler icon on header mobile
function changeIcon(btn) {
    const span = btn.querySelector('.navbar-toggler-icon');

    if (span.classList.contains('toggler-opened')) {
        span.classList.remove('toggler-opened');
    } else {
        span.classList.add('toggler-opened');
    }
}