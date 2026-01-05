// JS functionality can be added here if needed (e.g., for sliders, form validations, etc.)
// Smooth scroll for navigation
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
                anchor.addEventListener('click', function(e) {
                    e.preventDefault();
                    document.querySelector(this.getAttribute('href')).scrollIntoView({
                        behavior: 'smooth'
                    });
                });
            });
            
            // Mobile menu toggle
            const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
            const navMenu = document.querySelector('.nav-menu');
            
            mobileMenuIcon.addEventListener('click', () => {
                navMenu.classList.toggle('active');
            });
            
            // Optionally, add tooltips to the social media icons
const socialIcons = document.querySelectorAll('.social-links a');

socialIcons.forEach(icon => {
    icon.addEventListener('mouseover', () => {
        icon.setAttribute('title', `Follow us on ${icon.classList[1].replace('fa-', '')}`);
    });
});
