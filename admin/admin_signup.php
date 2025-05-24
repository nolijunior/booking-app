<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Signup</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Inter', sans-serif;
      background: #f1f5f9;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .signup-container {
      background: #ffffff;
      padding: 2rem;
      border-radius: 0.75rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }
    h1 {
      text-align: center;
      margin-bottom: 1.5rem;
      font-size: 1.5rem;
      font-weight: 600;
    }
    .form-group {
      margin-bottom: 1rem;
    }
    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 500;
    }
    input {
      width: 100%;
      padding: 0.75rem;
      border-radius: 0.5rem;
      border: 1px solid #cbd5e1;
      font-size: 1rem;
    }
    button {
      width: 100%;
      padding: 0.75rem;
      background: #3b82f6;
      color: #ffffff;
      font-size: 1rem;
      font-weight: 600;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background: #2563eb;
    }
    .message {
      margin-top: 1rem;
      text-align: center;
      font-size: 0.95rem;
      color: #16a34a;
      display: none;
    }
  </style>
</head>
<body>
  <div class="signup-container">
    <h1>Admin Signup</h1>
    <form id="signupForm">
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
      </div>
      <button type="submit"><i class="fas fa-user-plus"></i> Signup</button>
    </form>
    <div class="message" id="successMessage">Signup successful!</div>
  </div>

  <script>
    document.getElementById('signupForm').addEventListener('submit', function(event) {
      event.preventDefault();

      // Here you'd send signup data to the backend (e.g., via AJAX or form submission)
      // For now, just show a success message without redirecting
      document.getElementById('successMessage').style.display = 'block';

      // Optionally clear the form
      this.reset();
    });
  </script>
</body>
</html>
