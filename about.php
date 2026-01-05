<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - UGBC Church</title>
    <style>
        /* General Styles */
        body {
            font-family: 'Arial', sans-serif;
            line-height: 4.6;
            margin: 0;
            padding: 0;
        }

        h1, h2, h3 {
            font-family: 'Georgia', serif;
        }

        /* Hero Section */
        .hero-section {
            background: url('images/2640027.png') no-repeat center center/cover;
            height: 40vh;
            position: relative;
            display: flex;
            padding-top: 15px;
            justify-content: center;
        }

        .hero-overlay {
            background: rgba(0, 0, 0, 0.6);
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
        }

        .hero-content {
            position: relative;
            z-index: 52;
            text-align: center;
            color: white;
        }

        .hero-content h1 {
            font-size: 2.6rem;
            margin-bottom: 15px;
        }

        .hero-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .btn-primary {
            display: inline-block;
            padding: 2px 23px;
            font-size: 1rem;
            background: #ff5a5f;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background 0.3s ease;
        }

        .btn-primary:hover {
            background: #e04e4f;
        }

        /* About Section */
        .about-section {
            padding: 35px 20px;
            background: #f8f9fa;
            text-align: center;
        }

        .about-section h2 {
            font-size: 2rem;
            margin-bottom: 20px;
            color: #333;
        }

        .about-content {
            max-width: 1000px;
            margin: auto;
        }

        .about-image {
            max-width: 60%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin: 20px auto;
        }

        .about-content p {
            font-size: 1.1rem;
            color: #555;
            line-height: 1.8;
        }

        /* Journey and Values Sections */
        .journey-section, .values-section {
            padding: 40px 20px;
        }

        .journey-section h3, .values-section h3 {
            font-size: 1.8rem;
            margin-bottom: 15px;
            color: #444;
        }

        .journey-section p, .values-section p {
            font-size: 1rem;
            color: #666;
            line-height: 1.7;
            max-width: 700px;
            margin: auto;
        }

        .values-section ul {
            list-style: none;
            padding: 0;
            max-width: 700px;
            margin: auto;
        }

        .values-section ul li {
            font-size: 1.1rem;
            color: #555;
            margin-bottom: 10px;
        }

        .values-section ul li strong {
            color: #333;
        }

        /* Explore Programs Section */
        .explore-programs {
            text-align: center;
            padding: 30px 0;
            background: #e9ecef;
        }

        /* Footer */
        footer {
            background: #343a40;
            color: white;
            text-align: center;
            padding: 20px;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>

    <!-- Hero Section -->
    <section id="hero" class="hero-section">
        <div class="hero-overlay"></div>
        <div class="hero-content">
            <h1>Welcome to UGBC Church</h1>
            <p>Join us and experience God's love and grace in a vibrant community of believers.</p>
            <a href="#about" class="btn-primary">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <section id="about" class="about-section">
        <h2>Our Mission</h2>
        <div class="about-content">
            <img src="images/sun3.jpg" alt="Church Celebration" class="about-image">
            <p>We are a community of believers dedicated to serving God and others. Our mission is to nurture faith, grow spiritually, and foster a sense of belonging where everyone feels loved and supported.</p>
        </div>
    </section>

    <!-- Our Journey Section -->
    <section id="journey" class="journey-section">
        <h3>Our Journey</h3>
        <p>Since our founding in 1990, UGBC Church has been a light in the community, offering hope and growth through worship, educational programs, and outreach. Our path has been guided by faith and a commitment to service.</p>
    </section>

    <!-- Our Values Section -->
    <section id="values" class="values-section">
        <h3>Our Core Values</h3>
        <p>We are guided by the following values, shaping everything we do:</p>
        <ul>
            <li><strong>Faith:</strong> Rooted in the Word of God and centered on Christ.</li>
            <li><strong>Community:</strong> Building supportive and meaningful relationships.</li>
            <li><strong>Service:</strong> Helping others in selfless and Christ-like ways.</li>
        </ul>
    </section>

    <!-- Explore Programs Section -->
    <section id="explore-programs" class="explore-programs">
        <a href="#programs" class="btn-primary">Explore Our Programs</a>
    </section>

    <!-- Footer Section -->
    <footer>
        <?php include 'footer.php'; ?>
    </footer>

    <!-- Smooth Scrolling -->
    <script>
        document.querySelectorAll('.btn-primary').forEach(btn => {
            btn.addEventListener('click', function(event) {
                event.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                target?.scrollIntoView({ behavior: 'smooth' });
            });
        });
    </script>

</body>
</html>

