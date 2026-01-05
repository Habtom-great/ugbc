    <!-- Footer Section -->
<footer>
    <div class="container">
        <div class="footer-content">
            <p>&copy; 2025 United Gospel Believers Church. All Rights Reserved.</p>
            <div class="social-links">
                <a href="#" aria-label="Facebook"><i class="fab fa-facebook"></i></a>
                <a href="#" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
                <a href="#" aria-label="WhatsApp"><i class="fab fa-whatsapp"></i></a>
                <a href="#" aria-label="Telegram"><i class="fab fa-telegram"></i></a>
            </div>
        </div>
    </div>
</footer>

<!-- Mobile Menu Script -->
<script>
    document.addEventListener('DOMContentLoaded', () => {
        const mobileMenuIcon = document.querySelector('.mobile-menu-icon');
        const mobileNavMenu = document.querySelector('.mobile-nav-menu');
        const navMenu = document.querySelector('.nav-menu');

        mobileMenuIcon?.addEventListener('click', () => {
            mobileNavMenu.classList.toggle('hidden');
            navMenu.style.display = navMenu.style.display === 'none' ? 'block' : 'none';
        });
    });
</script>
</body>

</html>
