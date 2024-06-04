<?php
session_start();

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

// Ambil riwayat perhitungan berdasarkan periode
$periode = isset($_GET['period']) ? $_GET['period'] : '';

$sql = "SELECT * FROM history WHERE period = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("s", $periode);
$stmt->execute();
$result = $stmt->get_result();

// Tampilkan riwayat perhitungan
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Riwayat Perhitungan</title>
</head>
<body>
    <h2>Riwayat Perhitungan</h2>
    <form method="get" action="">
        <input type="text" name="period" placeholder="Masukkan Periode" required>
        <button type="submit">Tampilkan Riwayat</button>
    </form>
    <ul>
        <?php
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<li>" . $row['calculation'] . " (Periode: " . $row['period'] . ")</li>";
            }
        } else {
            echo "<li>Belum ada riwayat perhitungan untuk periode ini.</li>";
        }
        ?>
    </ul>
    <a href="calculator.php">Kembali ke Kalkulator</a>
</body>
</html>

<?php
$stmt->close();
$conn->close();
?>
