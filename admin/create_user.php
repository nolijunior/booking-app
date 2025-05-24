<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create User</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
    body {
      font-family: 'Inter', sans-serif;
      background: #f1f5f9;
      color: #1e293b;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
    }
    .form-container {
      background: #ffffff;
      padding: 2rem;
      border-radius: 0.75rem;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
      width: 100%;
      max-width: 500px;
    }
    h1 {
      margin-bottom: 1.5rem;
      text-align: center;
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
      background: #2563eb;
      color: #ffffff;
      font-size: 1rem;
      font-weight: 600;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }
    button:hover {
      background: #1d4ed8;
    }
  </style>
</head>
<body>
  <div class="form-container">
    <h1>Create User</h1>
    <form id="createUserForm">
      <div class="form-group">
        <label for="fullname">Full Name</label>
        <input type="text" id="fullname" name="fullname" required />
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="email" id="email" name="email" required />
      </div>
      <div class="form-group">
        <label for="contact">Contact Number</label>
        <input type="text" id="contact" name="contact" required />
      </div>
      <div class="form-group">
        <label for="username">Username</label>
        <input type="text" id="username" name="username" required />
      </div>
      <div class="form-group">
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
      </div>
      <button type="submit">Create User</button>
    </form>
  </div>

  <script>
    document.getElementById('createUserForm').addEventListener('submit', function(event) {
      event.preventDefault();
      // Simulated submit action
      window.location.href = 'users.php';
    });
  </script>
</body>
</html>
