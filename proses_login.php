<?php
// Lakukan koneksi ke basis data di sini
$servername = "localhost";
$username = "root"; // Ganti dengan username basis data Anda
$password = ""; // Ganti dengan password basis data Anda
$database = "spk-wp"; // Ganti dengan nama basis data Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["Username"];
    $password = $_POST["Password"];
    

    // Lakukan proses verifikasi login di sini dengan menggunakan prepared statement
    $stmt = $conn->prepare("SELECT * FROM tb_login WHERE Username=? AND Password=?");
    $stmt->bind_param("ss", $username, $password);


    // Jalankan statement
    $stmt->execute();

    // Ambil hasil query
    $result = $stmt->get_result();

    // Periksa apakah pengguna ada di basis data
    if ($result->num_rows > 0) {
        // Pengguna ditemukan, berikan akses atau lakukan tindakan lain yang diinginkan
        header("location: kriteria.php");

        exit();

    } else {
        // Pengguna tidak ditemukan, tampilkan pesan kesalahan
        echo "Login gagal. Silakan coba lagi.";
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}



?>
