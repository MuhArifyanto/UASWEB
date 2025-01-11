<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Kuliner Nusantara</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            line-height: 1.6;
            color: #333;
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 15px;
        }

        /* Header/Banner */
        .banner {
            position: relative;
            width: 100%;
            height: 500px;
            background-image: url('views/kulinergambar.jpg');
            background-size: cover;
            background-position: center;
            margin-bottom: 60px;
        }

        .banner-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.6);
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            text-align: center;
            padding: 0 20px;
        }

        .banner h1 {
            color: white;
            font-size: 3.5rem;
            margin-bottom: 20px;
        }

        .banner p {
            color: white;
            font-size: 1.5rem;
        }

        /* Story Section */
        .story-section {
            padding: 80px 0;
        }

        .story-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 50px;
            align-items: center;
        }

        .story-content h2 {
            font-size: 2.5rem;
            margin-bottom: 30px;
            color: #333;
        }

        .story-content p {
            margin-bottom: 20px;
            font-size: 1.1rem;
            line-height: 1.8;
        }

        .story-image img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        /* Mission Vision Section */
        .mission-section {
            background-color: #f9f9f9;
            padding: 80px 0;
            margin-top: 60px;
        }

        .mission-container {
            display: grid;
            grid-template-columns: repeat(3, 1fr);
            gap: 30px;
            text-align: center;
        }

        .mission-box {
            padding: 40px 20px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .mission-icon {
            font-size: 3rem;
            margin-bottom: 20px;
        }

        .mission-box h3 {
            margin-bottom: 15px;
            color: #333;
        }

        /* Team Section */
        .team-section {
            padding: 80px 0;
        }

        .team-header {
            text-align: center;
            margin-bottom: 60px;
        }

        .team-header h2 {
            font-size: 2.5rem;
            margin-bottom: 20px;
        }

        .team-grid {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 40px;
            max-width: 900px;
            margin: 0 auto;
        }

        .team-member {
            text-align: center;
        }

        .team-member img {
            width: 200px;
            height: 200px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .team-member h4 {
            margin-bottom: 10px;
            color: #333;
        }

        .team-member p {
            color: #666;
        }

        /* Responsive Design */
        @media (max-width: 768px) {

            .story-container,
            .mission-container,
            .team-grid {
                grid-template-columns: 1fr;
            }

            .banner h1 {
                font-size: 2.5rem;
            }

            .banner p {
                font-size: 1.2rem;
            }

            .story-section,
            .mission-section,
            .team-section {
                padding: 40px 0;
            }

            .mission-box {
                margin-bottom: 20px;
            }
        }
    </style>
</head>

<body>
    <!-- Banner -->
    <div class="banner">
        <div class="banner-overlay">
            <h1>Tentang Kuliner Nusantara</h1>
            <p>Melestarikan dan Memperkenalkan Kekayaan Kuliner Indonesia</p>
        </div>
    </div>

    <!-- Story Section -->
    <section class="story-section">
        <div class="container story-container">
            <div class="story-content">
                <h2>Cerita Kami</h2>
                <p>Kuliner Nusantara lahir dari passion kami untuk melestarikan dan memperkenalkan kekayaan kuliner Indonesia. Bermula dari perjalanan kami menjelajahi berbagai daerah, kami terpesona akan keragaman dan kelezatan masakan dari Sabang sampai Merauke.</p>
                <p>Misi kami sederhana: mengenalkan dunia pada kekayaan kuliner nusantara, menghargai warisan budaya kuliner, dan membantu melestarikan resep-resep turun-temurun yang hampir terlupakan.</p>
            </div>
            <div class="story-image">
                <img src="views/toko.jpg" alt="Cerita Kami">
            </div>
        </div>
    </section>

    <!-- Mission Vision Section -->
    <section class="mission-section">
        <div class="container mission-container">
            <div class="mission-box">
                <div class="mission-icon">🏆</div>
                <h3>Misi Kami</h3>
                <p>Melestarikan dan memperkenalkan keragaman kuliner Indonesia ke dunia, serta mendukung pelaku kuliner lokal.</p>
            </div>
            <div class="mission-box">
                <div class="mission-icon">👀</div>
                <h3>Visi Kami</h3>
                <p>Menjadi platform terdepan dalam eksplorasi, edukasi, dan apresiasi kuliner nusantara.</p>
            </div>
            <div class="mission-box">
                <div class="mission-icon">❤️</div>
                <h3>Nilai Kami</h3>
                <p>Keaslian, keberagaman, keberlanjutan, dan penghormatan terhadap warisan kuliner Indonesia.</p>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="team-section">
        <div class="container">
            <div class="team-header">
                <h2>Tim Kami</h2>
                <p>Para pencinta kuliner yang berdedikasi untuk membawa citarasa nusantara ke seluruh dunia</p>
            </div>
            <div class="team-grid">
                <div class="team-member">
                    <img src="views/mantap.jpg" alt="Adi Nugroho">
                    <h4>Adi Nugroho</h4>
                    <p>Founder & Culinary Explorer</p>
                </div>
                <div class="team-member">
                    <img src="views/freya3.jpg" alt="Siti Rahayu">
                    <h4>Siti Rahayu</h4>
                    <p>Kepala Penelitian Kuliner</p>
                </div>
            </div>
        </div>
    </section>
</body>

</html>