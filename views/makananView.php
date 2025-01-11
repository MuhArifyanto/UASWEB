<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Kuliner</title>
    <style>
        /* Reset and base styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }

        .header h1 {
            font-size: 24px;
            font-weight: bold;
        }

        .add-new {
            background-color: #4CAF50;
            color: #fff;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            text-decoration: none;
            font-size: 14px;
            cursor: pointer;
        }

        .add-new:hover {
            background-color: #45a049;
        }

        .data-table {
            width: 100%;
            border-collapse: collapse;
        }

        .data-table th,
        .data-table td {
            padding: 12px 15px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .data-table th {
            background-color: #4CAF50;
            color: #fff;
        }

        .data-table tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        .data-table tr:hover {
            background-color: #e6e6e6;
        }

        .action-links {
            display: flex;
            justify-content: center;
            gap: 10px;
        }

        .action-links a {
            color: #4CAF50;
            text-decoration: none;
        }

        .action-links a:hover {
            color: #45a049;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="header">
            <h1>Daftar Kuliner</h1>
            <a href="?page=makananAdd" class="add-new">+ Tambah Data Baru</a>
        </div>

        <table class="data-table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Makanan</th>
                    <th>Daerah Makanan</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include "includes/config.php";

                // Query data
                $query = "SELECT * FROM tbl_makanan ORDER BY id_makanan ASC";
                $sql = mysqli_query($conn, $query);

                // Cek apakah query berhasil
                if (!$sql) {
                    echo "<tr><td colspan='4'>Error: " . mysqli_error($conn) . "</td></tr>";
                } else {
                    $nomor = 1;
                    while ($data = mysqli_fetch_array($sql)) { ?>
                        <tr>
                            <td><?= $nomor++; ?></td>
                            <td><?= htmlspecialchars($data["nama_makanan"]); ?></td>
                            <td><?= htmlspecialchars($data["daerah_makanan"]); ?></td>
                            <td class="action-links">
                                <a href="?page=makananUpdate&id=<?= $data['id_makanan']; ?>">Edit</a>
                                <a href="?page=makananDelete&id=<?= $data['id_makanan']; ?>" onclick="return confirm('Yakin ingin menghapus data ini?');">Hapus</a>
                            </td>
                        </tr>
                <?php }
                } ?>
            </tbody>
        </table>
    </div>
</body>

</html>