
// Mobile Menu Script
const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
const mobileNavMenu = document.querySelector('.mobile-nav-menu');

mobileMenuIcon.addEventListener('click', () => {
    mobileNavMenu.classList.toggle('hidden'); // Toggle the visibility of the mobile menu
});

/* General Styles */
body {
                font-family: Arial, sans-serif;
                margin: 0;
                padding: 0;
                line-height: 1.6;
            }
            
            /* Header Styles */
            .header {
                background: #333;
                color: #fff;
                padding: 10px 0;
            }
            
            .header .container {
                display: flex;
                align-items: center;
                justify-content: space-between;
            }
            
            .header .logo a {
                color: #fff;
                text-decoration: none;
                font-size: 24px;
            }
            
            .nav ul {
                list-style: none;
                display: flex;
            }
            
            .nav ul li {
                margin: 0 15px;
            }
            
            .nav ul li a {
                color: #fff;
                text-decoration: none;
            }
            
            /* Hero Section */
            .hero {
                position: relative;
                height: 50vh;
                overflow: hidden;
            }
            
            .hero-video {
                width: 100%;
                height: 100%;
                object-fit: cover;
            }
            
            .hero-overlay {
                position: absolute;
                top: 0;
                left: 0;
                right: 0;
                bottom: 0;
                background: rgba(0, 0, 0, 0.5);
            }
            
            .hero-content {
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                color: #fff;
                text-align: center;
            }
            
            /* Section Styles */
            .section-title {
                text-align: center;
                margin: 20px 0;
            }
            
            .container {
                max-width: 1200px;
                margin: auto;
                padding: 20px;
            }
            
            /* Contact Section Styles */
            .contact-section {
                padding: 20px;
            }
            
            .contact-form {
                display: flex;
                flex-direction: column;
            }
            
            .contact-form label {
                margin: 10px 0 5px;
            }
            
            .contact-form input,
            .contact-form textarea {
                padding: 10px;
                margin-bottom: 15px;
            }
            
            .contact-form button {
                background: #ff6347;
                color: #fff;
                border: none;
                padding: 10px;
                cursor: pointer;
            }
            
            .contact-form button:hover {
                background: #e5533d;
            }
            
            /* Social Media Styles */
            .social-media {
                margin-top: 20px;
                text-align: center;
            }
            
            .social-media h3 {
                color: #ff6347; /* Tomato color for the heading */
                font-size: 1.5em;
                margin-bottom: 10px;
            }
            
            .social-media ul {
                list-style: none;
                padding: 0;
            }
            
            .social-media li {
                display: inline;
                margin: 0 10px;
            }
            
            .social-media a {
                color: #333; /* Default color for icons */
                font-size: 24px;
                transition: color 0.3s;
            }
            
            .social-media a:hover {
                color: #ff6347; /* Change color on hover */
            }
            
            /* Footer Styles */
            .footer {
                background: #333;
                color: #fff;
                text-align: center;
                padding: 10px 0;
            }
            
            .footer .social-media {
                margin: 10px 0;
            }
            