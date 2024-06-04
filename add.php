<?php
	include('configdb.php');
	$alternatif = $_POST['alternatif'];
	$k1 = $_POST['C1'];
	$k2 = $_POST['C2'];
	$k3 = $_POST['C3'];
	$k4 = $_POST['C4'];
	$k5 = $_POST['C5'];
	$id_alt = rand(1, 1000000) ;
	$result = $mysqli->query("INSERT INTO `alternatif` (`id_alternatif`, `alternatif`, `C1`, `C2`, `C3`, `C4`, `C5`)
								VALUES ($id_alt, '".$alternatif."', '".$k1."', '".$k2."', '".$k3."', '".$k4."', '".$k5."');");
	if(!$result){
		// echo "Gagal";
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: alternatif.php');
	}
?>
