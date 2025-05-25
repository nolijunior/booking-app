<?php require_once '../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel - Dashboard</title>
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
    }

    .admin-container {
      display: flex;
      height: 100vh;
    }

    .sidebar {
      width: 260px;
      background: #1e293b;
      display: flex;
      flex-direction: column;
      justify-content: space-between;
      padding: 2rem 1rem;
    }

    .logo h2 {
      font-size: 1.5rem;
      font-weight: 600;
      color: #ffffff;
      text-align: center;
      margin-bottom: 2rem;
    }

    .menu {
      display: flex;
      flex-direction: column;
      gap: 1rem;
    }

    .menu-item {
      display: flex;
      align-items: center;
      gap: 0.75rem;
      font-size: 1rem;
      color: #cbd5e1;
      text-decoration: none;
      padding: 0.75rem 1rem;
      border-radius: 0.5rem;
      transition: background 0.3s ease;
    }

    .menu-item:hover,
    .menu-item.active {
      background: #334155;
      color: #ffffff;
    }

    .logout {
      margin-top: auto;
      padding-top: 1rem;
      border-top: 1px solid #475569;
    }

    .main-content {
      flex: 1;
      padding: 2rem;
      overflow-y: auto;
    }

    .welcome {
      text-align: center;
      font-size: 2.5rem;
      font-weight: bold;
      color: #1e293b;
      margin-bottom: 2rem;
      text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.1);
    }

    .dashboard-cards {
      display: flex;
      gap: 2rem;
      justify-content: center;
    }

    .card {
      flex: 1;
      min-width: 200px;
      background: #fff;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
      transition: transform 0.3s, box-shadow 0.3s;
      text-align: center;
    }

    .card:hover {
      transform: translateY(-5px);
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.2);
    }

    .card i {
      font-size: 2rem;
      margin-bottom: 0.5rem;
      display: block;
    }

    .users-card i {
      color: #3b82f6;
    }

    .bookings-card i {
      color: #10b981;
    }

    .feedbacks-card i {
      color: #f59e0b;
    }

    .card h3 {
      font-size: 1rem;
      color: #64748b;
    }

    .card .counter {
      font-size: 2rem;
      font-weight: bold;
      margin-top: 0.5rem;
      transition: all 0.5s ease-in-out;
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
        <a href="dashboard.php" class="menu-item active"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        <a href="users.php" class="menu-item"><i class="fas fa-users"></i> Users</a>
        <a href="bookings.php" class="menu-item"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="feedback.php" class="menu-item"><i class="fas fa-comment-dots"></i> Feedback</a>
      </nav>
      <div class="logout">
        <a href="logout.php" class="menu-item"><i class="fas fa-sign-out-alt"></i> Log out</a>
      </div>
    </aside>
    <main class="main-content">
      <div class="welcome">Welcome to your admin panel</div>
      <div class="dashboard-cards">
        <div class="card users-card">
          <i class="fas fa-users"></i>
          <h3>Total Users</h3>
          <div class="counter" id="userCount">0</div>
        </div>
        <div class="card bookings-card">
          <i class="fas fa-calendar-check"></i>
          <h3>Total Bookings</h3>
          <div class="counter" id="bookingCount">0</div>
        </div>
        <div class="card feedbacks-card">
          <i class="fas fa-comment-dots"></i>
          <h3>Total Feedbacks</h3>
          <div class="counter" id="feedbackCount">0</div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>