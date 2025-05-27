<?php require_once '../includes/header.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel - Dashboard</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600;700&display=swap" rel="stylesheet" />
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

    .welcome {
      text-align: center;
      font-size: 2.5rem;
      font-weight: 700;
      color: #ffffff;
      margin-bottom: 2rem;
      text-shadow: 2px 2px 12px rgba(255, 111, 97, 0.3);
      background: linear-gradient(90deg, #ff6f61, #ff9f43);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      animation: fadeIn 1s ease-in-out;
    }

    @keyframes fadeIn {
      0% { opacity: 0; transform: translateY(-20px); }
      100% { opacity: 1; transform: translateY(0); }
    }

    .dashboard-cards {
      display: flex;
      gap: 2rem;
      justify-content: center;
      flex-wrap: wrap;
    }

    .card {
      flex: 1;
      min-width: 220px;
      max-width: 300px;
      background: linear-gradient(145deg, #2a2a3d, #1e1e2f);
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.4), inset 0 2px 5px rgba(255, 111, 97, 0.1);
      transition: all 0.3s ease;
      text-align: center;
      position: relative;
      overflow: hidden;
    }

    .card::before {
      content: '';
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background: linear-gradient(90deg, rgba(255, 111, 97, 0.2), transparent);
      opacity: 0;
      transition: opacity 0.3s ease;
    }

    .card:hover::before {
      opacity: 1;
    }

    .card:hover {
      transform: translateY(-8px) scale(1.02);
      box-shadow: 0 15px 40px rgba(0, 0, 0, 0.5);
    }

    .card i {
      font-size: 2.5rem;
      margin-bottom: 0.75rem;
      display: block;
      transition: transform 0.3s ease;
    }

    .card:hover i {
      transform: scale(1.1);
    }

    .users-card i {
      color: #ff6f61;
    }

    .bookings-card i {
      color: #ff9f43;
    }

    .feedbacks-card i {
      color: #00ddeb;
    }

    .card h3 {
      font-size: 1.1rem;
      color: #a0a0b0;
      letter-spacing: 0.5px;
      margin-bottom: 0.5rem;
    }

    .card .counter {
      font-size: 2.5rem;
      font-weight: 700;
      background: linear-gradient(90deg, #ff6f61, #ff9f43);
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      transition: all 0.5s ease-in-out;
    }

    .card .counter::after {
      content: '';
      display: block;
      width: 40px;
      height: 2px;
      background: #ff6f61;
      margin: 0.5rem auto;
      border-radius: 2px;
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
        <?php
        require_once '../config/db.php';

        // Count all users
        $sql_user = "SELECT COUNT(*) AS total FROM users WHERE user_id != 1";
        $result_user = $conn->query($sql_user);
        $userCount = 0;
        if ($result_user && $row = $result_user->fetch_assoc()) {
          $userCount = $row['total'];
        }

        // Count all bookings
        $sql_booking = "SELECT COUNT(*) AS total FROM bookings";
        $result_booking = $conn->query($sql_booking);
        $bookingCount = 0;
        if ($result_booking && $row = $result_booking->fetch_assoc()) {
          $bookingCount = $row['total'];
        }

        // Count all feedbacks 
        $sql_feedbacks = "SELECT COUNT(*) AS total FROM feedbacks";
        $result_feedback = $conn->query($sql_feedbacks);
        $feedbackCount = 0;
        if ($result_feedback && $row = $result_feedback->fetch_assoc()) {
          $feedbackCount = $row['total'];
        }
        ?>
        <div class="card users-card">
          <i class="fas fa-users"></i>
          <h3>Total Users</h3>
          <div class="counter" id="userCount"><?= $userCount ?></div>
        </div>
        <div class="card bookings-card">
          <i class="fas fa-calendar-check"></i>
          <h3>Total Bookings</h3>
          <div class="counter" id="bookingCount"><?= $bookingCount ?></div>
        </div>
        <div class="card feedbacks-card">
          <i class="fas fa-comment-dots"></i>
          <h3>Total Feedbacks</h3>
          <div class="counter" id="feedbackCount"><?= $feedbackCount ?></div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>