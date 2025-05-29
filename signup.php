<?php session_start(); ?>
<?php
require_once("config/db.php");

$error = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Get and sanitize form data
    $full_name = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $contact_number = trim($_POST['contact'] ?? '');
    $password = $_POST['password'] ?? '';
    $confirm_password = $_POST['confirm-password'] ?? '';

    // Basic validation
    if (!$full_name || !$email || !$contact_number || !$password || !$confirm_password) {
        $error = "Please fill in all fields.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $error = "Please enter a valid email address.";
    } elseif ($password !== $confirm_password) {
        $error = "Passwords do not match.";
    } else {
        // Check if email already exists (using prepared statement)
        $stmt_check = $conn->prepare("SELECT * FROM users WHERE email = ? LIMIT 1");
        $stmt_check->bind_param("s", $email);
        $stmt_check->execute();
        $result = $stmt_check->get_result();

        if ($result && $result->num_rows > 0) {
            $error = "Email is already registered.";
        } else {
            // Insert new user (password as plain text)
            $stmt = $conn->prepare("INSERT INTO users (full_name, email, contact_number, password) VALUES (?, ?, ?, ?)");
            $stmt->bind_param("ssss", $full_name, $email, $contact_number, $password);

            if ($stmt->execute()) {
                $_SESSION['user_email'] = $email;
                echo "<script>alert('You Have Successfully Created'); window.location.href = 'index.php'; </script>";
                // header("Location: index.php");
                exit;
            } else {
                $error = "Registration failed. Please try again.";
            }
            $stmt->close();
        }
        $stmt_check->close();
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>RoamHorizon Travels - Sign Up</title>
  <link
    href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
    rel="stylesheet"
  />
</head>
<body>
  <style type="text/css">
    /* Import fonts */
@import url('https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@300;400;600&display=swap');

/* Reset and base */
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
}

/* Overlay for readability */
body::before {
  content: "";
  position: fixed;
  top: 0; left: 0; right: 0; bottom: 0;
  background: rgba(255, 255, 255, 0.2);
  pointer-events: none;
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
/* Signup Section */
.signup-section {
  flex-grow: 1;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 5rem 1.5rem;
  text-align: center;
}

.signup-container {
  background: rgba(255, 255, 255, 0.95);
  padding: 3rem 3.5rem;
  border-radius: 20px;
  box-shadow: 0 15px 35px rgba(230, 126, 34, 0.2);
  max-width: 460px;
  width: 100%;
  animation: fadeInScale 0.8s ease forwards;
}

.signup-container h2 {
  font-family: 'Paytone One', sans-serif;
  font-size: 2.5rem;
  margin-bottom: 1.5rem;
  color: #2c3e50;
  letter-spacing: 1.5px;
  user-select: none;
}

/* Form */
.signup-form {
  display: flex;
  flex-direction: column;
  gap: 1.25rem;
  text-align: left;
}

.form-group label {
  font-weight: 600;
  margin-bottom: 0.5rem;
  color: #34495e;
  user-select: none;
  display: block;
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
  margin-top: 1rem;
}

.submit-btn:hover,
.submit-btn:focus {
  background: #d35400;
  box-shadow: 0 12px 20px rgba(211, 84, 0, 0.5);
  transform: translateY(-3px);
  outline: none;
}

/* Login prompt */
.login-prompt {
  margin-top: 1.25rem;
  font-weight: 300;
  color: #34495e;
  text-align: center;
}

.login-prompt a {
  color: #e67e22;
  text-decoration: none;
  font-weight: 600;
  transition: color 0.3s ease;
}

.login-prompt a:hover,
.login-prompt a:focus {
  color: #d35400;
  outline: none;
}

/* Footer */
footer {
  background: rgba(255, 255, 255, 0.9);
  padding: 2rem 1.5rem;
  font-size: 0.9rem;
  color: #34495e;
  box-shadow: 0 -4px 15px rgba(0,0,0,0.05);
  border-radius: 20px 20px 0 0;
  text-align: center;
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
@media (max-width: 480px) {
  .signup-container {
    padding: 2rem 2rem;
    margin: 0 1rem;
  }

  header {
    padding: 1rem 2rem;
  }
}

  </style>
  <header>
    <a href="index.php" class="logo" aria-label="RoamHorizon Home">RoamHorizon</a>
  </header>

  <section class="signup-section" aria-labelledby="signup-title">
    <div class="signup-container">
      <h2 id="signup-title">Create Your Account</h2>
      <?php if ($error): ?>
        <div style="color: red; margin-bottom: 1rem;"><?= htmlspecialchars($error) ?></div>
         <?php endif; ?>
        <form class="signup-form" method="POST" action="signup.php">
        <div class="form-group">
          <label for="fullname">Full Name</label>
          <input
            type="text"
            id="fullname"
            name="fullname"
            placeholder="Enter your full name"
            required
            aria-required="true"
          />
        </div>
        <div class="form-group">
          <label for="email">Email Address</label>
          <input
            type="email"
            id="email"
            name="email"
            placeholder="Enter your email"
            required
            aria-required="true"
          />
        </div>
        <div class="form-group">
          <label for="contact">Contact Number</label>
          <input
            type="tel"
            id="contact"
            name="contact"
            placeholder="Enter your contact number (e.g. +639123456789)"
            required
            aria-required="true"
          />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input
            type="password"
            id="password"
            name="password"
            placeholder="Create a password"
            required
            aria-required="true"
          />
        </div>
        <div class="form-group">
          <label for="confirm-password">Confirm Password</label>
          <input
            type="password"
            id="confirm-password"
            name="confirm-password"
            placeholder="Confirm your password"
            required
            aria-required="true"
          />
        </div>
        <button type="submit" class="submit-btn" aria-label="Sign Up">Sign Up</button>
        <p class="login-prompt">
          Already have an account? <a href="login.php">Log in here</a>
        </p>
      </form>
      <script>
            document.querySelector('.signup-form').addEventListener('submit', function(event) {
                if (!confirm('You Want To Create Account?')) {
                    event.preventDefault();
                }
            });
              </script>
    </div>
  </section>
  <footer>
    <p>RoamHorizon Travels <br />Copyright ©2024 All Rights Reserved</p>
  </footer>
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
