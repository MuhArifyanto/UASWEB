<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Ambil data dari formulir
    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $pesan = htmlspecialchars($_POST['pesan']);

    // Email tujuan
    $to = "youremail@example.com"; // Ganti dengan email tujuan Anda
    $subject = "Pesan dari $nama";

    // Isi email
    $message = "Nama: $nama\n";
    $message .= "Email: $email\n";
    $message .= "Pesan:\n$pesan\n";

    // Header email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Kirim email
    if (mail($to, $subject, $message, $headers)) {
        echo "<h1>Pesan Berhasil Dikirim</h1>";
        echo "<p>Terima kasih, <strong>$nama</strong>. Pesan Anda telah kami kirim ke email tujuan.</p>";
    } else {
        echo "<h1>Pesan Gagal Dikirim</h1>";
        echo "<p>Maaf, terjadi kesalahan. Silakan coba lagi nanti.</p>";
    }
} else {
    // Jika diakses langsung tanpa formulir
    header('Location: kirim_pesan.php');
    exit();
}
