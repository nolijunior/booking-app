<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Admin Panel - Feedback</title>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&display=swap" rel="stylesheet" />
  <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet" />
  <style>
    * { margin: 0; padding: 0; box-sizing: border-box; }
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
    .topbar {
      display: flex;
      justify-content: space-between;
      align-items: center;
      margin-bottom: 2rem;
    }
    .topbar h1 {
      font-size: 1.75rem;
      font-weight: bold;
    }
    table {
      width: 100%;
      border-collapse: collapse;
      background: #ffffff;
      border-radius: 0.5rem;
      overflow: hidden;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
    }
    th, td {
      padding: 1rem;
      text-align: left;
      border-bottom: 1px solid #e2e8f0;
    }
    th {
      background-color: #f8fafc;
      font-weight: 600;
    }
    .empty-message {
      text-align: center;
      padding: 2rem;
      color: #64748b;
      font-size: 1rem;
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
        <a href="users.php" class="menu-item"><i class="fas fa-users"></i> Users</a>
        <a href="bookings.php" class="menu-item"><i class="fas fa-calendar-check"></i> Bookings</a>
        <a href="feedback.php" class="menu-item active"><i class="fas fa-comment-dots"></i> Feedback</a>
      </nav>
      <div class="logout">
        <a href="logout.php" class="menu-item"><i class="fas fa-sign-out-alt"></i> Log out</a>
      </div>
    </aside>
    <main class="main-content">
      <div class="topbar">
        <h1>Feedback</h1>
      </div>
      <table>
        <thead>
          <tr>
            <th>Full Name</th>
            <th>Email</th>
            <th>Message</th>
          </tr>
        </thead>
        <tbody id="feedbackTableBody">
          <tr id="noFeedbackRow">
            <td colspan="3" class="empty-message">No feedbacks found</td>
          </tr>
        </tbody>
      </table>
    </main>
  </div>

  <script>
    const feedbacks = [];

    function renderFeedbacks() {
      const tbody = document.getElementById('feedbackTableBody');
      tbody.innerHTML = '';

      if (feedbacks.length > 0) {
        feedbacks.forEach(feedback => {
          const row = document.createElement('tr');
          row.innerHTML = `
            <td>${feedback.fullname}</td>
            <td>${feedback.email}</td>
            <td>${feedback.message}</td>
          `;
          tbody.appendChild(row);
        });
      } else {
        tbody.innerHTML = `<tr id="noFeedbackRow"><td colspan="3" class="empty-message">No feedbacks found</td></tr>`;
      }
    }

    renderFeedbacks();
  </script>
</body>
</html>
