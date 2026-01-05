<?php include 'header.php'; ?>

<!-- Contact Section -->
<section class="contact-section">
    <div class="container">
        <h2 class="section-title">Contact Us</h2>
        <div class="contact-box"> <!-- New container for better layout -->
            <div class="contact-container">
                <form class="contact-form">
                    <label for="name">Name</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" required>

                    <label for="phone">Telephone Number</label>
                    <input type="tel" id="phone" name="phone" required>

                    <label for="message">Message</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Send Message</button>
                </form>
                <div class="map"> <!-- Placeholder for map -->
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3935.0801106392054!2d-122.08341868518838!3d37.422065279827944!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x808fba0b71d62f79%3A0xe1522ae7d720676e!2sGoogleplex!5e0!3m2!1sen!2sus!4v1615568393006!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                </div>
            </div>
        </div>
        <div class="address-box">
            <h3 class="address-title">Our Address</h3>
            <p>123 Church St, City, Country</p>
            <p>Email: info@ugbc.com</p>
            <p>Phone: +1 (234) 567-8900</p>
        </div>
        <div class="social-media">
            <h3>Follow Us</h3>
            <ul>
                <li><a href="https://facebook.com/yourchurch" target="_blank"><i class="fab fa-facebook"></i></a></li>
                <li><a href="https://twitter.com/yourchurch" target="_blank"><i class="fab fa-twitter"></i></a></li>
                <li><a href="https://instagram.com/yourchurch" target="_blank"><i class="fab fa-instagram"></i></a></li>
                <li><a href="https://youtube.com/yourchurch" target="_blank"><i class="fab fa-youtube"></i></a></li>
            </ul>
        </div>
    </div>
</section>

<?php include 'footer.php'; ?>
