<?php require_once '../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Update User</title>
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
      background: #10b981;
      color: #ffffff;
      font-size: 1rem;
      font-weight: 600;
      border: none;
      border-radius: 0.5rem;
      cursor: pointer;
      transition: background 0.3s ease;
    }

    button:hover {
      background: #059669;
    }
  </style>
</head>

<body>
  <div class="form-container">
    <h1>Update User</h1>
    <?php
    require_once("../config/db.php");

    $user_id = intval($_GET['id'] ?? 0);
    $error = "";
    $user = null;

    // Fetch user data to prefill the form
    if ($user_id) {
      $sql = "SELECT * FROM users WHERE user_id = $user_id";
      $result = $conn->query($sql);
      $user = $result ? $result->fetch_assoc() : null;
    } else {
      $error = "No user ID specified.";
    }

    // Handle form submission
    if ($_SERVER["REQUEST_METHOD"] === "POST" && $user_id) {
      $fullname = trim($_POST['fullname'] ?? '');
      $email = trim($_POST['email'] ?? '');
      $contact = trim($_POST['contact'] ?? '');
      $password = $_POST['password'] ?? '';

      if ($fullname && $email && $contact && $password) {
        $fullname_esc = $conn->real_escape_string($fullname);
        $email_esc = $conn->real_escape_string($email);
        $contact_esc = $conn->real_escape_string($contact);
        $password_esc = $conn->real_escape_string($password);

        $sql = "UPDATE users SET full_name='$fullname_esc', email='$email_esc', contact_number='$contact_esc', password='$password_esc' WHERE user_id=$user_id";
        if ($conn->query($sql) === TRUE) {
          echo "<script>
                alert('User updated successfully!');
                window.location.href = 'users.php';
            </script>";
          exit;
        } else {
          $error = "Error updating user: " . $conn->error;
        }
      } else {
        $error = "All fields are required.";
      }
    }
    ?>

    <?php if ($error): ?>
      <div style="color: red; margin-bottom: 1rem;"><?= htmlspecialchars($error) ?></div>
    <?php endif; ?>
    <?php if ($user): ?>
      <form id="updateUserForm" method="POST" action="">
        <div class="form-group">
          <label for="fullname">Full Name</label>
          <input type="text" id="fullname" name="fullname" value="<?= htmlspecialchars($user['full_name']) ?>" required />
        </div>
        <div class="form-group">
          <label for="email">Email</label>
          <input type="email" id="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required />
        </div>
        <div class="form-group">
          <label for="contact">Contact Number</label>
          <input type="text" id="contact" name="contact" value="<?= htmlspecialchars($user['contact_number']) ?>" required />
        </div>
        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" id="password" name="password" value="<?= htmlspecialchars($user['password']) ?>" required />
        </div>
        <button type="submit">Update User</button>
      </form>
    <?php endif; ?>


    <script>
      document.getElementById('updateUserForm').addEventListener('submit', function(event) {
        if (!confirm('Are you sure you want to update this user?')) {
          event.preventDefault();
        }
      });
    </script>
</body>

</html>