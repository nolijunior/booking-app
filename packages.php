<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RoamHorizon Travels - Packages</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
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
            line-height: 1.6;
            position: relative;
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
.navbar ul li a[aria-current="page"],
.navbar ul li.dropdown:hover .dropdown-toggle {
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

        .package {
            max-width: 1140px;
            margin: 4rem auto 3rem;
            padding: 0 1.5rem;
            text-align: center;
        }
        .package .text h2 {
            font-family: 'Paytone One', sans-serif;
            font-size: 2.5rem;
            color: #2c3e50;
            letter-spacing: 2px;
            margin-bottom: 2rem;
            user-select: none;
            animation: fadeInDown 1s;
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
            background: rgba(255, 255, 255, 0.95);
            border-radius: 1.5rem;
            box-shadow: 0 8px 24px rgba(230, 126, 34, 0.1);
            padding: 1.5rem;
            transition: transform 0.3s, box-shadow 0.3s;
            animation: fadeInUp 1s;
        }
        .container-box:hover {
            transform: translateY(-10px);
            box-shadow: 0 16px 32px rgba(230, 126, 34, 0.2);
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
            font-size: 1.4rem;
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
        .package-bottom {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 1.2rem;
            gap: 1rem;
        }
        .book-btn {
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
        }
        .book-btn:hover {
            background: linear-gradient(90deg, #f6b93b, #e67e22);
            transform: translateY(-2px) scale(1.04);
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
        .social a:hover, .social a:focus {
            color: #e67e22;
            transform: scale(1.15);
        }
        .end-text {
            text-align: center;
            font-weight: 300;
            color: #7f8c8d;
        }
        @keyframes fadeInDown {
            0% { opacity: 0; transform: translateY(-30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @keyframes fadeInUp {
            0% { opacity: 0; transform: translateY(30px); }
            100% { opacity: 1; transform: translateY(0); }
        }
        @media (max-width: 992px) {
            .container-box { flex: 0 0 calc(50% - 2rem); }
        }
        @media (max-width: 576px) {
            header { padding: 1.25rem 1rem; }
            .container-box { flex: 0 0 100%; max-width: 100%; }
            .package .text h2 { font-size: 2rem; }
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo" aria-label="RoamHorizon Home">RoamHorizon</a>
        <div class="bx bx-menu" id="menu-icon" role="button" aria-label="Toggle menu"></div>
        <nav class="navbar" aria-label="Main navigation">
    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Account</a></li>
        <li><a href="destinations.php">Destinations</a></li>
        <li><a href="packages.php" aria-current="page">Packages</a></li>
        <li><a href="about_us.php">About</a></li>
        <li><a href="contact_us.php">Contact Us</a></li>
    </ul>
</nav>
    </header>
    <section class="package" id="package" aria-labelledby="services-title">
        <div class="text">
            <h2 id="services-title">Start Your Journey <br> With Wonderful Services!</h2>
        </div>
        <div class="row-items">
            <article class="container-box" aria-labelledby="adventure-title">
                <div class="container-img">
                    <img src="img/image (3).jpg" alt="Adventure and Exploration">
                </div>
                <h4 id="adventure-title">Adventure & Exploration</h4>
                <p>For thrill-seekers and nature lovers, our adventure packages are designed to get your heart racing and your spirit soaring.</p>
                <div class="package-bottom">
                    <button class="book-btn" onclick="bookNow('Adventure and Exploration')">Book Now</button>
                </div>
            </article>
            <article class="container-box" aria-labelledby="romance-title">
                <div class="container-img">
                    <img src="img/image (4).jpg" alt="Romance and Honeymoon">
                </div>
                <h4 id="romance-title">Romance & Honeymoon</h4>
                <p>Celebrate love with our specially curated romantic getaways.</p><br><br>
                <div class="package-bottom">
                    <button class="book-btn" onclick="bookNow('Romance and Honeymoon')">Book Now</button>
                </div>
            </article>
            <article class="container-box" aria-labelledby="family-title">
                <div class="container-img">
                    <img src="img/image (5).jpg" alt="Family Fun and Relaxation">
                </div>
                <h4 id="family-title">Family Fun & Relaxation</h4>
                <p>Create lasting memories with family-friendly vacations that cater to all ages.</p><br>
                <div class="package-bottom">
                    <button class="book-btn" onclick="bookNow('Family Fun and Relaxation')">Book Now</button>
                </div>
            </article>
            <article class="container-box" aria-labelledby="cultural-title">
                <div class="container-img">
                    <img src="img/image (6).jpg" alt="Cultural and Historical Journeys">
                </div>
                <h4 id="cultural-title">Cultural & Historical Journeys</h4>
                <p>Immerse yourself in the rich tapestry of global cultures with our heritage-focused travel packages.</p>
                <div class="package-bottom">
                    <button class="book-btn" onclick="bookNow('Cultural and Historical Journeys')">Book Now</button>
                </div>
            </article>
            <article class="container-box" aria-labelledby="corporate-title">
                <div class="container-img">
                    <img src="img/image (7).jpg" alt="Corporate and Group Travel">
                </div>
                <h4 id="corporate-title">Corporate & Group Travel</h4>
                <p>Simplify your business trips and group travel with RoamHorizon's corporate solutions.</p><br>
                <div class="package-bottom">
                    <button class="book-btn" onclick="bookNow('Corporate and Group Travel')">Book Now</button>
                </div>
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
                        <li><a href="about us.php" target="_blank" rel="noopener noreferrer">About Us</a></a></li>
                        <li><a href="terms-conditions.php" target="_blank" rel="noopener noreferrer">Terms & Conditions</a></li>
                        <li><a href="privacypolicy.php" target="_blank" rel="noopener noreferrer">Privacy Policy</a></li>
                        <li><a href="help.php" target="_blank" rel="noopener noreferrer">Help</a></a></li>
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
        <img src="img/logo-facebook.svg" alt="Facebook" style="width:1.6rem; height:1.6rem; margin-right:1.2rem;">
    </a>
    <a href="#" aria-label="Instagram">
        <img src="img/logo-instagram.svg" alt="Instagram" style="width:1.6rem; height:1.6rem; margin-right:1.2rem;">
    </a>
    <a href="#" aria-label="Twitter">
        <img src="img/logo-twitter.svg" alt="Twitter" style="width:1.6rem; height:1.6rem; margin-right:1.2rem;">
    </a>
    <a href="#" aria-label="LinkedIn">
        <img src="img/logo-linkedin.svg" alt="LinkedIn" style="width:1.6rem; height:1.6rem; margin-right:1.2rem;">
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
    // Simulate login status with localStorage for demo
    // In real PHP, use session checks and remove this
    function isLoggedIn() {
        return localStorage.getItem('isLoggedIn') === 'true';
    }

    function bookNow(packageName) {
        if (!isLoggedIn()) {
            // Not logged in: redirect to login page
            window.location.href = "login.php?redirect=packages.php";
        } else {
            // Logged in: redirect to booking form page
            var bookingPage = "";
            switch(packageName) {
                case "Adventure and Exploration":
                    bookingPage = "adventure-exploration.php";
                    break;
                case "Romance and Honeymoon":
                    bookingPage = "romance-honeymoon.php";
                    break;
                case "Family Fun and Relaxation":
                    bookingPage = "familyfun-relaxation.php";
                    break;
                case "Cultural and Historical Journeys":
                    bookingPage = "cultural-historical.php";
                    break;
                case "Corporate and Group Travel":
                    bookingPage = "corporate-group.php";
                    break;
                default:
                    bookingPage = "packages.php";
            }
            window.location.href = bookingPage;
        }
    }
    // For testing: run this in browser console to simulate login:
    // localStorage.setItem('isLoggedIn', 'true');
    // localStorage.removeItem('isLoggedIn');
    </script>
</body>
</html>
