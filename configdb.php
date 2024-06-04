<?php
@session_start();
$_SESSION['judul'] = 'SPK WP AJI';
$_SESSION['welcome'] = 'SISTEM PENDUKUNG KEPUTUSAN UNTUK MENENTUKAN PENILAIAN KINERJA PEGAWAI DI DINAS PENDIDIKAN DELI SERDANG DENGAN METODE WEIGHTED PRODUCT (WP)';
$_SESSION['by'] = 'STMIK TRIGUNA DHARMA';
$mysqli = new mysqli('localhost', 'root', '', 'spk-wp');
if ($mysqli->connect_errno) {
	echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
	exit();
}
