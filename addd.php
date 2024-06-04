<?php
include('configdb.php');
$kriteria = $_POST['kriteria'];
$bobot = $_POST['bobot'];
$cost_benefit = $_POST['cost_benefit'];

$result = $mysqli->query("INSERT INTO kriteria (kriteria, bobot, cost_benefit) VALUES('$kriteria','$bobot','$cost_benefit')");
if (!$result) {
	echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
	exit();
} else {
	header('Location: kriteria.php');
}
