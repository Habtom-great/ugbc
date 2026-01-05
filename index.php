<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UGBC Church</title>
    <link rel="stylesheet" href="styles-.css"> 
    <style>
 /* Hero Section */
 .hero-image {
            background-image: url('images/sunday worship.jpeg'); /* Replace with your image URL */
            background-size: cover;
            background-position: center;
            flex-grow: 1; /* Ensures it takes the available space */
            margin-top: 60px; /* Adjust this to match the header's height */
            margin-bottom: 0px; /* Ensures spacing from the footer */
            display: flex;
            align-items: flex-end;
            justify-content: flex-end;
            color: white;
            text-align: right;
            padding: 20px;
        }

    </style>
</head>
<body>
 
    <!-- Hero Section -->
    <div class="hero-image">
        <div class="hero-text">
            <h2>Join Us in Worship</h2>
            <p>Your spiritual home for faith, fellowship, and growth.</p>
            <a href="#about" class="btn">Learn More</a>
        </div>
    </div>
    
    <!-- Footer Section -->
    <?php include 'footer.php'; ?>

    <!-- Optional JavaScript -->
    <script src="scripts.js"></script> <!-- Assuming scripts.js is your JavaScript file -->
</body>
</html>



