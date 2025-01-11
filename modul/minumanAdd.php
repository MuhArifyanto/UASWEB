<?php
// Cek apakah tombol simpan sudah diklik
if (isset($_POST['submit'])) {
    // Ambil data dari formulir
    $nama_minuman = trim($_POST['nama_minuman']);
    $daerah_minuman = trim($_POST['daerah_minuman']);

    // Validasi input
    if (empty($nama_minuman) || empty($daerah_minuman)) {
        echo "<script>alert('Semua bidang harus diisi!'); window.location='?page=minuman';</script>";
        exit;
    }

    // Prepared statement untuk mencegah SQL Injection
    $query = "INSERT INTO tbl_minuman (nama_minuman, daerah_minuman) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "ss", $nama_minuman, $daerah_minuman);

    // Eksekusi query
    if (mysqli_stmt_execute($stmt)) {
        echo "<script>alert('Data berhasil ditambah!'); window.location='?page=minuman';</script>";
    } else {
        echo "<script>alert('Gagal menambah data!'); window.location='?page=minuman';</script>";
    }
    mysqli_stmt_close($stmt);
} elseif (isset($_POST['cancel'])) {
    echo "<script>window.location='?page=minuman';</script>";
}
?>

<!-- Formulir untuk Menambah Data -->
<div style="width: 40%; margin: 2em auto; padding: 1em; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);">
    <h2 style="text-align: center; margin-bottom: 1em;">Tambah Data Daftar Minuman</h2>
    <form method="post" action="">
        <div style="margin-bottom: 1em;">
            <label for="nama_minuman" style="display: block; font-weight: bold;">Nama Minuman</label>
            <input type="text" id="nama_minuman" name="nama_minuman" style="width: 100%; padding: 0.5em; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>
        <div style="margin-bottom: 1em;">
            <label for="daerah_minuman" style="display: block; font-weight: bold;">Daerah Minuman</label>
            <input type="text" id="daerah_minuman" name="daerah_minuman" style="width: 100%; padding: 0.5em; border: 1px solid #ccc; border-radius: 4px;" required>
        </div>
        <div style="text-align: center;">
            <button type="submit" name="submit" style="padding: 0.5em 1em; margin-right: 0.5em; background-color: #4CAF50; color: white; border: none; border-radius: 4px; cursor: pointer;">Submit</button>
            <button type="reset" style="padding: 0.5em 1em; margin-right: 0.5em; background-color: #f0ad4e; color: white; border: none; border-radius: 4px; cursor: pointer;">Reset</button>
            <button type="submit" name="cancel" style="padding: 0.5em 1em; background-color: #d9534f; color: white; border: none; border-radius: 4px; cursor: pointer;">Cancel</button>
        </div>
    </form>
</div>