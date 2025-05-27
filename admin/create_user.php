<?php require_once '../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Create User</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', sans-serif;
      background: linear-gradient(135deg, #f9f9fb 0%, #eef2f7 100%);
      color: #2d3748;
      display: flex;
      align-items: center;
      justify-content: center;
      height: 100vh;
      overflow: hidden;
    }

    .form-container {
      background: #ffffff;
      padding: 2.5rem;
      border-radius: 1rem;
      box-shadow: 0 8px 24px rgba(0, 0, 0, 0.1), inset 0 2px 4px rgba(255, 255, 255, 0.5);
      width: 100%;
      max-width: 500px;
      position: relative;
      overflow: hidden;
    }

    .form-container::before {
      content: '';
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255, 111, 97, 0.1), transparent 70%);
      z-index: 0;
      opacity: 0.3;
    }

    h1 {
      margin-bottom: 2rem;
      text-align: center;
      font-size: 1.75rem;
      font-weight: 700;
      background: linear-gradient(90deg, #ff6f61, #ff9f43);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 1px 1px 6px rgba(255, 111, 97, 0.2);
      position: relative;
      z-index: 1;
    }

    .form-group {
      margin-bottom: 1.5rem;
      position: relative;
      z-index: 1;
    }

    label {
      display: block;
      margin-bottom: 0.5rem;
      font-weight: 600;
      color: #4a5568;
    }

    input {
      width: 100%;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
      border: 1px solid #e2e8f0;
      font-size: 1rem;
      transition: all 0.3s ease;
      background: #fafafa;
    }

    input:focus {
      border-color: #ff6f61;
      box-shadow: 0 0 8px rgba(255, 111, 97, 0.2);
      outline: none;
    }

    button {
      width: 100%;
      padding: 0.85rem;
      background: linear-gradient(90deg, #ff6f61, #ff9f43);
      color: #ffffff;
      font-size: 1.1rem;
      font-weight: 600;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      transition: all 0.3s ease;
      box-shadow: 0 4px 12px rgba(255, 111, 97, 0.3);
      position: relative;
      z-index: 1;
    }

    button:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 16px rgba(255, 111, 97, 0.4);
      background: linear-gradient(90deg, #ff9f43, #ff6f61);
    }

    .error-message {
      color: #e53e3e;
      margin-bottom: 1rem;
      font-size: 0.9rem;
      text-align: center;
    }

    .success-message {
      color: #38a169;
      margin-bottom: 1rem;
      font-size: 0.9rem;
      text-align: center;
    }
  </style>
</head>

<body>
  <?php
  require_once("../config/db.php");
  $confirmation = "";
  $error = "";

  if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // var_dump($_POST);
    $fullname = trim($_POST['fullname'] ?? '');
    $email = trim($_POST['email'] ?? '');
    $contact = trim($_POST['contact'] ?? '');
    $password = $_POST['password'] ?? '';

    if ($fullname && $email && $contact  && $password) {
      $fullname_esc = $conn->real_escape_string($fullname);
      $email_esc = $conn->real_escape_string($email);
      $contact_esc = $conn->real_escape_string($contact);
      $password_esc = $conn->real_escape_string($password);

      $sql = "INSERT INTO users (full_name, email, contact_number, password) VALUES ('$fullname_esc', '$email_esc', '$contact_esc', '$password_esc')";

      if ($conn->query($sql) === TRUE) {
        // Output JS for alert and redirect
        echo "<script>
        alert('User created successfully!');
        window.location.href = 'users.php';
      </script>";
        exit;
      } else {
        $error = "Error creating user: " . $conn->error;
      }
    } else {
      $error = "All fields are required.";
    }
  }
  ?>
  <div class="form-container">
    <h1>Create User</h1>
    <form id="createUserForm" method="POST" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>">
      <?php if ($confirmation): ?>
        <div style="color: green; margin-bottom: 1rem;"><?= htmlspecialchars($confirmation) ?></div>
      <?php elseif ($error): ?>
        <div style="color: red; margin-bottom: 1rem;"><?= htmlspecialchars($error) ?></div>
      <?php endif; ?>
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
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required />
      </div>
      <button type="submit">Create User</button>
    </form>
  </div>

  <script>
    document.getElementById('createUserForm').addEventListener('submit', function(event) {
      if (!confirm('Are you sure you want to create this user?')) {
        event.preventDefault(); // Stop submission if canceled
      }
      // If confirmed, form submits to self (same page)
    });
  </script>
</body>

</html>