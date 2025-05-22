<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Cultural & Historical Journeys | RoamHorizon</title>
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
            <h2>Cultural & Historical Journeys</h2>
            <div class="price">₱8,999 per person</div>
            <div class="duration">3 Days, 2 Nights</div>
            <p class="description">
                Immerse yourself in rich traditions and fascinating history with our Cultural & Historical Journeys package. Explore ancient sites, local museums, and experience authentic cultural performances. Perfect for travelers who want to learn and connect with the soul of every destination.
            </p>
            <div class="inclusions">
                <h3>Package Inclusions:</h3>
                <ul>
                    <li>Guided tours of historical landmarks</li>
                    <li>Cultural workshops and demonstrations</li>
                    <li>Authentic local cuisine experiences</li>
                    <li>Comfortable hotel accommodation</li>
                    <li>Expert local guide</li>
                    <li>Round-trip airport transfers</li>
                    <li>Entrance fees to museums and sites</li>
                    <li>Travel insurance</li>
                </ul>
            </div>
        </div>

        <!-- Booking Form -->
        <form class="booking-form" action="process-booking.php" method="POST">
            <input type="hidden" name="package" value="Cultural & Historical Journeys">
            <div class="form-group">
                <label for="name">Full Name</label>
                <input type="text" id="name" name="name" placeholder="Enter your full name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" id="email" name="email" placeholder="Enter your email address" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone Number</label>
                <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>
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
                <label for="notes">Special Requests</label>
                <textarea id="notes" name="notes" placeholder="Any special requests or notes (e.g., dietary restrictions, allergies, etc.)"></textarea>
            </div>
            <button type="submit" class="form-submit">Book</button>
             <script>
        document.getElementById('bookingForm').addEventListener('submit', function(e) {
            e.preventDefault();
            window.location.href = 'payment.php';
        });
    </script>
        </form>
    </main>
</body>
</html>
