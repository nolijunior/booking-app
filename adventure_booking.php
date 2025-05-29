<?php
session_start();
require_once("config/db.php");

// Redirect to login if not logged in
if (!isset($_SESSION['email']) || $_SESSION['email'] === 'admin@admin.com') {
    header("Location: login.php");
    exit();
}

$destination = $_GET['destination'] ?? '';

// Get user info from session
$email = $_SESSION['email'];
$full_name = "";
$user_id = 0;

// Fetch user details from database
$stmt = $conn->prepare("SELECT user_id, full_name FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    $user_id = $user['user_id'];
    $full_name = $user['full_name'];
} else {
    die("User not found.");
}
$stmt->close();

// Handle booking form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $destinationPost = urldecode($_GET['destination']);
    $travel_date = $_POST['date'] ?? '';
    $number_of_person = intval($_POST['persons'] ?? 0);
    $price_per_person = floatval($_POST['price'] ?? 0);
    $special_request = trim($_POST['request'] ?? '');
    $total_price = $price_per_person * $number_of_person;
    
    header("Location: payment.php?destination=" . $destinationPost . "&travel_date=" . $travel_date . "&number_of_person=".$number_of_person."&special_request=".$special_request."&total_price=".$total_price);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Adventure & Exploration | RoamHorizon</title>
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Paytone+One&family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <style>
        body {
            background: url('img/background21.jpg') no-repeat center center fixed;
            background-size: cover;
            font-family: 'Poppins', sans-serif;
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
            background: rgba(255, 255, 255, 0.5);
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
            background: rgba(255, 255, 255, 0);
            transition: background 0.3s, padding 0.3s;
        }
        header.scrolled {
            background: rgba(255, 255, 255, 0.9);
            padding: 1rem 3rem;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        .logo {
            font-family: 'Paytone One', sans-serif;
            font-size: 2rem;
            color: #2c3e50;
            letter-spacing: 2px;
            text-decoration: none;
            transition: color 0.3s;
            font-weight: 700;
        }
        .logo:hover { color: #e67e22; }
        main {
            max-width: 800px; /* Increased width for larger containers */
            margin: 2rem auto;
            padding: 0 1rem;
        }
        .booking-details {
            background: #fff;
            padding: 2.5rem; /* Increased padding for larger container */
            border-radius: 0.8rem; /* Slightly reduced for more rectangular look */
            box-shadow: 0 4px 16px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
            min-height: 400px; /* Set minimum height for rectangular shape */
        }
        .booking-details h2 {
            color: #2c3e50;
            margin-top: 0;
            text-align: center;
        }
        .price {
            font-size: 1.5rem;
            color: #e67e22;
            font-weight: 700;
            margin: 0.5rem 0;
            text-align: center;
        }
        .duration {
            font-size: 1.2rem;
            color: #555f6e;
            margin-bottom: 1rem;
            text-align: center;
        }
        .description {
            font-size: 1rem;
            color: #555f6e;
            margin-bottom: 1.5rem;
            text-align: center;
        }
        .inclusions h3 {
            font-size: 1.2rem;
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }
        .inclusions ul {
            list-style: none;
            padding-left: 0;
        }
        .inclusions ul li {
            margin-bottom: 0.5rem;
            padding-left: 1.5rem;
            position: relative;
        }
        .inclusions ul li::before {
            content: "";
            position: absolute;
            left: 0;
            top: 0.5rem;
            width: 1rem;
            height: 1rem;
            background: url('data:image/svg+xml;utf8,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="%23e67e22"><path d="M20.285 2l-11.285 11.567-5.286-5.011-3.714 3.716 9 8.728 15-15.285z"/></svg>') no-repeat;
            background-size: contain;
        }
        .booking-form {
            background: #fff;
            padding: 2.5rem;
            border-radius: 0.8rem; /* Slightly reduced for more rectangular look */
            box-shadow: 0 4px 16px rgba(0,0,0,0.05);
            text-align: center;
            min-height: 500px; /* Set minimum height for rectangular shape */
        }
        .booking-form h3 {
            color: #2c3e50;
            margin-bottom: 1rem;
            font-size: 1.5rem;
        }
        .booking-form p {
            color: #555f6e;
            margin-bottom: 1.5rem;
            font-size: 1rem;
        }
        .form-group {
            margin-bottom: 1.5rem;
            text-align: left;
        }
        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 500;
            color: #2c3e50;
        }
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 0.5rem;
            font-size: 1rem;
            color: #2c3e50;
            background: #f9f9f9;
        }
        .form-group input[readonly] {
            background: #e9ecef;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
            border-color: #e67e22;
            outline: none;
        }
        .form-group textarea {
            resize: vertical;
        }
        .form-buttons {
            display: flex;
            justify-content: center;
            gap: 1rem;
        }
        .form-submit, .form-cancel {
            padding: 0.8rem 2rem;
            border: none;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 2rem;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
        }
        .form-submit {
            background: #f28c38;
            color: #fff;
        }
        .form-submit:hover {
            background: #e67e22;
            transform: translateY(-2px);
        }
        .form-cancel {
            background: #f28c38;
            color: #fff;
        }
        .form-cancel:hover {
            background: #e67e22;
            transform: translateY(-2px);
        }
    </style>
</head>
<body>
    <header>
        <a href="index.php" class="logo">RoamHorizon</a>
    </header>
    <main>
        <!-- Booking Details -->
        <div class="booking-details">
            <h2>Adventure & Exploration</h2>
            <?php $pricePerPerson = 7999; ?>
            <div class="price">₱<?php echo number_format($pricePerPerson, 2);?> per person</div>
            <div class="duration">3 Days, 2 Nights</div>
            <p class="description">
                Embark on an unforgettable journey with our Adventure & Exploration package. Designed for thrill-seekers and nature lovers, this package offers heart-pumping activities and breathtaking landscapes.
            </p>
            <div class="inclusions">
                <h3>Package Inclusions:</h3>
                <ul>
                    <li>Guided hikes through scenic trails</li>
                    <li>Canyoning and waterfall rappelling</li>
                    <li>Night campfire and storytelling</li>
                    <li>Meals: 2 breakfasts, 2 lunches, 2 dinners</li>
                    <li>Comfortable camping equipment</li>
                    <li>Experienced adventure guides</li>
                    <li>Round-trip transportation</li>
                    <li>Travel insurance</li>
                </ul>
            </div>
        </div>

        <!-- Booking Form -->
        <form class="booking-form" action="adventure_booking.php?destination=<?php echo urlencode($destination); ?>" method="POST">
            <h3>Book Your Adventure</h3>
            <p>Please fill in the details to confirm your booking.</p>
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" value="<?php echo htmlspecialchars($full_name); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" value="<?php echo htmlspecialchars($email); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="destination">Destination</label>
                <input type="text" value="<?php echo htmlspecialchars($destination); ?>" readonly>
            </div>
            <div class="form-group">
                <label for="date">Preferred Travel Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="persons">Number of Persons</label>
                <input type="number" id="persons" name="persons" min="1" placeholder="How many people?" required>
            </div>
            <div class="form-group">
                <label for="request">Special Requests</label>
                <textarea id="request" name="request" placeholder="Any special requests or notes (e.g., dietary restrictions, allergies, etc.)"></textarea>
            </div>
            <div class="form-buttons">
                <button type="submit" class="form-submit">Book Now</button>
            </div>
            <input type="hidden" name="price" value="<?php echo $pricePerPerson?>">
        </form>
    </main>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const header = document.querySelector('header');
            window.addEventListener('scroll', function () {
                if (window.scrollY > 50) {
                    header.classList.add('scrolled');
                } else {
                    header.classList.remove('scrolled');
                }
            });
        });
    </script>
</body>
</html>