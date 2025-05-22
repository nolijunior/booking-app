<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Cultural & Historical Journey Destinations | RoamHorizon</title>
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
        <h1 class="destinations-title">Cultural & Historical Journey Destinations</h1>
        <div class="destinations-grid">
            <!-- 1. Vigan -->
            <article class="destination-card">
                <img src="img/vigan.jpg" alt="Vigan" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Vigan</h3>
                    <p class="destination-location">Ilocos Sur</p>
                    <p class="destination-desc">A UNESCO World Heritage Site with well-preserved Spanish colonial architecture and cobblestone streets.</p>
                </div>
            </article>
            <!-- 2. Intramuros -->
            <article class="destination-card">
                <img src="img/intramuros.jpg" alt="Intramuros" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Intramuros</h3>
                    <p class="destination-location">Manila</p>
                    <p class="destination-desc">The historic walled city of Manila, featuring Fort Santiago, San Agustin Church, and Spanish-era landmarks.</p>
                </div>
            </article>
            <!-- 3. Banaue Rice Terraces -->
            <article class="destination-card">
                <img src="img/banaue.jpg" alt="Banaue Rice Terraces" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Banaue Rice Terraces</h3>
                    <p class="destination-location">Ifugao</p>
                    <p class="destination-desc">A UNESCO World Heritage Site, known as the "Eighth Wonder of the World" for its ancient rice terraces.</p>
                </div>
            </article>
            <!-- 4. Paoay Church -->
            <article class="destination-card">
                <img src="img/paoay.jpg" alt="Paoay Church" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Paoay Church</h3>
                    <p class="destination-location">Ilocos Norte</p>
                    <p class="destination-desc">A UNESCO World Heritage Site, famous for its massive buttresses and earthquake-baroque architecture.</p>
                </div>
            </article>
            <!-- 5. Cebu Heritage Sites -->
            <article class="destination-card">
                <img src="img/cebu-heritage.jpg" alt="Cebu Heritage Sites" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Cebu Heritage Sites</h3>
                    <p class="destination-location">Cebu</p>
                    <p class="destination-desc">Includes Magellan’s Cross, Basilica Minore del Santo Niño, and Fort San Pedro—key landmarks in Philippine history.</p>
                </div>
            </article>
            <!-- 6. Corregidor -->
            <article class="destination-card">
                <img src="img/corregidor.jpg" alt="Corregidor" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Corregidor</h3>
                    <p class="destination-location">Cavite</p>
                    <p class="destination-desc">A historic island fortress from World War II, offering guided tours and panoramic views of Manila Bay.</p>
                </div>
            </article>
            <!-- 7. Rizal Park -->
            <article class="destination-card">
                <img src="img/rizal-park.jpg" alt="Rizal Park" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Rizal Park</h3>
                    <p class="destination-location">Manila</p>
                    <p class="destination-desc">A national park and monument dedicated to Dr. Jose Rizal, the Philippines’ national hero.</p>
                </div>
            </article>
            <!-- 8. Sagada -->
            <article class="destination-card">
                <img src="img/sagada.jpg" alt="Sagada" class="destination-img">
                <div class="destination-content">
                    <h3 class="destination-name">Sagada</h3>
                    <p class="destination-location">Mountain Province</p>
                    <p class="destination-desc">Famous for its hanging coffins, caves, and rich indigenous culture—perfect for cultural immersion.</p>
                </div>
            </article>
        </div>
        <a href="packages.php" class="go-to-package-btn">Go to Package</a>
    </main>
</body>
</html>
