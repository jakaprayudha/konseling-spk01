<?php
include('configdb.php');

$result = $mysqli->query("delete from alternatif where id_alternatif = " . $_GET['id'] . ";");
if (!$result) {
	echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
	exit();
} else {
	header('Location: alternatif.php');
}

$result = $mysqli->query("delete from kriteria where id_kriteria = " . $_GET['id'] . ";");
if (!$result) {
	echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
	exit();
} else {
	header('Location: kriteria.php');
}
