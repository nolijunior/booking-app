<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Romance & Honeymoon Destinations | RoamHorizon</title>
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
        <h1 class="destinations-title">Romance & Honeymoon Destinations</h1>
        <div class="destinations-grid">
            <!-- 1. El Nido, Palawan -->
            <article class="destination-card">
                <img src="img/el-nido.jpg" alt="El Nido, Palawan" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">El Nido</h3>
                    <p class="destination-location">Palawan</p>
                    <p class="destination-desc">World-famous for its stunning limestone cliffs, hidden lagoons, and pristine beaches—perfect for couples.</p>
                </div>
            </article>
            <!-- 2. Boracay -->
            <article class="destination-card">
                <img src="img/boracay.jpg" alt="Boracay" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Boracay</h3>
                    <p class="destination-location">Aklan</p>
                    <p class="destination-desc">White sand beaches, vibrant nightlife, and breathtaking sunsets make Boracay a top honeymoon spot.</p>
                </div>
            </article>
            <!-- 3. Batanes -->
            <article class="destination-card">
                <img src="img/batanes.jpg" alt="Batanes" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Batanes</h3>
                    <p class="destination-location">Cagayan Valley</p>
                    <p class="destination-desc">A remote paradise with rolling hills, dramatic cliffs, and a peaceful atmosphere—ideal for romantic getaways.</p>
                </div>
            </article>
            <!-- 4. Amanpulo -->
            <article class="destination-card">
                <img src="img/amanpulo.jpg" alt="Amanpulo" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Amanpulo</h3>
                    <p class="destination-location">Pamalican Island, Palawan</p>
                    <p class="destination-desc">A private island resort offering luxury, privacy, and pristine beaches for unforgettable honeymoons.</p>
                </div>
            </article>
            <!-- 5. Panglao Island -->
            <article class="destination-card">
                <img src="img/panglao.jpg" alt="Panglao Island" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Panglao Island</h3>
                    <p class="destination-location">Bohol</p>
                    <p class="destination-desc">Known for its white sand beaches, clear waters, and world-class resorts—perfect for romantic escapes.</p>
                </div>
            </article>
            <!-- 6. Camiguin -->
            <article class="destination-card">
                <img src="img/camiguin.jpg" alt="Camiguin" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Camiguin</h3>
                    <p class="destination-location">Northern Mindanao</p>
                    <p class="destination-desc">A peaceful island with waterfalls, hot springs, and white sandbars—ideal for couples seeking tranquility.</p>
                </div>
            </article>
            <!-- 7. Coron -->
            <article class="destination-card">
                <img src="img/coron.jpg" alt="Coron" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Coron</h3>
                    <p class="destination-location">Palawan</p>
                    <p class="destination-desc">Famous for its crystal-clear lakes, limestone cliffs, and romantic island-hopping tours.</p>
                </div>
            </article>
            <!-- 8. Siargao -->
            <article class="destination-card">
                <img src="img/siargao.jpg" alt="Siargao" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Siargao</h3>
                    <p class="destination-location">Surigao del Norte</p>
                    <p class="destination-desc">A tropical paradise with palm-fringed beaches, surfing, and a laid-back vibe—great for adventurous couples.</p>
                </div>
            </article>
        </div>
        <a href="packages.php" class="go-to-package-btn">Go to Package</a>
    </main>
</body>
</html>
