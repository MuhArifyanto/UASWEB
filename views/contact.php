<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hubungi Kami - Kuliner Nusantara</title>
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

        /* Contact Background */
        .contact-bg {
            background-color: #f8f5f0;
            background-image: url('views/kulinergambar.jpg');
            background-size: cover;
            background-position: center;
            position: relative;
            text-align: center;
            color: white;
        }

        .contact-overlay {
            background-color: rgba(0, 0, 0, 0.6);
            padding: 80px 0;
        }

        .display-4 {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .lead {
            font-size: 1.2rem;
        }

        /* Container */
        .container {
            width: 90%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px 0;
        }

        .container-fluid {
            width: 100%;
        }

        /* Layout Container */
        .content-wrapper {
            display: flex;
            flex-wrap: wrap;
            margin-top: 20px;
        }

        .left-section {
            flex: 0 0 300px;
            margin-right: 30px;
        }

        .center-section {
            flex: 1;
            min-width: 300px;
            display: flex;
            justify-content: center;
        }

        .bottom-section {
            flex: 0 0 100%;
            margin-top: 30px;
        }

        @media (max-width: 768px) {
            .left-section {
                flex: 0 0 100%;
                margin-right: 0;
                margin-bottom: 30px;
            }

            .center-section {
                flex: 0 0 100%;
            }
        }

        /* Contact Box Styles */
        .contact-box {
            max-width: 100%;
        }

        .contact-item {
            border: 2px solid #ddd;
            border-radius: 8px;
            padding: 15px;
            margin-bottom: 15px;
            display: flex;
            align-items: center;
            background-color: white;
            transition: all 0.3s ease;
        }

        .contact-item:hover {
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .contact-icon {
            font-size: 24px;
            margin-right: 15px;
            color: #333;
        }

        .contact-details {
            flex-grow: 1;
        }

        .contact-label {
            font-weight: bold;
            margin-bottom: 5px;
            color: #333;
        }

        .contact-value {
            color: #666;
        }

        .contact-value a {
            color: #666;
            text-decoration: none;
        }

        .contact-value a:hover {
            color: #007bff;
        }

        /* Operating Hours Table */
        .operating-hours {
            max-width: 600px;
            width: 100%;
        }

        .table {
            width: 100%;
            margin-bottom: 1rem;
            border-collapse: collapse;
            border: 1px solid #dee2e6;
            background-color: #fff;
        }

        .table th,
        .table td {
            border: 1px solid #dee2e6;
            padding: 0.75rem;
            text-align: left;
            vertical-align: middle;
        }

        .table th {
            background-color: #f8f9fa;
            font-weight: bold;
        }

        .table tbody tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* Form Styles */
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: bold;
        }

        .form-control {
            display: block;
            width: 100%;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            color: #495057;
            background-color: #fff;
            border: 1px solid #ced4da;
            border-radius: 0.25rem;
            margin-bottom: 1rem;
        }

        .btn {
            display: inline-block;
            font-weight: 400;
            text-align: center;
            vertical-align: middle;
            user-select: none;
            border: 1px solid transparent;
            padding: 0.375rem 0.75rem;
            font-size: 1rem;
            line-height: 1.5;
            border-radius: 0.25rem;
            color: #fff;
            background-color: #007bff;
            transition: color 0.15s ease-in-out, background-color 0.15s ease-in-out;
        }

        .btn:hover {
            background-color: #0069d9;
        }

        h2 {
            margin-bottom: 1rem;
        }

        .text-center {
            text-align: center;
        }

        .my-5 {
            margin-top: 3rem;
            margin-bottom: 3rem;
        }
    </style>
</head>

<body>
    <!-- Banner Kontak -->
    <header class="container-fluid contact-bg text-center">
        <div class="contact-overlay">
            <h1 class="display-4">Hubungi Kami</h1>
            <p class="lead">Ada pertanyaan tentang kuliner Nusantara? Kami siap membantu!</p>
        </div>
    </header>

    <!-- Konten Utama -->
    <main class="container my-5">
        <div class="content-wrapper">
            <!-- Informasi Kontak (Kiri) -->
            <div class="left-section">
                <h2>Informasi Kontak</h2>
                <div class="contact-box">
                    <div class="contact-item">
                        <div class="contact-icon">📍</div>
                        <div class="contact-details">
                            <div class="contact-label">Alamat</div>
                            <div class="contact-value">
                                <a href="https://www.google.com/maps?q=Universitas+Pelita+Bangsa,+Cikarang,+Indonesia"
                                    target="_blank" rel="noopener noreferrer">
                                    Universitas Pelita Bangsa, Cikarang, Indonesia
                                </a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">📞</div>
                        <div class="contact-details">
                            <div class="contact-label">Telepon</div>
                            <div class="contact-value">
                                <a href="tel:+6281280514307">081280514307</a>
                            </div>
                        </div>
                    </div>

                    <div class="contact-item">
                        <div class="contact-icon">✉️</div>
                        <div class="contact-details">
                            <div class="contact-label">Email</div>
                            <div class="contact-value">
                                <a href="mailto:mr.xarifmacan@gmail.com">mr.xarifmacan@gmail.com</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Jam Operasional (Tengah) -->
            <div class="center-section">
                <div class="operating-hours">
                    <h2 class="text-center">Jam Operasional</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Hari</th>
                                <th>Jam Operasional</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Senin</td>
                                <td>09:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td>Selasa</td>
                                <td>09:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td>Rabu</td>
                                <td>09:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td>Kamis</td>
                                <td>09:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td>Jumat</td>
                                <td>09:00 - 17:00 WIB</td>
                            </tr>
                            <tr>
                                <td>Sabtu</td>
                                <td>10:00 - 14:00 WIB</td>
                            </tr>
                            <tr>
                                <td>Minggu</td>
                                <td>Tutup</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Form Kirim Pesan (Bawah) -->
            <div class="bottom-section">
                <h2>Kirim Pesan</h2>
                <form action="proses_kontak.php" method="POST">
                    <div>
                        <label for="nama" class="form-label">Nama Lengkap</label>
                        <input type="text" class="form-control" id="nama" name="nama" required>
                    </div>
                    <div>
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div>
                        <label for="telepon" class="form-label">Nomor Telepon</label>
                        <input type="tel" class="form-control" id="telepon" name="telepon">
                    </div>
                    <div>
                        <label for="pesan" class="form-label">Pesan Anda</label>
                        <textarea class="form-control" id="pesan" name="pesan" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn">Kirim Pesan</button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>