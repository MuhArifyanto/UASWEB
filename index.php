<?php
// Memuat konfigurasi database
require "includes/config.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Daftar Kuliner Tradisional Indonesia">
    <title>Daftar Kuliner</title>
    <style>
        /* Gaya Umum */
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        /* Gaya Header */
        header {
            margin-bottom: 2em;
            text-align: center;
        }

        header h1 {
            font-size: 2.5em;
            margin-bottom: 0.5em;
        }

        hr {
            margin: 1em 0;
            border: none;
            border-top: 1px solid #ddd;
        }

        /* Gaya Footer */
        footer {
            margin-top: 3em;
            padding: 1em 0;
            background-color: rgb(24, 116, 207);
            text-align: center;
        }

        /* Gaya Navigasi */
        nav {
            margin-bottom: 2em;
        }

        /* Gaya Main */
        main {
            min-height: 400px;
            /* Untuk memastikan konten utama tidak terlalu pendek */
        }
    </style>
</head>

<body>
    <div class="container">
        <!-- Header -->
        <header>
            <h1>Daftar Kuliner Tradisional</h1>
            <hr>
        </header>

        <!-- Navigasi -->
        <nav>
            <?php require "includes/navbar.php"; ?>
            <hr>
        </nav>

        <!-- Konten Utama -->
        <main>
            <?php require "includes/konten.php"; ?>
        </main>

        <!-- Footer -->
        <footer>
            <hr>
            <p>Pemrograman Web 1 &copy; <?= date("Y"); ?></p>
        </footer>
    </div>
</body>

</html>