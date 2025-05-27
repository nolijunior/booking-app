<?php require_once '../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel - Users</title>
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
      background: linear-gradient(135deg, #1e1e2f 0%, #2a2a3d 100%);
      color: #e0e0e0;
      min-height: 100vh;
      overflow: hidden;
    }

    .admin-container {
      display: flex;
      height: 100vh;
    }

    .sidebar {
      width: 260px;
      background: #252537;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 2rem 1rem;
      box-shadow: 4px 0 20px rgba(0, 0, 0, 0.3);
      position: relative;
      z-index: 10;
    }

    .logo h2 {
      font-size: 1.8rem;
      font-weight: 700;
      color: #ffffff;
      text-align: center;
      margin-bottom: 2rem;
      background: linear-gradient(90deg, #ff6f61, #ff9f43);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
    }

    .menu {
      display: flex;
      flex-direction: column;
      gap: 0.75rem;
    }

    .menu-item {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-size: 1rem;
      color: #a0a0b0;
      text-decoration: none;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
      transition: all 0.3s ease;
    }

    .menu-item:hover,
    .menu-item.active {
      background: #ff6f61;
      color: #ffffff;
      transform: translateX(5px);
    }

    .menu-item i {
      font-size: 1.2rem;
    }

    .logout {
      margin-top: auto;
      padding-top: 1rem;
      border-top: 1px solid #3a3a50;
    }

    .main-content {
      flex: 1;
      padding: 2rem;
      overflow-y: auto;
      background: #1e1e2f;
      position: relative;
    }

    .main-content::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: radial-gradient(circle at 50% 50%, rgba(255, 111, 97, 0.1), transparent);
      z-index: 0;
    }

    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
      position: relative;
      z-index: 1;
    }

    .topbar h1 {
      font-size: 2rem;
      font-weight: 700;
      background: linear-gradient(90deg, #ff6f61, #ff9f43);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      text-shadow: 2px 2px 12px rgba(255, 111, 97, 0.3);
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(-20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .create-button {
      padding: 0.5rem 1.5rem;
      background: linear-gradient(90deg, #ff6f61, #ff9f43);
      color: #ffffff;
      border: none;
      border-radius: 0.375rem;
      cursor: pointer;
      font-weight: 600;
      font-size: 1rem;
      transition: all 0.3s ease;
      box-shadow: 0 4px 15px rgba(255, 111, 97, 0.3);
    }

    .create-button:hover {
      transform: translateY(-2px);
      box-shadow: 0 6px 20px rgba(255, 111, 97, 0.5);
      background: linear-gradient(90deg, #ff9f43, #ff6f61);
    }

    table {
      width: 100%;
      border-collapse: collapse;
      background: linear-gradient(145deg, #2a2a3d, #1e1e2f);
      border-radius: 0.5rem;
      overflow: hidden;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4);
      position: relative;
      z-index: 1;
    }

    th,
    td {
      padding: 1rem;
      text-align: left;
      border-bottom: 1px solid #3a3a50;
    }

    th {
      background: #252537;
      font-weight: 600;
      color: #ff9f43;
      text-transform: uppercase;
      letter-spacing: 1px;
      position: sticky;
      top: 0;
      z-index: 2;
    }

    td {
      color: #e0e0e0;
      font-size: 0.95rem;
    }

    tr {
      transition: background 0.3s ease;
    }

    tr:hover {
      background: rgba(255, 111, 97, 0.2);
    }

    .action-buttons button {
      padding: 0.3rem 0.75rem;
      border: none;
      border-radius: 0.375rem;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
    }

    .action-buttons .update-button {
      background: #00ddeb;
      color: #ffffff;
      margin-right: 0.5rem;
    }

    .action-buttons .update-button:hover {
      background: #00c4d3;
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(0, 221, 235, 0.3);
    }

    .action-buttons .delete-button {
      background: #ff4d4f;
      color: #ffffff;
    }

    .action-buttons .delete-button:hover {
      background: #e63946;
      transform: translateY(-2px);
      box-shadow: 0 4px 15px rgba(255, 77, 79, 0.3);
    }

    .empty-message {
      text-align: center;
      padding: 2rem;
      color: #a0a0b0;
      font-size: 1.1rem;
      font-style: italic;
    }
  </style>
</head>

<body>
  <div class="admin-container">
    <aside class="sidebar">
      <div class="logo">
        <h2><i class="fas fa-user-cog"></i> RoamHorizon</h2>
      </div>
      <nav class="menu">
        <a href="dashboard.php" class="menu-item"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="users.php" class="menu-item active"><i class="fas fa-users"></i> Users</a>
        <a href="bookings.php" class="menu-item"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="feedback.php" class="menu-item"><i class="fas fa-comment-dots"></i> Feedback</a>
      </nav>
      <div class="logout">
        <a href="logout.php" class="menu-item"><i class="fas fa-sign-out-alt"></i> Log out</a>
      </div>
    </aside>
    <main class="main-content">
      <div class="topbar">
        <h1>Users</h1>
        <a href="create_user.php"><button class="create-button">Create</button></a>
      </div>
      <?php
      require_once("../config/db.php");

      // Fetch users from the database
      $sql = "SELECT * FROM users WHERE user_id != 1";
      $result = $conn->query($sql);
      // var_dump($result);
      ?>
      <table>
        <thead>
          <tr>
            <!-- <th>row</th> -->
            <th>Full Name</th>
            <th>Email</th>
            <th>Contact Number</th>
            <th>Action</th>
          </tr>
        </thead>
        <tbody id="userTableBody">
          <?php if ($result && $result->num_rows > 0): ?>
            <?php while ($row = $result->fetch_assoc()): ?>
              <tr>
                <td><?= htmlspecialchars($row['full_name']) ?></td>
                <td><?= htmlspecialchars($row['email']) ?></td>
                <td><?= htmlspecialchars($row['contact_number']) ?></td>
                <td>
                  <!-- Add your update/delete buttons here -->
                  <a href="update_user.php?id=<?= $row['user_id'] ?>"><button style="padding: 0.3rem 0.75rem; background-color: #f59e0b; color: white; border: none; border-radius: 0.375rem; margin-right: 0.25rem;">Update</button></a>
                  <a href="delete_user.php?id=<?= $row['user_id'] ?>" onclick="return confirm('Are you sure you want to delete this user?');"><button style="padding: 0.3rem 0.75rem; background-color: #ef4444; color: white; border: none; border-radius: 0.375rem;">Delete</button></a>
                </td>
              </tr>
            <?php endwhile; ?>
          <?php else: ?>
            <!-- <tr id="noUserRow">
              <td colspan="4" class="empty-message">No users found</td>
            </tr> -->
          <?php endif; ?>
        </tbody>
      </table>
    </main>
  </div>

</body>

</html>