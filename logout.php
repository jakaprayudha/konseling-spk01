<?php
session_start(); // Mulai sesi (pastikan ini dijalankan di setiap halaman yang memerlukan akses sesi)

// Hapus semua variabel sesi
$_SESSION = array();

// Hancurkan sesi
session_destroy();

// Redirect ke halaman login atau halaman lain sesuai kebutuhan
header("Location:./Login/profile_login/index.html");
exit();
