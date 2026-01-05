<!-- ===========================
     HEADER SECTION
=========================== -->
<header class="church-header">
                 <div class="logo">
                                  <a href="index.php">
                                                   <img src="images/Logo-.jpg" alt="UGBC Ayat Church Logo" height="55">
                                  </a>
                 </div>

                 <nav class="navbar">
                                  <ul class="nav-menu">
                                                   <li><a href="index.php" class="active">Home</a></li>
                                                   <li><a href="about.php">About Us</a></li>
                                                   <li><a href="sermons.php">Programs</a></li>
                                                   <li><a href="#services">Services</a></li>
                                                   <li><a href="#events">Events</a></li>
                                                   <li><a href="#giving">Donate</a></li>
                                                   <li><a href="#contact">Contact</a></li>
                                                   <li><a href="blog.php">Blog</a></li>
                                  </ul>
                 </nav>

                 <a href="#contact" class="join-btn">Join Us</a>
</header>

<!-- ===========================
     STYLES
=========================== -->
<style>
/* ---------- General ---------- */
body {
                 font-family: "Poppins", Arial, sans-serif;
                 margin: 0;
                 padding: 0;
                 background-color: #f4f7fb;
                 color: #333;
}

/* ---------- Header ---------- */
.church-header {
                 background: linear-gradient(90deg, #004aad, #1b74d4);
                 position: fixed;
                 top: 0;
                 left: 0;
                 right: 0;
                 padding: 12px 40px;
                 display: flex;
                 align-items: center;
                 justify-content: space-between;
                 z-index: 1000;
                 box-shadow: 0 2px 10px rgba(0, 0, 0, 0.15);
}

.logo img {
                 border-radius: 6px;
                 height: 55px;
}

/* ---------- Navigation ---------- */
.navbar {
                 flex-grow: 1;
                 text-align: center;
}

.nav-menu {
                 list-style: none;
                 margin: 0;
                 padding: 0;
                 display: inline-flex;
                 gap: 25px;
}

.nav-menu li {
                 display: inline-block;
}

.nav-menu li a {
                 color: #ffffff;
                 text-decoration: none;
                 font-weight: 500;
                 font-size: 16px;
                 transition: all 0.3s ease;
                 position: relative;
}

.nav-menu li a::after {
                 content: "";
                 display: block;
                 height: 2px;
                 width: 0%;
                 background: #ffcc00;
                 transition: width 0.3s ease;
                 margin-top: 4px;
}

.nav-menu li a:hover::after,
.nav-menu li a.active::after {
                 width: 100%;
}

.nav-menu li a:hover {
                 color: #ffcc00;
}

/* ---------- Join Button ---------- */
.join-btn {
                 background: #ffcc00;
                 color: #003580;
                 padding: 10px 20px;
                 text-decoration: none;
                 font-weight: 600;
                 border-radius: 8px;
                 transition: all 0.3s ease;
}

.join-btn:hover {
                 background: #ffdb4d;
                 transform: translateY(-2px);
}

/* ---------- Responsive (Mobile) ---------- */
@media (max-width: 900px) {
                 .church-header {
                                  flex-wrap: wrap;
                                  justify-content: center;
                                  text-align: center;
                                  padding: 10px 20px;
                 }

                 .nav-menu {
                                  flex-direction: column;
                                  gap: 12px;
                                  margin-top: 10px;
                 }

                 .join-btn {
                                  margin-top: 10px;
                 }
}

/* ---------- Hero Section ---------- */
.hero-image {
                 background-size: cover;
                 background-position: center;
                 flex-grow: 1;
                 margin-top: 80px;
                 /* Adjust for fixed header */
                 display: flex;
                 align-items: flex-end;
                 justify-content: flex-end;
                 color: white;
                 text-align: right;
                 padding: 40px;
                 height: 80vh;
}

.hero-text {
                 background: rgba(0, 0, 0, 0.6);
                 padding: 25px;
                 border-radius: 12px;
                 max-width: 450px;
                 text-align: right;
}

.hero-text h2 {
                 font-size: 2.2rem;
                 margin-bottom: 10px;
                 color: #fff;
}

.hero-text p {
                 font-size: 1rem;
                 margin-bottom: 20px;
                 color: #e0e0e0;
}

.btn {
                 background: #ffcc00;
                 color: #003580;
                 padding: 10px 20px;
                 text-decoration: none;
                 border-radius: 8px;
                 font-size: 16px;
                 transition: all 0.3s ease;
}

.btn:hover {
                 background: #ffdb4d;
                 transform: scale(1.05);
}
</style>