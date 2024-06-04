<!DOCTYPE html>
<html>
<head>
    <title>Reset Password</title>
</head>
<body>
    <form action="reset_password.php" method="post">
        <input type="hidden" name="token" value="<?php echo $_GET['token']; ?>" required>
        <label for="new_password">New Password:</label>
        <input type="password" id="new_password" name="new_password" required><br><br>
        <input type="submit" value="Reset Password">
    </form>
</body>
</html>

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
    $token = $_POST["token"];
    $new_password = $_POST["new_password"];

    // Cari pengguna berdasarkan token reset
    $stmt = $conn->prepare("SELECT * FROM tb_login WHERE reset_token=?");
    $stmt->bind_param("s", $token);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Pengguna ditemukan, update password
        $stmt = $conn->prepare("UPDATE tb_login SET Password=?, reset_token=NULL WHERE reset_token=?");
        $stmt->bind_param("ss", $new_password, $token);
        $stmt->execute();

        echo "Password berhasil direset. Anda dapat login dengan password baru.";
    } else {
        echo "Token reset tidak valid.";
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
