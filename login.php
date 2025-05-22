<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>RoamHorizon Travels - User Login</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
      <style type="text/css">
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
/* Login Section */
.login {
  flex-grow: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5rem 1.5rem;
  text-align: center;
}

.login-container {
  background: rgba(255, 255, 255, 0.95);
  padding: 3rem 3.5rem;
  border-radius: 20px;
  box-shadow: 0 15px 35px rgba(230, 126, 34, 0.2);
  max-width: 420px;
  width: 100%;
  animation: fadeInScale 0.8s ease forwards;
}

.login-container h2 {
  font-family: 'Paytone One', sans-serif;
  font-size: 2.5rem;
  margin-bottom: 1.5rem;
  color: #2c3e50;
  letter-spacing: 1.5px;
  user-select: none;
}

/* Form */
.login-form {
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
}

.form-group {
  text-align: left;
}

.form-group label {
  display: block;
  font-weight: 600;
  margin-bottom: 0.5rem;
  color: #34495e;
  user-select: none;
}

.form-group input {
  width: 100%;
  padding: 0.85rem 1rem;
  border: 2px solid #ddd;
  border-radius: 12px;
  font-size: 1rem;
  transition: border-color 0.3s ease, box-shadow 0.3s ease;
  font-weight: 400;
  color: #2c3e50;
}

.form-group input::placeholder {
  color: #a0a8b7;
  font-weight: 300;
}

.form-group input:focus {
  outline: none;
  border-color: #e67e22;
  box-shadow: 0 0 8px rgba(230, 126, 34, 0.4);
}

/* Submit Button */
.submit-btn {
  background: #e67e22;
  color: white;
  padding: 0.9rem 0;
  font-size: 1.15rem;
  font-weight: 600;
  border: none;
  border-radius: 40px;
  cursor: pointer;
  box-shadow: 0 8px 15px rgba(230, 126, 34, 0.3);
  transition: background-color 0.3s ease, transform 0.3s ease, box-shadow 0.3s ease;
  user-select: none;
}

.submit-btn:hover,
.submit-btn:focus {
  background: #d35400;
  box-shadow: 0 12px 20px rgba(211, 84, 0, 0.5);
  transform: translateY(-3px);
  outline: none;
}

/* Signup prompt */
.signup-prompt {
  margin-top: 1rem;
  font-weight: 300;
  color: #34495e;
}

.signup-prompt a {
  color: #e67e22;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.3s ease;
}

.signup-prompt a:hover,
.signup-prompt a:focus {
  color: #d35400;
  outline: none;
}

/* Footer */
footer {
  background: rgba(255, 255, 255, 0.9);
  padding: 3rem 2rem 1.5rem;
  font-size: 0.9rem;
  color: #34495e;
  box-shadow: 0 -4px 15px rgba(0,0,0,0.05);
  border-radius: 20px 20px 0 0;
}

.footer .main {
  display: flex;
  justify-content: space-between;
  flex-wrap: wrap;
  gap: 2rem;
  max-width: 1200px;
  margin: 0 auto 2rem auto;
}

.list h4 {
  font-weight: 600;
  margin-bottom: 1rem;
  color: #2c3e50;
  letter-spacing: 1px;
}

.list ul {
  list-style: none;
}

.list ul li a {
  color: #34495e;
  text-decoration: none;
  display: block;
  padding: 0.25rem 0;
  transition: color 0.3s ease;
}

.list ul li a:hover,
.list ul li a:focus {
  color: #e67e22;
  outline: none;
}

/* Social Icons */
.social a {
  font-size: 1.5rem;
  margin-right: 1rem;
  color: #34495e;
  transition: color 0.3s ease, transform 0.3s ease;
}

.social a:hover,
.social a:focus {
  color: #e67e22;
  transform: scale(1.2);
  outline: none;
}

/* Footer end text */
.end-text {
  text-align: center;
  font-weight: 300;
  color: #7f8c8d;
  user-select: none;
}

/* Animations */
@keyframes fadeInScale {
  0% {
    opacity: 0;
    transform: scale(0.9);
  }
  100% {
    opacity: 1;
    transform: scale(1);
  }
}

/* Responsive */
@media (max-width: 768px) {
  header {
    padding: 1rem 2rem;
  }

  .navbar ul {
    display: none;
    flex-direction: column;
    background: rgba(255, 255, 255, 0.95);
    position: absolute;
    top: 70px;
    right: 2rem;
    border-radius: 10px;
    box-shadow: 0 8px 20px rgba(0,0,0,0.1);
    width: 180px;
    padding: 1rem;
    z-index: 1001;
  }

  .navbar ul.active {
    display: flex;
  }

  #menu-icon {
    display: block;
  }

  .login-container {
    padding: 2rem 2.5rem;
    margin: 0 1rem;
  }
}
</style>
</head>
<body>
    <!-- Header -->
    <header>
        <a href="index.php" class="logo" aria-label="RoamHorizon Home">RoamHorizon</a>
        <div class="bx bx-menu" id="menu-icon" role="button" aria-label="Toggle menu"></div>
        <nav class="navbar" aria-label="Main navigation">
    </header>

    <!-- Login Section -->
    <section class="login" aria-labelledby="login-title">
        <div class="login-container">
            <h2 id="login-title">Login to Your Account</h2>
            <div class="login-form">
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" placeholder="Enter your email" aria-label="Email address" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" placeholder="Enter your password" aria-label="Password" required>
                </div>
                <button type="button" class="submit-btn" aria-label="Login">Login</button>
                <p class="signup-prompt">Don't have an account? <a href="signup.php" target="_blank" rel="noopener noreferrer">Sign up</a></p>
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
</body>
</html>