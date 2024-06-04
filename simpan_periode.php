<?php
session_start();
include('configdb.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
	<meta name="description" content="">
	<meta name="author" content="">
	<link rel="icon" href="favicon.ico">

	<title><?php echo $_SESSION['judul'] . " - " . $_SESSION['by']; ?></title>

	<!-- Bootstrap core CSS -->
	<!--link href="ui/css/bootstrap.css" rel="stylesheet"-->
	<link href="ui/css/cerulean.min.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<!-- <link href="ui/css/jumbotron.css" rel="stylesheet"> -->

	<!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
	<!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
	<!--script src="./index_files/ie-emulation-modes-warning.js"></script-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>

	<!-- Static navbar -->
	<nav class="navbar navbar-default">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><?php echo $_SESSION['judul']; ?></a>
			</div>
			<div id="navbar" class="navbar-collapse collapse">
				<ul class="nav navbar-nav">
					<!-- <li><a href="index.php">Home</a></li> -->
					<li><a href="kriteria.php">DATA KRITERIA</a></li>
					<li><a href="alternatif.php">DATA ALTERNATIF</a></li>
					<li><a href="analisa.php">ANALISA</a></li>
					<li class="active"><a href="#">DATA PERIODE</a></li>
					<!-- Tambahkan tombol logout di dalam navbar -->
					<li><a href="logout.php">LOGOUT</a></li>
					<!-- <li><a href="laporan-cetak.php">CETAK PDF</a></li> -->
				</ul>
			</div><!--/.nav-collapse -->
		</div><!--/.container-fluid -->
	</nav>

	<!-- TAMPILAN CETAK PDF -->
	<br>
	<center>
		<a href="laporan-cetak.php" target=" blank">CETAK PDF</a>
	</center>

	<!-- TAMPILAN CETAK PDF -->
	<br>

  <center>
		<a href="perhitungan.php" target=" blank">KEMBALI</a>
	</center>


 <br>
 <center>
 <form method="get">
     <label>PILIH TANGGAL</label>
     <input type="date" name="tanggal 1"> s/d <input type="date" name="tanggal 2">
     <input type="submit" value="CARI">
 </form>
 </center>
</br>

 


	


	<!-- Bootstrap core JavaScript
    ================================================== -->
	<!-- Placed at the end of the document so the pages load faster -->
	<script src="ui/js/jquery-1.10.2.min.js"></script>
	<script src="ui/js/bootstrap.min.js"></script>
	<script src="ui/js/bootswatch.js"></script>
	<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
	<script src="ui/js/ie10-viewport-bug-workaround.js"></script>


</body>

</html>