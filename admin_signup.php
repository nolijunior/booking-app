<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Login | RoamHorizon</title>
    <style>
        body {
            background: url('https://images.unsplash.com/photo-1506744038136-46273834b3fb?auto=format&fit=crop&w=1920&q=80') no-repeat center center fixed;
            background-size: cover;
            font-family: Arial, sans-serif;
            color: #2c3e50;
            line-height: 1.7;
            position: relative;
            min-height: 100vh;
            margin: 0;
        }
        body::before {
            content: "";
            position: fixed;
            inset: 0;
            background: rgba(255, 255, 255, 0.18);
            z-index: -1;
        }
        header {
            background: rgba(255, 255, 255, 0.92);
            box-shadow: 0 4px 24px rgba(0,0,0,0.05);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 0 0 1rem 1rem;
            backdrop-filter: blur(14px);
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .logo {
            font-family: 'Arial', sans-serif;
            font-size: 1.8rem;
            color: #2c3e50;
            letter-spacing: 2px;
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 700;
        }
        .logo:hover { color: #e67e22; }
        .navbar ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
            align-items: center;
        }
        .navbar ul li a {
            color: #34495e;
            font-weight: 600;
            font-size: 1rem;
            text-decoration: none;
            position: relative;
            transition: color 0.3s;
            padding-bottom: 0.25rem;
        }
        .navbar ul li a:hover {
            color: #e67e22;
        }
        main {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        .auth-card {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 16px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }
        .auth-card h2 {
            color: #2c3e50;
            margin-top: 0;
        }
        .form-group {
            margin-bottom: 1.5rem;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
            color: #2c3e50;
        }
        .form-group input {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 0.8rem;
            font-size: 1rem;
            transition: border 0.3s;
        }
        .form-group input:focus {
            border-color: #e67e22;
            outline: none;
        }
        .form-submit {
            background: linear-gradient(90deg, #e67e22, #f6b93b);
            color: #fff;
            border: none;
            padding: 1rem 2rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 2rem;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 4px 15px rgba(230,126,34,0.13);
            width: 100%;
        }
        .form-submit:hover {
            background: linear-gradient(90deg, #f6b93b, #e67e22);
            transform: translateY(-2px) scale(1.04);
        }
        .switch-form {
            text-align: center;
            margin-top: 1rem;
        }
        .switch-form button {
            background: none;
            border: none;
            color: #e67e22;
            font-weight: 600;
            cursor: pointer;
            text-decoration: underline;
        }
        .switch-form button:hover {
            color: #f6b93b;
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">RoamHorizon</a>
    </header>
    <main>
        <div class="auth-card">
    <h2>Admin Sign Up</h2>
    <form id="signupForm">
        <div class="form-group">
            <label for="signup-name">Full Name</label>
            <input type="text" id="signup-name" name="name" placeholder="Enter your full name" required>
        </div>
        <div class="form-group">
            <label for="signup-email">Email</label>
            <input type="email" id="signup-email" name="email" placeholder="Enter your email" required>
        </div>
        <div class="form-group">
            <label for="signup-password">Password</label>
            <input type="password" id="signup-password" name="password" placeholder="Enter your password" required>
        </div>
        <button type="submit" class="form-submit">Sign Up</button>
    </form>
    <div class="switch-form">
        <p>Already have an account? <a href="admin-login.html">Login</a></p>
    </div>
</div>
    </main>
    <script>
    document.getElementById('signupForm').addEventListener('submit', function(e) {
        e.preventDefault();
        alert('Signup successful! Redirecting to login...');
        window.location.href = 'admin-login.html';
    });
</script>

</body>
</html>
