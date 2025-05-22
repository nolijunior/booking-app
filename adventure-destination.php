<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Adventure & Exploration Destinations | RoamHorizon</title>
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
        <h1 class="destinations-title">Adventure & Exploration Destinations</h1>
        <div class="destinations-grid">
            <!-- 1. Siargao -->
            <article class="destination-card">
                <img src="img/siargao.jpg" alt="Siargao Island" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Siargao Island</h3>
                    <p class="destination-location">Surigao del Norte</p>
                    <p class="destination-desc">Famous for its surfing spots, rock pools, and island hopping. Siargao is a paradise for thrill-seekers and nature lovers.</p>
                </div>
            </article>
            <!-- 2. Mount Pulag -->
            <article class="destination-card">
                <img src="img/mount-pulag.jpg" alt="Mount Pulag" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Mount Pulag</h3>
                    <p class="destination-location">Benguet</p>
                    <p class="destination-desc">The third highest mountain in the Philippines. Known for its breathtaking "sea of clouds" and challenging trails.</p>
                </div>
            </article>
            <!-- 3. El Nido -->
            <article class="destination-card">
                <img src="img/el-nido.jpg" alt="El Nido" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">El Nido</h3>
                    <p class="destination-location">Palawan</p>
                    <p class="destination-desc">Renowned for its limestone cliffs, hidden lagoons, and world-class island hopping tours.</p>
                </div>
            </article>
            <!-- 4. Batad Rice Terraces -->
            <article class="destination-card">
                <img src="img/batad.jpg" alt="Batad Rice Terraces" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Batad Rice Terraces</h3>
                    <p class="destination-location">Ifugao</p>
                    <p class="destination-desc">A UNESCO World Heritage Site. Offers challenging hikes and stunning views of ancient rice terraces.</p>
                </div>
            </article>
            <!-- 5. Cagayan de Oro -->
            <article class="destination-card">
                <img src="img/cdo.jpg" alt="Cagayan de Oro" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Cagayan de Oro</h3>
                    <p class="destination-location">Misamis Oriental</p>
                    <p class="destination-desc">Known as the "City of Golden Friendship" and a hotspot for whitewater rafting and adventure sports.</p>
                </div>
            </article>
            <!-- 6. Sagada -->
            <article class="destination-card">
                <img src="img/sagada.jpg" alt="Sagada" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Sagada</h3>
                    <p class="destination-location">Mountain Province</p>
                    <p class="destination-desc">Famous for its caves, waterfalls, and hanging coffins. A must-visit for explorers and culture enthusiasts.</p>
                </div>
            </article>
            <!-- 7. Donsol -->
            <article class="destination-card">
                <img src="img/donsol.jpg" alt="Donsol" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Donsol</h3>
                    <p class="destination-location">Sorsogon</p>
                    <p class="destination-desc">The best place in the Philippines to swim with whale sharks (Butanding) in their natural habitat.</p>
                </div>
            </article>
            <!-- 8. Mount Apo -->
            <article class="destination-card">
                <img src="img/mount-apo.jpg" alt="Mount Apo" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Mount Apo</h3>
                    <p class="destination-location">Davao</p>
                    <p class="destination-desc">The highest mountain in the Philippines. Offers challenging climbs and diverse ecosystems.</p>
                </div>
            </article>
        </div>
        <a href="packages.php" class="go-to-package-btn">Go to Package</a>
    </main>
</body>
</html>
