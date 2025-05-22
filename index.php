<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RoamHorizon Travels - Home</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@300;400;600&display=swap');
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            font-family: 'Poppins', sans-serif;
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            color: #2c3e50;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            line-height: 1.7;
            position: relative;
        }
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(255, 255, 255, 0.18);
            z-index: -1;
        }
        header {
            background: rgba(255, 255, 255, 0.92);
            box-shadow: 0 4px 24px rgba(0,0,0,0.05);
            padding: 1.5rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 0 0 1.5rem 1.5rem;
            backdrop-filter: blur(14px);
            position: sticky;
            top: 0;
            z-index: 100;
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
        }
        .logo:hover { color: #e67e22; }
        .navbar ul {
            list-style: none;
            display: flex;
            gap: 2rem;
            align-items: center;
        }
        .navbar ul li a {
            color: #34495e;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            position: relative;
            transition: color 0.3s;
            padding-bottom: 0.25rem;
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
        #menu-icon { display: none; }

        /* Dropdown Styles */
        .navbar ul li.dropdown {
            position: relative;
        }
        .dropdown-toggle {
            cursor: pointer;
            color: #34495e;
            font-weight: 600;
            font-size: 1rem;
            display: flex;
            align-items: center;
            gap: 0.25rem;
            transition: color 0.3s;
            padding: 0.5rem 0;
            user-select: none;
        }
        .dropdown-toggle:hover {
            color: #e67e22;
        }
        .dropdown-menu {
            display: none;
            position: absolute;
            top: 2.2rem;
            left: 0;
            min-width: 140px;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 0.7rem;
            box-shadow: 0 8px 32px rgba(44,62,80,0.1);
            z-index: 1002;
            flex-direction: column;
            padding: 0.5rem 0;
            animation: fadeInDropdown 0.35s cubic-bezier(.39,.575,.565,1) both;
        }
        .dropdown-menu li {
            width: 100%;
        }
        .dropdown-menu li a {
            display: block;
            width: 100%;
            padding: 0.7rem 1.2rem;
            color: #34495e;
            background: none;
            border: none;
            text-align: left;
            text-decoration: none;
            font-weight: 500;
            font-size: 1rem;
            transition: background 0.2s, color 0.2s;
            border-radius: 0.5rem;
        }
        .dropdown-menu li a:hover {
            background: #f6f6f6;
            color: #e67e22;
        }
        @keyframes fadeInDropdown {
            0% { opacity: 0; transform: translateY(-10px);}
            100% { opacity: 1; transform: translateY(0);}
        }

        /* Home Section */
        .home {
            padding: 7rem 2rem 5rem;
            text-align: center;
            max-width: 800px;
            margin: 0 auto;
            animation: fadeInUp 1s;
        }
        .home-text h1 {
            font-family: 'Paytone One', sans-serif;
            font-size: 3.5rem;
            color: #2c3e50;
            margin-bottom: 1rem;
            letter-spacing: 2px;
            animation: fadeInDown 1s;
        }
        .home-text p {
            color: #555f6e;
            font-size: 1.2rem;
            margin-bottom: 2rem;
            animation: fadeInUp 1.2s;
        }
        .home-btn {
            display: inline-block;
            background: #e67e22;
            color: white;
            padding: 0.9rem 2rem;
            border-radius: 2rem;
            text-decoration: none;
            font-weight: 600;
            font-size: 1.1rem;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 8px 24px rgba(230,126,34,0.15);
            animation: fadeInUp 1.4s;
        }
        .home-btn:hover {
            background: #d86c1a;
            transform: translateY(-2px);
        }
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-30px); }
            100% { opacity: 1; transform: translateY(0); }
        }

        /* Footer */
        footer {
            background: rgba(255, 255, 255, 0.95);
            padding: 3rem 2rem 2rem;
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
        .list ul li a:hover { color: #e67e22; }
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
    </style>
</head>
<body>
    <!-- Header -->
    <header>
        <a href="index.php" class="logo" aria-label="RoamHorizon Home">RoamHorizon</a>
        <div class="bx bx-menu" id="menu-icon" role="button" aria-label="Toggle menu"></div>
        <nav class="navbar" aria-label="Main navigation">
            <ul>
                <li><a href="index.php" aria-current="page">Home</a></li>
                <li class="dropdown">
                    <span class="dropdown-toggle" tabindex="0">Account <i class='bx bx-chevron-down'></i></span>
                    <ul class="dropdown-menu">
                        <li><a href="login.php">Login</a></li>
                        <li><a href="admin_login.php">Admin</a></li>
                    </ul>
                </li>
                <li><a href="packages.php">Packages</a></li>
                <li><a href="destinations.php">Destination</a></li>
                <li><a href="about us.php">About</a></li>
                <li><a href="contact us.php">Contact Us</a></li>
            </ul>
        </nav>
    </header>

    <!-- Home Section -->
    <section class="home" id="home" aria-labelledby="home-title">
        <div class="home-text">
            <h1 id="home-title">RoamHorizon<br>Travels</h1>
            <p>We turn your travel dreams into reality, creating personalized travel experiences that go beyond the ordinary.</p>
            <a href="packages.php" class="home-btn" aria-label="Start your journey">Your Journey Starts Now</a>
        </div>
    </section>

    <!-- Footer -->
    <footer id="contact" aria-labelledby="footer-title">
        <div class="footer">
            <div class="main">
                <div class="list">
                    <h4 id="footer-title">Quick Links</h4>
                    <ul>
                        <li><a href="about us.php" target="_blank" rel="noopener noreferrer">About Us</a></li>
                        <li><a href="terms-conditions.php" target="_blank" rel="noopener noreferrer">Terms & Conditions</a></li>
                        <li><a href="privacypolicy.php" target="_blank" rel="noopener noreferrer">Privacy Policy</a></li>
                        <li><a href="help.php" target="_blank" rel="noopener noreferrer">Help</a></li>
                        <li><a href="packages.php" target="_blank" rel="noopener noreferrer">Tour</a></li>
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
                            <img src="img/logo-twitter.svg" alt="Twitter">
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

    <!-- Dropdown JS (at end of body) -->
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        const dropdownToggle = document.querySelector('.dropdown-toggle');
        const dropdownMenu = document.querySelector('.dropdown-menu');

        // Always hide dropdown on page load
        dropdownMenu.style.display = 'none';

        dropdownToggle.addEventListener('click', function(event) {
            event.stopPropagation();
            dropdownMenu.style.display = dropdownMenu.style.display === 'flex' ? 'none' : 'flex';
        });

        // Close dropdown when clicking outside
        document.addEventListener('click', function(event) {
            if (!event.target.closest('.dropdown')) {
                dropdownMenu.style.display = 'none';
            }
        });
    });
    </script>
</body>
</html>
