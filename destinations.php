<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RoamHorizon Travels - Destinations</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: url('img/background22.jpg') no-repeat center center fixed;
            background-size: cover;
            min-height: 100vh;
            color: #2c3e50;
            margin: 0;
        }
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
        .destination-section {
            max-width: 1140px;
            margin: 3rem auto 3rem;
            padding: 0 1.5rem;
            text-align: center;
        }
        .destination-section h2 {
            font-family: 'Paytone One', sans-serif;
            font-size: 2.5rem;
            color: #2c3e50;
            letter-spacing: 2px;
            margin-bottom: 2rem;
            user-select: none;
        }
        .row-items {
            display: flex;
            flex-wrap: wrap;
            gap: 2rem;
            justify-content: center;
            margin: 0 auto;
            max-width: 100%;
        }
        .container-box {
            flex: 0 0 calc(33.333% - 2rem);
            min-width: 280px;
            max-width: 320px;
            background: rgba(255, 255, 255, 0.98);
            border-radius: 1.5rem;
            box-shadow: 0 8px 24px rgba(230, 126, 34, 0.1);
            padding: 1.5rem;
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 1.5rem;
        }
        .container-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 16px 32px rgba(230, 126, 34, 0.18);
        }
        .container-img {
            width: 100%;
            height: 180px;
            overflow: hidden;
            border-radius: 1rem;
            margin-bottom: 1rem;
        }
        .container-img img {
            width: 100%;
            height: 100%;
            object-fit: cover;
            display: block;
            border-radius: 1rem;
        }
        .container-box h4 {
            font-family: 'Paytone One', sans-serif;
            font-size: 1.3rem;
            margin-bottom: 0.75rem;
            color: #2c3e50;
            letter-spacing: 1px;
            transition: color 0.3s;
        }
        .container-box:hover h4 { color: #e67e22; }
        .container-box p {
            font-weight: 300;
            color: #555f6e;
            font-size: 1rem;
            line-height: 1.6;
        }
        .see-dest-btn {
            background: linear-gradient(90deg, #e67e22, #f6b93b);
            color: #fff;
            border: none;
            padding: 0.7rem 1.5rem;
            font-size: 1rem;
            font-weight: 600;
            border-radius: 2rem;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 4px 15px rgba(230,126,34,0.13);
            margin-top: 1rem;
        }
        .see-dest-btn:hover {
            background: linear-gradient(90deg, #f6b93b, #e67e22);
            transform: translateY(-2px) scale(1.04);
        }
        @media (max-width: 992px) {
            .container-box { flex: 0 0 calc(50% - 2rem); }
        }
        @media (max-width: 576px) {
            header { padding: 1.25rem 1rem; }
            .container-box { flex: 0 0 100%; max-width: 100%; }
            .destination-section h2 { font-size: 2rem; }
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
    <section class="destination-section">
        <h2>Discover Endless Horizons with Unforgettable Escapes!</h2>
        <div class="row-items">
            <article class="container-box">
                <div class="container-img">
                    <img src="img/image_8.jpg" alt="Adventure and Exploration">
                </div>
                <h4>Adventure & Exploration</h4>
                <p>For thrill-seekers and nature lovers, our adventure packages are designed to get your heart racing and your spirit soaring.</p>
                <a href="<?php echo isset($_SESSION['email']) ? 'adventure_destination.php' : 'login.php?redirect=adventure'; ?>" class="see-dest-btn">See Destinations</a>
            </article>
            <article class="container-box">
                <div class="container-img">
                    <img src="img/image_9.jpg" alt="Romance and Honeymoon">
                </div>
                <h4>Romance & Honeymoon</h4>
                <p>Celebrate love with our specially curated romantic getaways.</p><br><br>
                <a href="<?php echo isset($_SESSION['email']) ? 'romance_destination.php' : 'login.php?redirect=adventure'; ?>" class="see-dest-btn">See Destinations</a>
            </article>
            <article class="container-box">
                <div class="container-img">
                    <img src="img/image_10.jpg" alt="Family Fun and Relaxation">
                </div>
                <h4>Family Fun & Relaxation</h4>
                <p>Create lasting memories with family-friendly vacations that cater to all ages.</p><br><br>
                <a href="<?php echo isset($_SESSION['email']) ? 'family_destination.php' : 'login.php?redirect=adventure'; ?>" class="see-dest-btn">See Destinations</a>
            </article>
            <article class="container-box">
                <div class="container-img">
                    <img src="img/image_11.jpg" alt="Cultural and Historical Journeys">
                </div>
                <h4>Cultural & Historical Journeys</h4>
                <p>Immerse yourself in the rich tapestry of global cultures with our heritage-focused travel packages.</p>
                <a href="<?php echo isset($_SESSION['email']) ? 'cultural_destination.php' : 'login.php?redirect=adventure'; ?>" class="see-dest-btn">See Destinations</a>
            </article>
            <article class="container-box">
                <div class="container-img">
                    <img src="img/image_12.jpg" alt="Corporate and Group Travel">
                </div>
                <h4>Corporate & Group Travel</h4>
                <p>Simplify your business trips and group travel with RoamHorizon’s corporate solutions.</p>
                <a href="<?php echo isset($_SESSION['email']) ? 'corporate_destination.php' : 'login.php?redirect=adventure'; ?>" class="see-dest-btn">See Destinations</a>
            </article>
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
</body>
</html>