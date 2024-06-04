<?php
	include('configdb.php');
	$alternatif = $_POST['alternatif']; 
	$k1 = $_POST['C1'];
	$k2 = $_POST['C2']; 
	$k3 = $_POST['C3'];
	$k4 = $_POST['C4'];
	$k5 = $_POST['C5'];
	
	$result = $mysqli->query("UPDATE alternatif SET `alternatif` = '".$alternatif."', `C1` = '".$k1."',`C2` = '".$k2."',`C3` = '".$k3."',`C4` = '".$k4."',`C5` = '".$k5."' WHERE `id_alternatif` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: alternatif.php');
	}
?>