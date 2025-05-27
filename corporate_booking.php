<?php  
session_start();
require_once("config/db.php");

$error = "";

// Check if user is logged in
if (!isset($_SESSION['email'])) {
    $destination = isset($_GET['destination']) ? urlencode($_GET['destination']) : '';
    header("Location: login.php?destination=$destination");
    exit();
}

// Get destination from URL
$destination = isset($_GET['destination']) ? $_GET['destination'] : '';

// Get user info from users table based on session email
$email = $_SESSION['email'];
$full_name = "";

$stmt = $conn->prepare("SELECT full_name, email FROM users WHERE email = ?");
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    $full_name = $user['full_name'];
} else {
    $error = "User not found.";
}
$stmt->close();

// Handle form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $travel_date = $_POST['date'];
    $number_of_person = $_POST['person'];
    $price = $_POST['price'];
    $special_request = $_POST['request'];

    $stmt = $conn->prepare("INSERT INTO bookings (full_name, email, destination, travel_date, number_of_person, price, special_request) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("ssssiis", $full_name, $email, $destination, $travel_date, $number_of_person, $price, $special_request);

    if ($stmt->execute()) {
        header("Location: payment.php?destination=" . urlencode($destination));
        exit();
    } else {
        $error = "Booking failed. Please try again.";
    }

    $stmt->close();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Corporate & Group Travel | RoamHorizon</title>
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
            padding: 1.5rem 3rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 0 0 1.5rem 1.5rem;
            backdrop-filter: blur(14px);
            position: sticky;
            top: 0;
            z-index: 100;
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
        .navbar ul {
            list-style: none;
            display: flex;
            gap: 2rem;
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
        .booking-details {
            background: #fff;
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 16px rgba(0,0,0,0.05);
            margin-bottom: 2rem;
        }
        .booking-details h2 {
            color: #2c3e50;
            margin-top: 0;
        }
        .price {
            font-size: 1.5rem;
            color: #e67e22;
            font-weight: 700;
            margin: 0.5rem 0;
        }
        .duration {
            font-size: 1.2rem;
            color: #555f6e;
            margin-bottom: 1rem;
        }
        .description {
            font-size: 1.1rem;
            color: #555f6e;
            margin-bottom: 1.5rem;
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
            padding: 2rem;
            border-radius: 1rem;
            box-shadow: 0 4px 16px rgba(0,0,0,0.05);
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
        .form-group input, .form-group select, .form-group textarea {
            width: 100%;
            padding: 0.8rem;
            border: 1px solid #ddd;
            border-radius: 0.8rem;
            font-size: 1rem;
            transition: border 0.3s;
        }
        .form-group input:focus, .form-group select:focus, .form-group textarea:focus {
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
        }
        .form-submit:hover {
            background: linear-gradient(90deg, #f6b93b, #e67e22);
            transform: translateY(-2px) scale(1.04);
        }
    </style>
</head>
<body>
    <main>
        <!-- Booking Details -->
        <div class="booking-details">
            <h2>Corporate & Group Travel</h2>
            <div class="price">₱15,999+ per group</div>
            <div class="duration">3 Days, 2 Nights (customizable)</div>
            <p class="description">
                Elevate your next corporate outing, team-building event, or group getaway with our Corporate & Group Travel package. Enjoy seamless planning, spacious accommodations, and curated group activities designed to foster teamwork and relaxation. Whether you’re organizing a company retreat, a family reunion, or a group adventure, we’ll handle every detail for a memorable experience.
            </p>
            <div class="inclusions">
                <h3>Package Inclusions:</h3>
                <ul>
                    <li>Spacious group accommodations or private villas</li>
                    <li>Customizable group itinerary</li>
                    <li>Team-building activities and workshops</li>
                    <li>Private group tours and excursions</li>
                    <li>Welcome reception and group meals</li>
                    <li>Dedicated group coordinator</li>
                    <li>Flexible transportation options</li>
                    <li>Exclusive group discounts</li>
                    <li>Family-friendly and team-oriented experiences</li>
                </ul>
            </div>
        </div>
        <!-- Booking Form -->
        <form class="booking-form" action="corporate_booking.php?destination=<?php echo urlencode($destination); ?>" method="POST">

            <input type="hidden" name="package" value="Corporate & Group Travel">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" value="<?php echo htmlspecialchars($full_name); ?>" readonly class="readonly">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" value="<?php echo htmlspecialchars($email); ?>" readonly class="readonly">
            </div>
            <div class="form-group">
     <div class="form-group">
      <label for="destination">Destination</label>
      <input type="text" value="<?php echo htmlspecialchars($destination); ?>" readonly class="readonly">
    </div>
            <!-- Phone Number field REMOVED as requested -->
            <div class="form-group">
                <label for="date">Preferred Travel Date</label>
                <input type="date" id="date" name="date" required>
            </div>
            <div class="form-group">
                <label for="persons">Number of Persons</label>
                <input type="number" id="persons" name="persons" min="1" placeholder="How many people?" required>
            </div>
            <div class="form-group">
                <label for="notes">Special Requests</label>
                <textarea id="notes" name="notes" placeholder="Any special requests or notes (e.g., dietary restrictions, allergies, etc.)"></textarea>
            </div>
            <button type="submit" class="form-submit">Book</button>
        </form>
    </main>
</body>
</html>
