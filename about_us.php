<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RoamHorizon Travels - About Us</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <style type="text/css">
      /* Import Google Fonts */
@import url('https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@300;400;600&display=swap');

/* Reset & base */
* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
}

body {
  font-family: 'Poppins', sans-serif;
  background: url('img/background22.jpg') no-repeat center center fixed;
  background-size: cover;
  min-height: 100vh;
  color: #2c3e50;
  display: flex;
  flex-direction: column;
  justify-content: space-between;
  line-height: 1.6;
  position: relative;
}

/* Overlay for better readability */
body::before {
  content: "";
  position: fixed;
  inset: 0;
  background: rgba(255, 255, 255, 0.18);
  z-index: -1;
}
/* Header */
header {
    padding: 1.5rem 3rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 100;
    background: rgba(255, 255, 255, 0); /* Transparent at top */
    transition: background 0.3s, padding 0.3s; /* Smooth transition */
}

header.scrolled {
    background: rgba(255, 255, 255, 0.9); /* Semi-transparent white on scroll */
    padding: 1rem 3rem; /* Slightly reduced padding for compact look */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.logo {
    font-family: 'Paytone One', sans-serif;
    font-size: 2rem;
    color: #2c3e50;
    letter-spacing: 2px;
    text-decoration: none;
    transition: color 0.3s;
    font-weight: 700;
    user-select: none;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Shadow for readability */
}

.logo:hover {
    color: #e67e22;
}

.navbar ul {
    list-style: none;
    display: flex;
    gap: 2rem;
    align-items: center;
    margin: 0;
    padding: 0;
}

.navbar ul li a {
    color: #34495e;
    font-weight: 600;
    font-size: 1rem;
    text-decoration: none;
    position: relative;
    transition: color 0.3s;
    padding-bottom: 0.25rem;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Shadow for readability */
}

.navbar ul li a:hover,
.navbar ul li a[aria-current="page"] {
    color: #e67e22;
}

.navbar ul li a::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #e67e22;
    transition: width 0.3s;
}

.navbar ul li a:hover::after,
.navbar ul li a[aria-current="page"]::after {
    width: 100%;
}

/* Ensure dropdown remains readable with new header background */
.dropdown-content {
    background-color: rgba(255, 255, 255, 0.95); /* Match header background */
}
#menu-icon { display: none; }
.user-account {
    background: #e67e22;
    border: none;
    font-weight: 600;
    font-size: 1rem;
    color: white;
    cursor: pointer;
    width: 40px;
    height: 40px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-transform: uppercase;
    transition: background 0.3s;
}
.user-account:hover {
    background: #d86c1a;
}
.dropdown {
    position: relative;
}
.dropdown-content {
    display: none !important; /* Enforce hiding */ 
    position: absolute;
    top: 100%;
    right: 0;
    background-color: #fff;
    min-width: 180px;
    border-radius: 8px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    z-index: 1000;
}
.dropdown-content li.email-display {
    font-weight: bold;
    padding: 12px 16px;
    background-color: #f9f9f9;
}
.dropdown-content li a {
    display: block;
    padding: 12px 16px;
    color: #34495e;
    text-decoration: none;
    transition: background 0.2s;
}
.dropdown-content li a:hover {
    background: #f5f5f5;
}
.dropdown.show .dropdown-content {
    display: block !important; /* Enforce showing when .show is applied */
}
/* About Section */
.about {
  max-width: 1140px;
  margin: 4rem auto 3rem;
  padding: 0 1.5rem;
  text-align: center;
}
.about-heading {
  margin-bottom: 3rem;
  animation: fadeInDown 1s;
}
.about-heading h2 {
  font-family: 'Paytone One', sans-serif;
  font-size: 2.5rem;
  color: #2c3e50;
  letter-spacing: 2px;
  margin-bottom: 1rem;
  user-select: none;
}
.about-heading p {
  font-size: 1.1rem;
  color: #34495e;
  max-width: 800px;
  margin: 0 auto;
}

.about-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  gap: 3rem;
  align-items: center;
  margin-top: 2rem;
  animation: fadeInUp 1.2s;
}
.about-image {
  flex: 1 1 400px;
  max-width: 500px;
  border-radius: 1.5rem;
  overflow: hidden;
  box-shadow: 0 12px 28px rgba(230,126,34,0.15);
  transition: transform 0.3s, box-shadow 0.3s;
}
.about-image:hover {
  transform: translateY(-5px) scale(1.02);
  box-shadow: 0 16px 36px rgba(230,126,34,0.2);
}
.about-image img {
  width: 100%;
  height: auto;
  display: block;
  border-radius: 1.5rem;
}
.modal {
    display: none; /* Hidden by default */
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.8); /* Dark overlay */
    justify-content: center;
    align-items: center;
}

.modal-content {
    max-width: 90%;
    max-height: 80vh;
    border-radius: 1rem;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.3);
}

.close {
    position: absolute;
    top: 20px;
    right: 30px;
    color: #fff;
    font-size: 2.5rem;
    font-weight: bold;
    cursor: pointer;
    transition: color 0.3s;
}

.close:hover {
    color: #e67e22;
}
.about-content {
  flex: 1 1 500px;
  text-align: left;
  background: rgba(255, 255, 255, 0.95);
  border-radius: 1.5rem;
  padding: 2rem;
  box-shadow: 0 8px 24px rgba(230,126,34,0.1);
  transition: transform 0.3s, box-shadow 0.3s;
}
.about-content:hover {
  transform: translateY(-5px);
  box-shadow: 0 16px 36px rgba(230,126,34,0.2);
}
.about-content h2 {
  font-family: 'Paytone One', sans-serif;
  font-size: 1.8rem;
  color: #2c3e50;
  margin-bottom: 1rem;
  letter-spacing: 1px;
  transition: color 0.3s;
}
.about-content:hover h2 { color: #e67e22; }
.about-content p {
  color: #555f6e;
  font-size: 1.05rem;
  line-height: 1.7;
  margin-bottom: 1.5rem;
}
.about-content ul {
  padding-left: 1.5rem;
  margin-bottom: 1.5rem;
}
.about-content li {
  color: #555f6e;
  font-size: 1.05rem;
  line-height: 1.7;
  margin-bottom: 0.75rem;
  position: relative;
}
.about-content li strong {
  color: #e67e22;
}

/* Footer */
footer {
  background: rgba(255, 255, 255, 0.95);
  padding: 3rem 2rem 1.5rem;
  font-size: 0.95rem;
  color: #34495e;
  box-shadow: 0 -4px 20px rgba(0,0,0,0.07);
  border-radius: 1.5rem 1.5rem 0 0;
  user-select: none;
}
.footer .main {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 2rem;
  max-width: 1140px;
  margin: 0 auto 2rem;
}
.list h4 {
  font-weight: 600;
  margin-bottom: 1rem;
  color: #2c3e50;
  letter-spacing: 1px;
}
.list ul {
  list-style: none;
  padding-left: 0;
}
.list ul li a {
  color: #34495e;
  text-decoration: none;
  display: block;
  padding: 0.3rem 0;
  transition: color 0.3s;
}
.list ul li a:hover, .list ul li a:focus { color: #e67e22; }
.social a {
            font-size: 1.6rem;
            margin-right: 1.2rem;
            color: #34495e;
            transition: color 0.3s, transform 0.3s;
        }
        .social a:hover {
            color: #e67e22;
            transform: scale(1.15);
        }
        .social img {
            width: 1.6rem;
            height: 1.6rem;
            margin-right: 1.2rem;
            vertical-align: middle;
        }
.end-text {
  text-align: center;
  font-weight: 300;
  color: #7f8c8d;
}

/* Animations */
@keyframes fadeInDown {
  0% { opacity: 0; transform: translateY(-30px); }
  100% { opacity: 1; transform: translateY(0); }
}
@keyframes fadeInUp {
  0% { opacity: 0; transform: translateY(30px); }
  100% { opacity: 1; transform: translateY(0); }
}

/* Responsive */
@media (max-width: 768px) {
  header { padding: 1.25rem 1rem; }
  .about-container { flex-direction: column; }
  .about-image, .about-content { flex: 1 1 100%; max-width: 100%; }
  .about-heading h2 { font-size: 2rem; }
}

    </style>
</head>
<body>
  <header>
    <a href="index.php" class="logo">RoamHorizon</a>
    <div class="bx bx-menu" id="menu-icon"></div>
    <nav class="navbar">
        <ul>
            <li><a href="index.php" <?= basename($_SERVER['PHP_SELF']) == 'index.php' ? 'aria-current="page"' : '' ?>>Home</a></li>
            <li><a href="destinations.php" <?= basename($_SERVER['PHP_SELF']) == 'destinations.php' ? 'aria-current="page"' : '' ?>>Destinations</a></li>
            <li><a href="about_us.php" <?= basename($_SERVER['PHP_SELF']) == 'about_us.php' ? 'aria-current="page"' : '' ?>>About</a></li>
            <li><a href="contact_us.php" <?= basename($_SERVER['PHP_SELF']) == 'contact_us.php' ? 'aria-current="page"' : '' ?>>Contact Us</a></li>

            <?php if (isset($_SESSION['email']) && $_SESSION['email'] !== 'admin@admin.com'): ?>
                <li class="dropdown" id="accountDropdown">
                    <button class="user-account" id="dropdownToggle">
                        <?php 
                        $userName = isset($_SESSION['name']) ? $_SESSION['name'] : explode('@', $_SESSION['email'])[0];
                        echo strtoupper(substr($userName, 0, 1)); // First letter of name
                        ?>
                    </button>
                    <ul class="dropdown-content" id="dropdownMenu">
                        <li class="email-display"><?= htmlspecialchars($_SESSION['email']) ?></li>
                        <li><a href="logout.php">Sign Out</a></li>
                    </ul>
                </li>
            <?php else: ?>
                <li><a href="login.php">Sign In</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
    <!-- About Section -->
    <section class="about" aria-labelledby="about-title">
        <div class="about-heading">
            <h2 id="about-title">About This Website</h2>
            <p>At RoamHorizon, we turn your travel dreams into reality.</p>
        </div>
        <div class="about-container">
            <div class="about-image">
    <img src="img/rht.jpg" alt="RoamHorizon travel scene" id="aboutThumb">
</div>

<!-- Modal Image Popup -->
<div id="imageModal" class="modal">
  <span class="close">&times;</span>
  <img class="modal-content" id="fullImage">
</div>

            <div class="about-content">
                <h2>Your Trusted Travel Partner</h2>
                <p>We offer tailor-made itineraries, exclusive guided tours, and seamless travel planning. Whether you're looking for a romantic getaway, a family vacation, a solo adventure, or a corporate retreat, we ensure every detail is taken care of so you can focus on making memories.</p>
                <p><strong>Our Promise:</strong></p>
                <ul>
                    <li><strong>Personalized Service:</strong> We listen to your needs and preferences to craft a unique travel experience.</li>
                    <li><strong>Quality & Reliability:</strong> Trusted partnerships with hotels, airlines, and local guides to ensure top-notch service.</li>
                    <li><strong>24/7 Support:</strong> Our dedicated team is available around the clock to assist you before, during, and after your trip.</li>
                    <li><strong>Sustainable Travel:</strong> We are committed to eco-friendly practices, supporting local communities, and promoting responsible tourism.</li>
                </ul>
                <p>Let RoamHorizon be your guide to discovering the world’s hidden gems, iconic landmarks, and everything in between.</p>
            </div>
        </div>
    </section>

   <!-- Footer -->
    <footer id="contact" aria-labelledby="footer-title">
        <div class="footer">
            <div class="main">
                <div class="list">
                    <h4 id="footer-title">Quick Links</h4>
                    <ul>
                        <li><a href="about_us.php" target="_blank" rel="noopener noreferrer">About Us</a></li>
                        <li><a href="terms_conditions.php" target="_blank" rel="noopener noreferrer">Terms & Conditions</a></li>
                        <li><a href="privacy_policy.php" target="_blank" rel="noopener noreferrer">Privacy Policy</a></li>
                        <li><a href="help.php" target="_blank" rel="noopener noreferrer">Help</a></li>
                        <li><a href="destinations.php" target="_blank" rel="noopener noreferrer">Tour</a></li>
                    </ul>
                </div>
                <div class="list">
                    <h4>Office Hours</h4>
                    <ul>
                        <li><a>Monday To Friday<br>9AM to 5PM</a></li>
                        <li><a>Saturdays<br>10AM to 4PM</a></li>
                        <li><a>No Office Every Sunday</a></li>
                    </ul>
                </div>
                <div class="list">
                    <h4>Contact Info</h4>
                    <ul>
                        <li><a>National Highway Poblacion</a></li>
                        <li><a>Tupi South Cotabato 9505</a></li>
                        <li><a href="tel:+639924730763">+63 992 473 0763</a></li>
                        <li><a href="mailto:info@roamhorizon.com">info@roamhorizon.com</a></li>
                    </ul>
                </div>
                <div class="list">
                    <h4>Connect</h4>
                    <div class="social">
                        <a href="https://www.facebook.com/share/1AjQnK2rp9/" target="_blank" rel="noopener noreferrer" aria-label="Facebook">
                            <img src="img/logo-facebook.svg" alt="Facebook">
                        </a>
                        <a href="#" aria-label="Instagram">
                            <img src="img/logo-instagram.svg" alt="Instagram">
                        </a>
                        <a href="#" aria-label="Twitter">
                            <img src="img/logo-x.svg" alt="Twitter">
                        </a>
                        <a href="#" aria-label="LinkedIn">
                            <img src="img/logo-linkedin.svg" alt="LinkedIn">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="end-text">
            <p>RoamHorizon Travels <br> Copyright @2024 All Rights Reserved</p>
        </div>
    </footer>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const toggleBtn = document.getElementById('dropdownToggle');
        const dropdown = document.getElementById('accountDropdown');

        if (toggleBtn && dropdown) {
            // Ensure dropdown is hidden on page load
            dropdown.classList.remove('show');

            toggleBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                dropdown.classList.toggle('show');
            });

            document.addEventListener('click', function (e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('show');
                }
            });
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.querySelector('header');
        const toggleBtn = document.getElementById('dropdownToggle');
        const dropdown = document.getElementById('accountDropdown');

        // Scroll event to toggle header class
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) { // Trigger after scrolling 50px
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.querySelector('header');
        const toggleBtn = document.getElementById('dropdownToggle');
        const dropdown = document.getElementById('accountDropdown');

        // Scroll event to toggle header class
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });

        // Dropdown toggle
        if (toggleBtn && dropdown) {
            dropdown.classList.remove('show');
            toggleBtn.addEventListener('click', function (e) {
                e.preventDefault();
                e.stopPropagation();
                dropdown.classList.toggle('show');
            });
            document.addEventListener('click', function (e) {
                if (!dropdown.contains(e.target)) {
                    dropdown.classList.remove('show');
                }
            });
        }

        // Modal Image Popup
        const modal = document.getElementById('imageModal');
        const thumbnail = document.getElementById('aboutThumb');
        const fullImage = document.getElementById('fullImage');
        const closeBtn = document.querySelector('.close');

        thumbnail.addEventListener('click', function () {
            modal.style.display = 'flex'; // Show modal
            fullImage.src = thumbnail.src; // Set full image source
        });

        closeBtn.addEventListener('click', function () {
            modal.style.display = 'none'; // Hide modal
        });

        // Close modal when clicking outside the image
        modal.addEventListener('click', function (e) {
            if (e.target === modal) {
                modal.style.display = 'none';
            }
        });

        // Close modal with ESC key
        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && modal.style.display === 'flex') {
                modal.style.display = 'none';
            }
        });
    });
</script>
</body>
</html>