<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RoamHorizon Travels - Contact Us</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style type="text/css">
        @import url('https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@300;400;600&display=swap');

/* Base styles */
* { box-sizing: border-box; margin: 0; padding: 0; }
body {
    font-family: 'Poppins', sans-serif;
    background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
    background-size: cover;
    color: #222;
    min-height: 100vh;
    line-height: 1.6;
    position: relative;
}
body::before {
    content: "";
    position: fixed;
    inset: 0;
    background: rgba(255,255,255,0.18);
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
/* Section titles */
section h2 {
    font-family: 'Paytone One', sans-serif;
    font-size: 2.2rem;
    color: #2c3e50;
    margin-bottom: 1.5rem;
    text-align: center;
    letter-spacing: 1.5px;
    animation: fadeInDown 1s;
}

/* Contact Info */
.contact-info {
    max-width: 1140px;
    margin: 3rem auto 0 auto;
    padding: 0 1.5rem;
}
.contact-info .info-flex {
    display: flex;
    flex-wrap: wrap;
    gap: 2rem;
    justify-content: center;
}
.contact-info .info-card {
    flex: 1 1 300px;
    background: #f9f9f9;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 15px rgba(230,126,34,0.09);
    min-width: 260px;
    transition: box-shadow 0.3s, transform 0.3s;
    animation: fadeInUp 1s;
}
.contact-info .info-card:hover {
    box-shadow: 0 8px 28px rgba(230,126,34,0.18);
    transform: translateY(-5px) scale(1.025);
}
.contact-info h3 {
    font-family: 'Paytone One', sans-serif;
    color: #e67e22;
    margin-bottom: 1rem;
    font-size: 1.25rem;
}
.contact-info address, .contact-info p, .contact-info a {
    color: #2c3e50;
    font-size: 1rem;
    text-decoration: none;
}

/* Contact Form */
.contact-form,
.faq {
    background: none !important;
    border-radius: 0 !important;
    box-shadow: none !important;
    padding: 0 1.5rem;
    margin: 3rem auto 3rem auto;
    max-width: 700px;
}

.faq {
    max-width: 1140px;
    margin: 3rem auto 5rem auto;
}

/* Keep the rest of the FAQ readable and clean */
.faq dl {
    color: #222 !important;
    font-size: 1.08rem;
    line-height: 1.7;
    background: none;
    box-shadow: none;
    border-radius: 0;
    padding: 0;
}

.faq dt {
    color: #e67e22 !important;
    font-weight: 700;
    font-size: 1.08rem;
    margin-bottom: 0.5rem;
    cursor: pointer;
    transition: color 0.2s;
    letter-spacing: 0.5px;
    background: none;
}

.faq dd {
    color: #222 !important;
    background: none;
    border-left: 3px solid #f6b93b;
    border-radius: 0;
    margin-bottom: 1.5rem;
    padding: 0.75rem 1rem 0.75rem 1.25rem;
    font-weight: 400;
    box-shadow: none;
}

/* Contact form inputs/buttons remain classy and minimalist */
.contact-form form {
    display: flex;
    flex-direction: column;
    gap: 1.25rem;
}
.contact-form input,
.contact-form textarea {
    padding: 0.75rem 1rem;
    border-radius: 0.75rem;
    border: 1px solid #ddd;
    font-size: 1rem;
    background: #f7f7f7;
    transition: border-color 0.3s, box-shadow 0.3s;
}
.contact-form input:focus,
.contact-form textarea:focus {
    border-color: #e67e22;
    box-shadow: 0 0 8px rgba(230,126,34,0.18);
    outline: none;
}
.contact-form button {
    background: linear-gradient(90deg, #e67e22, #f6b93b);
    color: #fff;
    border: none;
    padding: 0.9rem 1.5rem;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 40px;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
    box-shadow: 0 4px 15px rgba(230,126,34,0.13);
    align-self: center;
}
.contact-form button:hover {
    background: linear-gradient(90deg, #f6b93b, #e67e22);
    transform: translateY(-2px) scale(1.04);
}


/* Map */
.map {
    max-width: 1140px;
    margin: 3rem auto;
    padding: 0 1.5rem;
    animation: fadeInUp 1.4s;
}
.map iframe {
    width: 100%;
    height: 400px;
    border: 0;
    border-radius: 1rem;
    box-shadow: 0 4px 18px rgba(44,62,80,0.08);
}

/* FAQ Section - Improved Readability */
.faq {
    background: none !important;
    border-radius: 0 !important;
    box-shadow: none !important;
    padding: 0 1.5rem;
    margin: 3rem auto 3rem auto;
    max-width: 700px;
}

.faq {
    max-width: 1140px;
    margin: 3rem auto 5rem auto;
}

/* Keep the rest of the FAQ readable and clean */
.faq dl {
    color: #222 !important;
    font-size: 1.08rem;
    line-height: 1.7;
    background: none;
    box-shadow: none;
    border-radius: 0;
    padding: 0;
}

.faq dt {
    color: #e67e22 !important;
    font-weight: 700;
    font-size: 1.08rem;
    margin-bottom: 0.5rem;
    cursor: pointer;
    transition: color 0.2s;
    letter-spacing: 0.5px;
    background: none;
}

.faq dd {
    color: #222 !important;
    background: none;
    border-left: 3px solid #f6b93b;
    border-radius: 0;
    margin-bottom: 1.5rem;
    padding: 0.75rem 1rem 0.75rem 1.25rem;
    font-weight: 400;
    box-shadow: none;
}
/* Newsletter */
.newsletter {
    background: rgba(255,255,255,0.93);
    border-radius: 1.2rem;
    max-width: 700px;
    margin: 3rem auto 2rem auto;
    padding: 2rem 1.5rem;
    box-shadow: 0 8px 24px rgba(230,126,34,0.07);
    text-align: center;
    animation: fadeInUp 1.8s;
}
.news-text h2 {
    font-family: 'Paytone One', sans-serif;
    color: #e67e22;
    font-size: 2rem;
    margin-bottom: 0.5rem;
}
.news-text p {
    color: #34495e;
    font-size: 1.1rem;
    margin-bottom: 1.2rem;
}
.newsletter-form {
    display: flex;
    justify-content: center;
    gap: 0.5rem;
}
.newsletter-form input[type="email"] {
    padding: 0.75rem 1rem;
    border-radius: 2rem;
    border: 1px solid #ddd;
    font-size: 1rem;
    background: #f7f7f7;
    transition: border-color 0.3s, box-shadow 0.3s;
}
.newsletter-form input[type="email"]:focus {
    border-color: #e67e22;
    box-shadow: 0 0 8px rgba(230,126,34,0.18);
    outline: none;
}
.newsletter-form button {
    background: #e67e22;
    color: #fff;
    border: none;
    padding: 0.75rem 1.5rem;
    font-size: 1rem;
    font-weight: 600;
    border-radius: 2rem;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
}
.newsletter-form button:hover {
    background: #b85c00;
    transform: translateY(-2px) scale(1.04);
}

/* Footer */
footer {
    background: rgba(255,255,255,0.95);
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
    letter-spacing: 1.1px;
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
.list ul li a:hover, .list ul li a:focus {
    color: #e67e22;
    outline: none;
}
.social a {
    font-size: 1.6rem;
    margin-right: 1.2rem;
    color: #34495e;
    transition: color 0.3s, transform 0.3s;
}
.social a:hover, .social a:focus {
    color: #e67e22;
    transform: scale(1.15);
    outline: none;
}
.end-text {
    text-align: center;
    font-weight: 300;
    color: #7f8c8d;
    user-select: none;
}

/* Animations */
@keyframes fadeInDown {
    0% { opacity: 0; transform: translateY(-30px);}
    100% { opacity: 1; transform: translateY(0);}
}
@keyframes fadeInUp {
    0% { opacity: 0; transform: translateY(30px);}
    100% { opacity: 1; transform: translateY(0);}
}

/* Responsive */
@media (max-width: 900px) {
    .footer .main, .contact-info .info-flex {
        flex-direction: column;
        gap: 1.5rem;
    }
    header { padding: 1.25rem 1rem; }
}
@media (max-width: 600px) {
    .contact-form, .newsletter, .faq, .contact-info, .map {
        padding: 0 0.5rem;
        border-radius: 1rem;
    }
    .contact-info .info-card { padding: 1rem; }
    section h2 { font-size: 1.5rem; }
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
        <li><a href="index.php">Home</a></li>
        <li><a href="login.php">Account</a></li>
        <li><a href="destinations.php">Destinations</a></li>
        <li><a href="packages.php">Packages</a></li>
        <li><a href="about_us.php">About</a></li>
        <li><a href="contact_us.php" aria-current="page">Contact Us</a></li>
    </ul>
</nav>
    </header>

    <!-- Contact Info Section -->
<section class="contact-info" aria-labelledby="contact-info-title" style="max-width:1140px; margin:3rem auto; padding:0 1.5rem;">
  <h2 id="contact-info-title" style="font-family: 'Paytone One', sans-serif; font-size: 2.5rem; color: #2c3e50; margin-bottom: 2rem; text-align:center;">
    Get in Touch with RoamHorizon
  </h2>
  <div style="display:flex; flex-wrap:wrap; gap:2rem; justify-content:center;">
    <div style="flex:1 1 300px; background:#f9f9f9; padding:2rem; border-radius:1rem; box-shadow: 0 4px 15px rgba(230,126,34,0.1);">
      <h3 style="font-family: 'Paytone One', sans-serif; color:#e67e22; margin-bottom:1rem;">Customer Support</h3>
      <p>Phone: <a href="tel:+639924730763" style="color:#2c3e50; text-decoration:none;">+63 992 473 0763</a></p>
      <p>Email: <a href="mailto:info@roamhorizon.com" style="color:#2c3e50; text-decoration:none;">info@roamhorizon.com</a></p>
      <p>Office Hours: Mon-Fri 9AM - 5PM, Sat 10AM - 4PM</p>
    </div>
    <div style="flex:1 1 300px; background:#f9f9f9; padding:2rem; border-radius:1rem; box-shadow: 0 4px 15px rgba(230,126,34,0.1);">
      <h3 style="font-family: 'Paytone One', sans-serif; color:#e67e22; margin-bottom:1rem;">Visit Our Office</h3>
      <address style="font-style: normal; color:#2c3e50;">
        National Highway Poblacion,<br>
        Tupi, South Cotabato 9505,<br>
        Philippines
      </address>
    </div>
  </div>
</section>

<!-- Contact Form Section -->
<section class="contact-form" aria-labelledby="contact-form-title" style="max-width:700px; margin:3rem auto; padding:0 1.5rem;">
  <h2 id="contact-form-title" style="font-family: 'Paytone One', sans-serif; font-size: 2.5rem; color: #2c3e50; margin-bottom: 1.5rem; text-align:center;">
    Send Us a Message
  </h2>
  <form style="display:flex; flex-direction:column; gap:1.25rem;">
    <input type="text" name="name" placeholder="Your Full Name" aria-label="Full Name" required style="padding:0.75rem 1rem; border-radius:0.75rem; border:1px solid #ddd; font-size:1rem;"/>
    <input type="email" name="email" placeholder="Your Email Address" aria-label="Email Address" required style="padding:0.75rem 1rem; border-radius:0.75rem; border:1px solid #ddd; font-size:1rem;"/>
    <textarea name="message" rows="5" placeholder="Your Message" aria-label="Message" required style="padding:0.75rem 1rem; border-radius:0.75rem; border:1px solid #ddd; font-size:1rem;"></textarea>
    <button type="submit" style="background:#e67e22; color:#fff; border:none; padding:0.85rem 1.5rem; font-size:1.1rem; font-weight:600; border-radius:40px; cursor:pointer; transition: background 0.3s ease;">
      Send Message
    </button>
  </form>
</section>

<!-- Google Map Embed -->
<section class="map" aria-label="Office Location Map" style="max-width:1140px; margin:3rem auto; padding:0 1.5rem;">
  <iframe 
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.123456789012!2d125.000000!3d6.500000!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x32f123456789abcd%3A0x123456789abcdef!2sRoamHorizon%20Travels%20Office!5e0!3m2!1sen!2sph!4v1610000000000!5m2!1sen!2sph" 
    width="100%" height="400" style="border:0; border-radius:1rem;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" aria-label="Google Map of RoamHorizon Travels Office"></iframe>
</section>

<!-- FAQ Section -->
<section class="faq" aria-labelledby="faq-title" style="max-width: 1140px; margin: 3rem auto 5rem auto;">
    <h2 id="faq-title" style="font-family: 'Paytone One', sans-serif; font-size: 2.2rem; color: #b3b3b3; margin-bottom: 2rem; text-align: center; letter-spacing: 1px;">
        Frequently Asked Questions
    </h2>
    <dl style="color: #bbbbbb; font-size: 1.08rem; line-height: 1.7;">
        <dt style="color: #e67e22; font-weight: 700; font-size: 1.08rem; margin-bottom: 0.5rem; cursor: pointer; letter-spacing: 0.5px;">
            How do I book a tour with RoamHorizon?
        </dt>
        <dd style="color: #bbbbbb; border-left: 3px solid #f6b93b; margin-bottom: 1.5rem; padding: 0.75rem 1rem 0.75rem 1.25rem;">
            You can book a tour by browsing our Packages page and clicking the "Book Now" button on your chosen package. Fill out the booking form and our team will contact you for confirmation.
        </dd>
        <dt style="color: #e67e22; font-weight: 700; font-size: 1.08rem; margin-bottom: 0.5rem; cursor: pointer; letter-spacing: 0.5px;">
            What payment methods do you accept?
        </dt>
        <dd style="color: #bbbbbb; border-left: 3px solid #f6b93b; margin-bottom: 1.5rem; padding: 0.75rem 1rem 0.75rem 1.25rem;">
            We accept bank transfers, GCash, and selected credit/debit cards. Details will be provided once your booking is confirmed.
        </dd>
        <dt style="color: #e67e22; font-weight: 700; font-size: 1.08rem; margin-bottom: 0.5rem; cursor: pointer; letter-spacing: 0.5px;">
            Can I customize my travel package?
        </dt>
        <dd style="color: #bbbbbb; border-left: 3px solid #f6b93b; margin-bottom: 1.5rem; padding: 0.75rem 1rem 0.75rem 1.25rem;">
            Yes! We offer customizable travel experiences. Contact us with your preferences and we’ll create a personalized itinerary for you.
        </dd>
        <dt style="color: #e67e22; font-weight: 700; font-size: 1.08rem; margin-bottom: 0.5rem; cursor: pointer; letter-spacing: 0.5px;">
            What is your cancellation policy?
        </dt>
        <dd style="color: #bbbbbb; border-left: 3px solid #f6b93b; margin-bottom: 1.5rem; padding: 0.75rem 1rem 0.75rem 1.25rem;">
            Cancellations made 7 days before the scheduled trip are eligible for a full refund. Later cancellations may incur charges. Please see our Terms & Conditions for full details.
        </dd>
        <dt style="color: #e67e22; font-weight: 700; font-size: 1.08rem; margin-bottom: 0.5rem; cursor: pointer; letter-spacing: 0.5px;">
            How can I contact customer support?
        </dt>
        <dd style="color: #bbbbbb; border-left: 3px solid #f6b93b; margin-bottom: 1.5rem; padding: 0.75rem 1rem 0.75rem 1.25rem;">
            You may call us at +63 992 473 0763 or email info@roamhorizon.com. Our team is available Monday to Saturday to assist you.
        </dd>
    </dl>
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