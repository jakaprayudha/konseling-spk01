<!DOCTYPE html>
<html>
<head>
    <title>Forgot Password</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }
        h2 {
            margin-bottom: 20px;
        }
        input[type="email"], input[type="submit"] {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        input[type="submit"] {
            background-color: #007bff;
            color: #fff;
            border: none;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color: #0056b3;
        }
        .message {
            color: green;
        }
    </style>
</head>
<body>
    <form action="forgot_password.php" method="post">
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br><br>
        <input type="submit" value="Submit">
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
    $email = $_POST["email"];

    // Cari pengguna berdasarkan email
    $stmt = $conn->prepare("SELECT * FROM tb_login WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        // Pengguna ditemukan, buat token reset password
        $token = bin2hex(random_bytes(50));

        // Simpan token di basis data dengan menghubungkannya dengan pengguna
        $stmt = $conn->prepare("UPDATE tb_login SET reset_token=? WHERE email=?");
        $stmt->bind_param("ss", $token, $email);
        $stmt->execute();

        // Kirim email ke pengguna dengan tautan reset password
        $resetLink = "http://localhost/spk-wp/reset_password.php?token=" . $token;
        $subject = "Password Reset Request";
        $message = "Click on the following link to reset your password: " . $resetLink;
        $headers = "From: no-reply@yourwebsite.com";

        mail($email, $subject, $message, $headers);

        echo "Email reset password telah dikirim.";
    } else {
        echo "Email tidak ditemukan.";
    }

    // Tutup statement dan koneksi
    $stmt->close();
    $conn->close();
}
?>
