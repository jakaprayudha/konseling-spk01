<?php
// Lakukan koneksi ke basis data di sini
$servername = "localhost";
$username = "root"; // Ganti dengan username basis data Anda
$password = ""; // Ganti dengan password basis data Anda
$database = "spk-wp"; // Ganti dengan nama basis data Anda

// Membuat koneksi
$conn = new mysqli($servername, $username, $password, $database);


$email = $_POST['username'];
$cekemail = mysqli_query($conn, "SELECT * FROM tb_login WHERE Username = '$email'");

if (mysqli_num_rows($cekemail) > 0) {
   $query = mysqli_query($conn, "SELECT * FROM tb_login WHERE Username = '$email'");
   $row = mysqli_fetch_array($query);
   $username = $row['Username'];
   $password = $row['Password'];
   $subject = "Reset Password";
   $newpass = rand(1111, 9999);
   $update = mysqli_query($conn, "UPDATE tb_login SET Password = '$newpass' WHERE Username = '$username'");
   if ($update) {
      echo "Password reset sent successfully new password is : $newpass ";
   }
}
