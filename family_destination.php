<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Family Fun & Relaxation Destinations | RoamHorizon</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            background: #fff;
            color: #2c3e50;
            line-height: 1.6;
            margin: 0;
            padding: 0;
        }
        header {
            background: #fff;
            box-shadow: 0 2px 10px rgba(0,0,0,0.05);
            padding: 1rem 2rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
            position: sticky;
            top: 0;
            z-index: 100;
        }
        .logo {
            font-size: 1.8rem;
            color: #2c3e50;
            text-decoration: none;
            font-weight: 700;
        }
        .logo:hover { color: #e67e22; }
        .navbar ul {
            list-style: none;
            display: flex;
            gap: 1.5rem;
        }
        .navbar ul li a {
            color: #34495e;
            font-weight: 600;
            text-decoration: none;
        }
        .navbar ul li a:hover { color: #e67e22; }
        main {
            max-width: 1000px;
            margin: 2rem auto;
            padding: 0 1.5rem;
        }
        .destinations-title {
            font-size: 2rem;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 2rem;
        }
        .destinations-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(280px, 1fr));
            gap: 2rem;
            margin-bottom: 3rem;
        }
        .destination-card {
            background: #fff;
            border-radius: 1rem;
            box-shadow: 0 8px 24px rgba(230,126,34,0.08);
            overflow: hidden;
            transition: transform 0.3s, box-shadow 0.3s;
        }
        .destination-card:hover {
            transform: translateY(-6px);
            box-shadow: 0 16px 32px rgba(230,126,34,0.15);
        }
        .destination-img {
            width: 100%;
            height: 180px;
            object-fit: cover;
            border-radius: 1rem 1rem 0 0;
        }
        .destination-content {
            padding: 1.5rem;
        }
        .destination-name {
            font-size: 1.4rem;
            color: #2c3e50;
            margin-top: 0;
            margin-bottom: 0.75rem;
        }
        .destination-location {
            color: #7f8c8d;
            font-weight: 500;
            margin-bottom: 0.5rem;
        }
        .destination-desc {
            color: #555f6e;
            font-size: 0.95rem;
            margin-bottom: 1rem;
        }
        .go-to-package-btn {
            display: block;
            width: max-content;
            margin: 0 auto 3rem;
            background: linear-gradient(90deg, #e67e22, #f6b93b);
            color: #fff;
            border: none;
            padding: 1rem 2.5rem;
            font-size: 1.1rem;
            font-weight: 600;
            border-radius: 2rem;
            cursor: pointer;
            transition: background 0.3s, transform 0.2s;
            box-shadow: 0 4px 15px rgba(230,126,34,0.13);
            text-decoration: none;
            text-align: center;
        }
        .go-to-package-btn:hover {
            background: linear-gradient(90deg, #f6b93b, #e67e22);
            transform: translateY(-2px) scale(1.04);
        }
    </style>
</head>
<body>
    <header>
        <a href="destinations.php" class="logo">RoamHorizon</a>
    </header>
    <main>
        <h1 class="destinations-title">Family Fun & Relaxation Destinations</h1>
        <div class="destinations-grid">
            <!-- 1. Boracay -->
            <article class="destination-card">
                <img src="img/boracay.jpg" alt="Boracay" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Boracay</h3>
                    <p class="destination-location">Aklan</p>
                    <p class="destination-desc">Famous for its powdery white sand beaches and family-friendly resorts, perfect for a relaxing family vacation.</p>
                </div>
            </article>
            <!-- 2. Bohol -->
            <article class="destination-card">
                <img src="img/bohol.jpg" alt="Bohol" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Bohol</h3>
                    <p class="destination-location">Central Visayas</p>
                    <p class="destination-desc">Home to the Chocolate Hills, tarsiers, and beautiful beaches—great for family adventures and relaxation.</p>
                </div>
            </article>
            <!-- 3. Tagaytay -->
            <article class="destination-card">
                <img src="img/tagaytay.jpg" alt="Tagaytay" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Tagaytay</h3>
                    <p class="destination-location">Cavite</p>
                    <p class="destination-desc">A cool, scenic city with family-friendly parks, gardens, and stunning views of Taal Volcano.</p>
                </div>
            </article>
            <!-- 4. Palawan (Puerto Princesa) -->
            <article class="destination-card">
                <img src="img/puerto-princesa.jpg" alt="Puerto Princesa" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Puerto Princesa</h3>
                    <p class="destination-location">Palawan</p>
                    <p class="destination-desc">Known for the Underground River and beautiful beaches—ideal for family exploration and relaxation.</p>
                </div>
            </article>
            <!-- 5. Baguio -->
            <article class="destination-card">
                <img src="img/baguio.jpg" alt="Baguio" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Baguio</h3>
                    <p class="destination-location">Benguet</p>
                    <p class="destination-desc">The “Summer Capital” with cool weather, parks, and family-friendly attractions.</p>
                </div>
            </article>
            <!-- 6. La Union -->
            <article class="destination-card">
                <img src="img/la-union.jpg" alt="La Union" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">La Union</h3>
                    <p class="destination-location">Ilocos Region</p>
                    <p class="destination-desc">A favorite for surfing, beach trips, and family bonding by the sea.</p>
                </div>
            </article>
            <!-- 7. Davao -->
            <article class="destination-card">
                <img src="img/davao.jpg" alt="Davao" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Davao</h3>
                    <p class="destination-location">Mindanao</p>
                    <p class="destination-desc">Home to the Philippine Eagle, beautiful parks, and family-friendly resorts.</p>
                </div>
            </article>
            <!-- 8. Cebu -->
            <article class="destination-card">
                <img src="img/cebu.jpg" alt="Cebu" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Cebu</h3>
                    <p class="destination-location">Central Visayas</p>
                    <p class="destination-desc">Offers beautiful beaches, historic sites, and family-friendly attractions for all ages.</p>
                </div>
            </article>
        </div>
        <a href="packages.php" class="go-to-package-btn">Go to Package</a>
    </main>
</body>
</html>
