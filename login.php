<?php
session_start();
require_once("config/db.php");

$error = "";

// Store destination in session if passed from query string
if (isset($_GET['destination'])) {
  $_SESSION['selected_destination'] = $_GET['destination'];
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $email = trim($_POST['email'] ?? '');
  $password = $_POST['password'] ?? '';
  if ($email && $password) {
    $email_esc = $conn->real_escape_string($email);
    $sql = "SELECT * FROM users WHERE email = '$email_esc' LIMIT 1";
    $result = $conn->query($sql);

    if ($result && $result->num_rows === 1) {
      $user = $result->fetch_assoc();

      if ($password === $user['password']) {

        // Redirect logic with destination
        if ($user['email'] === 'admin@admin.com') {
          echo "<script>window.location.href = 'admin/dashboard.php';</script>";
            $_SESSION['email'] = "admin@admin.com";
        } else {
            $_SESSION['email'] = $user['email'];
          echo "<script>window.location.href = 'index.php';</script>";
        }
        exit;
      } else {
        $error = "Invalid email or password.";
      }
    } else {
      $error = "Invalid email or password.";
    }
  } else {
    $error = "Please enter both email and password.";
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>RoamHorizon Travels - User Login</title>
  <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
  <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
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
    body::before {
      content: "";
      position: fixed;
      inset: 0;
      background: rgba(255, 255, 255, 0.18);
      z-index: -1;
    }
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
    .login {
      flex-grow: 1;
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 5rem 1.5rem;
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
      text-align: center;
      font-family: 'Paytone One', sans-serif;
      font-size: 2.5rem;
      margin-bottom: 1.5rem;
      color: #2c3e50;
    }
    .login-form {
      display: flex;
      flex-direction: column;
      gap: 1.25rem;
    }
    .form-group label {
      display: block;
      font-weight: 600;
      margin-bottom: 0.5rem;
      color: #34495e;
    }
    .form-group input {
      width: 100%;
      padding: 0.85rem 1rem;
      border: 2px solid #ddd;
      border-radius: 12px;
      font-size: 1rem;
      color: #2c3e50;
    }
    .form-group input:focus {
      outline: none;
      border-color: #e67e22;
      box-shadow: 0 0 8px rgba(230, 126, 34, 0.4);
    }
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
    }
    .submit-btn:hover {
      background: #d35400;
      box-shadow: 0 12px 20px rgba(211, 84, 0, 0.5);
      transform: translateY(-3px);
    }
    .signup-prompt {
      margin-top: 1rem;
      font-weight: 300;
      color: #34495e;
    }
    .signup-prompt a {
      color: #e67e22;
      font-weight: 600;
      text-decoration: none;
    }
    .signup-prompt a:hover {
      color: #d35400;
    }
    @keyframes fadeInScale {
      0% { opacity: 0; transform: scale(0.85); }
      100% { opacity: 1; transform: scale(1); }
    }
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
</head>
<body>
  <header>
    <a href="index.php" class="logo">RoamHorizon</a>
  </header>

  <section class="login">
    <div class="login-container">
      <h2>Login</h2>
      <form class="login-form" method="post" action="">
        <?php if (!empty($error)): ?>
          <p style="color: red; font-weight: bold;"><?= htmlspecialchars($error) ?></p>
        <?php endif; ?>
        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="submit-btn">Login</button>
      </form>
      <p class="signup-prompt">Don't have an account? <a href="signup.php">Sign up</a></p>
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
