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
  background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
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
  width: 100%;
  padding: 1.5rem 3rem;
  background: rgba(255, 255, 255, 0.85);
  box-shadow: 0 4px 15px rgba(0,0,0,0.05);
  display: flex;
  justify-content: flex-start;
  align-items: center;
  position: sticky;
  top: 0;
  backdrop-filter: saturate(180%) blur(20px);
  border-radius: 0 0 20px 20px;
  z-index: 1000;
  transition: background-color 0.3s ease;
}

header:hover {
  background: rgba(255, 255, 255, 1);
}

.logo {
  font-family: 'Paytone One', sans-serif;
  font-size: 2rem;
  color: #2c3e50;
  letter-spacing: 2px;
  text-decoration: none;
  user-select: none;
  transition: color 0.3s ease;
}

.logo:hover {
  color: #e67e22;
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
    <a href="index.html" class="logo" aria-label="RoamHorizon Home">RoamHorizon</a>
  </header>

  <section class="signup-section" aria-labelledby="signup-title">
    <div class="signup-container">
      <h2 id="signup-title">Create Your Account</h2>
      <form class="signup-form" novalidate>
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
    </div>
  </section>

  <footer>
    <p>RoamHorizon Travels <br />Copyright ©2024 All Rights Reserved</p>
  </footer>
</body>
</html>
