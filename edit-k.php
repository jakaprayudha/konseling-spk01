<?php
	include('configdb.php');
	$kriteria = $_POST['kriteria']; 
	$bobot = $_POST['bobot'];
	$cost_benefit = $_POST['cost_benefit'];
	
	$result = $mysqli->query("UPDATE kriteria SET `kriteria` = '".$kriteria."', `bobot` = '".$bobot."', `cost_benefit` = '".$cost_benefit."' WHERE `id_kriteria` = ".$_GET['id'].";");
	if(!$result){
		echo $mysqli->connect_errno." - ".$mysqli->connect_error;
		exit();
	}
	else{
		header('Location: kriteria.php');
	}
?>