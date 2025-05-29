<?php
session_start();
require_once("config/db.php");

if (!isset($_SESSION['email']) || $_SESSION['email'] === 'admin@admin.com') {
    header("Location: login.php");
    exit();
}

$email = $_SESSION['email'];
$destination = isset($_GET['destination']) ? $_GET['destination'] : '';
$totalPrice = isset($_GET['total_price']) ? $_GET['total_price'] : 0;


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // var_dump($_POST);
    // var_dump($_GET);
    
    $stmt1 = $conn->prepare("SELECT * FROM users WHERE email = ?");
    $stmt1->bind_param("s", $email);
    $stmt1->execute();
    $users = $stmt1->get_result()->fetch_assoc();
    // var_dump($users['user_id']);
    $stmt1->close();
    
    $userId = $users['user_id'] ?? null;

    $card_name = $_POST['card-name'] ?? '';
    $card_number = $_POST['card-number'] ?? '';
    $expiry = $_POST['expiry'] ?? '';
    $cvv = $_POST['cvv'] ?? '';

    $destination = $_GET['destination'] ?? '';
    $travel_date = $_GET['travel_date'] ?? '';
    $number_of_person = $_GET['number_of_person'] ?? 0;
    $special_request = $_GET['special_request'] ?? '';
    $total_price = $_GET['total_price'] ?? 0;

    $stmt = $conn->prepare("INSERT INTO bookings (user_id, destination, travel_date, number_of_person, special_request, price, card_name, card_number, card_expiry, card_cvv, payment_status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, 1)");
$stmt->bind_param(
    "isssssssss",
    $userId,
    $destination,
    $travel_date,
    $number_of_person,
    $special_request,
    $total_price,
    $card_name,
    $card_number,
    $expiry,
    $cvv
);

    if ($stmt->execute()) {        
         // give me a alert success message and redirect to index page
        echo "<script>alert('Payment successful! Your booking has been recorded.'); window.location.href='index.php';</script>";

    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Payment | RoamHorizon</title>
    <style>
        body {
    background: url('img/background21.jpg') no-repeat center center fixed;
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
    background: rgba(255, 255, 255, 0.7); /* Semi-transparent white overlay */
    z-index: -1;
}
        header {
    padding: 1.5rem 3rem;
    display: flex;
    justify-content: space-between;
    align-items: center;
    position: sticky;
    top: 0;
    z-index: 100;
    background: rgba(255, 255, 255, 0); /* Transparent at top */
    transition: background 0.3s, padding 0.3s; /* Smooth transition */
}

header.scrolled {
    background: rgba(255, 255, 255, 0.9); /* Semi-transparent white on scroll */
    padding: 1rem 3rem; /* Slightly reduced padding for compact look */
    box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1); /* Subtle shadow */
}

.logo {
    font-family: 'Paytone One', sans-serif;
    font-size: 2rem;
    color: #2c3e50;
    letter-spacing: 2px;
    text-decoration: none;
    transition: color 0.3s;
    font-weight: 700;
    user-select: none;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Shadow for readability */
}

.logo:hover {
    color: #e67e22;
}

.navbar ul {
    list-style: none;
    display: flex;
    gap: 2rem;
    align-items: center;
    margin: 0;
    padding: 0;
}

.navbar ul li a {
    color: #34495e;
    font-weight: 600;
    font-size: 1rem;
    text-decoration: none;
    position: relative;
    transition: color 0.3s;
    padding-bottom: 0.25rem;
    text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5); /* Shadow for readability */
}

.navbar ul li a:hover,
.navbar ul li a[aria-current="page"] {
    color: #e67e22;
}

.navbar ul li a::after {
    content: '';
    position: absolute;
    width: 0%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #e67e22;
    transition: width 0.3s;
}

.navbar ul li a:hover::after,
.navbar ul li a[aria-current="page"]::after {
    width: 100%;
}

        main {
            max-width: 800px;
            margin: 2rem auto;
            padding: 0 1rem;
        }
        .payment-details, .payment-form {
    background: #fff;
    padding: 2rem;
    border-radius: 1rem;
    box-shadow: 0 4px 16px rgba(0, 0, 0, 0.1); /* Subtle shadow */
    margin-bottom: 2rem;
}

.payment-details h2 {
    color: #2c3e50; 
    margin-top: 0;
    font-size: 1.8rem;
    text-align: center;
    background: rgba(39, 174, 96, 0.1); 
    padding: 0.5rem;
    border-radius: 0.5rem;
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
    border-radius: 0.5rem; /* Slightly rounded corners */
    font-size: 1rem;
    transition: border 0.3s;
}
.form-buttons {
    display: flex;
    gap: 1rem; /* space between buttons */
    justify-content: center;
}

.form-btn {
    background: #e67e22;
    color: #fff;
    border: none;
    padding: 1rem 2rem;
    font-size: 1.1rem;
    font-weight: 600;
    border-radius: 2rem;
    cursor: pointer;
    transition: background 0.3s, transform 0.2s;
    box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
    width: 150px; /* Set a fixed width */
    text-align: center;
}

.form-btn:hover {
    background: #e67e22;
    transform: translateY(-2px) scale(1.04);
}
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">RoamHorizon</a>
    </header>
    <main>
        <div class="payment-details">
            <h2>Pay for Your Booking</h2>
            <div class="amount">Total: ₱<?php echo number_format($totalPrice, 2); ?></div>
            <p>Thank you for booking with us! Please complete your payment to confirm your reservation.</p>
        </div>
        <form class="payment-form" method="POST" action="">
            <div class="form-group">
                <label for="card-name">Name on Card</label>
                <input type="text" id="card-name" name="card-name" placeholder="Enter name on card" required>
            </div>
            <div class="form-group">
                <label for="card-number">Card Number</label>
                <input type="text" id="card-number" name="card-number" placeholder="Enter card number" required>
            </div>
            <div class="form-group">
                <label for="expiry">Expiry Date</label>
                <input type="text" id="expiry" name="expiry" placeholder="MM/YY" required>
            </div>
            <div class="form-group">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="Enter CVV" required>
            </div>
           <div class="form-buttons">
    <button type="submit" class="form-btn">Pay Now</button>
    <button type="button" class="form-btn" onclick="window.location.href='destinations.php'">Cancel</button>
</div>
        </form>
        <script>
            document.querySelector('.payment-form').addEventListener('submit', function(event) {
                if (!confirm('Are you sure you want to proceed with the payment?')) {
                    event.preventDefault();
                }
            });
              </script>
    </main>
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const header = document.querySelector('header');
        const toggleBtn = document.getElementById('dropdownToggle');
        const dropdown = document.getElementById('accountDropdown');

        // Scroll event to toggle header class
        window.addEventListener('scroll', function () {
            if (window.scrollY > 50) { // Trigger after scrolling 50px
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    });
</script>
</body>
</html>
