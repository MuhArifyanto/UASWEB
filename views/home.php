<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kuliner Nusantara - Jelajahi Citarasa Indonesia</title>
    <style>
        * {
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }

        .bg-cover {
            background-size: cover;
            background-position: center;
            height: 300px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            text-align: center;
            position: relative;
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }

        .display-4 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .lead {
            font-size: 1.2rem;
        }

        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
        }

        .row {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .card {
            flex: 1;
            min-width: 250px;
            max-width: calc(33.333% - 20px);
            border: 1px solid #ddd;
            border-radius: 5px;
            overflow: hidden;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            transition: transform 0.3s ease;
        }

        .card:hover {
            transform: scale(1.03);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-body {
            padding: 15px;
            text-align: center;
        }

        .card-title {
            font-size: 1.2em;
            margin-bottom: 10px;
        }

        .card-text {
            font-size: 0.9em;
            margin-bottom: 15px;
            color: #666;
        }

        @media screen and (max-width: 992px) {
            .card {
                max-width: calc(50% - 20px);
            }
        }

        @media screen and (max-width: 576px) {
            .card {
                max-width: 100%;
            }

            .display-4 {
                font-size: 2rem;
            }

            .lead {
                font-size: 1rem;
            }
        }
    </style>
</head>

<body>
    <!-- Banner Utama -->
    <header class="bg-cover" style="background-image: url('views/kulinergambar.jpg');">
        <div class="overlay">
            <h1 class="display-4">Jelajahi Citarasa Nusantara</h1>
            <p class="lead">Temukan keberagaman kuliner Indonesia yang menakjubkan</p>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="container">
        <section>
            <div class="row">
                <div class="card">
                    <img src="views/pempek.jpg" alt="Makanan Populer">
                    <div class="card-body">
                        <h5 class="card-title">Pempek</h5>
                        <p class="card-text">Pempek adalah makanan khas Palembang yang terbuat dari ikan giling dan tepung tapioka atau sagu</p>
                    </div>
                </div>
                <div class="card">
                    <img src="views/pletok.jpg" alt="Minuman Tradisional">
                    <div class="card-body">
                        <h5 class="card-title">Bir Pletok</h5>
                        <p class="card-text">Minuman ini terbuat dari rempah-rempah seperti jahe, serai, kayu manis, dan daun pandan. Bir pletok memiliki rasa manis dan hangat</p>
                    </div>
                </div>
                <div class="card">
                    <img src="views/PAPEDA.jpg" alt="Makanan Tradisional">
                    <div class="card-body">
                        <h5 class="card-title">Papeda</h5>
                        <p class="card-text">Papeda memiliki tekstur kenyal, putih, dan lengket, serta sering disajikan dengan ikan, sayur, atau kuah kuning</p>
                    </div>
                </div>
                <div class="card">
                    <img src="views/teh.jpg" alt="Minuman Tradisonal">
                    <div class="card-body">
                        <h5 class="card-title">Teh Talua</h5>
                        <p class="card-text">Teh talua adalah minuman tradisional khas Sumatera Barat yang terbuat dari teh, telur, gula, dan sedikit perasan jeruk nipis</p>
                    </div>
                </div>
                <div class="card">
                    <img src="views/rendang.jpg" alt="Makanan Tradisional">
                    <div class="card-body">
                        <h5 class="card-title">Rendang</h5>
                        <p class="card-text">Rendang adalah hidangan berbahan dasar daging yang dihasilkan dari proses memasak suhu rendah dalam waktu lama dengan menggunakan aneka rempah-rempah dan santan </p>
                    </div>
                </div>
                <div class="card">
                    <img src="views/cendol.jpg" alt="Minuman Tradisonal">
                    <div class="card-body">
                        <h5 class="card-title">Es Cendol</h5>
                        <p class="card-text">AI Overview
                            Learn more
                            Es Cendol
                            Es cendol adalah minuman tradisional khas Indonesia yang terbuat dari tepung beras, santan, dan gula merah. Minuman ini memiliki rasa yang manis dan gurih</p>
                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>