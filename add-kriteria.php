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
          <!-- <li><a href="index.php">logout</a></li> -->
          <li><a href="kriteria.php">DATA KRITERIA</a></li>
          <li><a href="alternatif.php">DATA ALTERNATIF</a></li>
          <li><a href="analisa.php">ANALISA</a></li>
          <li><a href="perhitungan.php">PERHITUNGAN WP</a></li>
          <!-- Tambahkan tombol logout di dalam navbar -->
          <li><a href="logout.php">LOGOUT</a></li>
          <!-- <li><a href="laporan-cetak.php">CETAK PDF</a></li> -->
        </ul>
      </div><!--/.nav-collapse -->
    </div><!--/.container-fluid -->
  </nav>
  <div class="container">
    <!-- Main component for a primary marketing message or call to action -->
    <div class="panel panel-primary">
      <!-- Default panel contents -->
      <div class="panel-heading">TAMBAH KRITERIA</div>
      <div class="panel-body">
        <?php
        $kriteria = $mysqli->query("select * from kriteria");
        if (!$kriteria) {
          echo $mysqli->connect_errno . " - " . $mysqli->connect_error;
          exit();
        }
        $i = 0;
        while ($row = $kriteria->fetch_assoc()) {
          @$k[$i] = $row["kriteria"];
          $i++;
        }
        ?>
        <form role="form" method="post" action="addd.php">
          <div class="box-body">
            <div class="form-group">
              <label for="kriteria">kriteria</label>
              <input type="text" class="form-control" name="kriteria" id="kriteria" placeholder="kriteria">
            </div>
            <div class="form-group">
            <label for="bobot">Nilai Kepentingan</label>
                <select class="form-control" name="bobot" id="bobot">
                  <option value='1' <?php if ($row["bobot"] == '1') echo "selected" ?>>1 - (STP) sangat tidak penting</option>
                  <option value='2' <?php if ($row["bobot"] == '2') echo "selected" ?>>2 - (TP) tidak penting</option>
                  <option value='3' <?php if ($row["bobot"] == '3') echo "selected" ?>>3 - (CP) cukup penting</option>
                  <option value='4' <?php if ($row["bobot"] == '4') echo "selected" ?>>4 - (P) penting</option>
                  <option value='5' <?php if ($row["bobot"] == '5') echo "selected" ?>>5 - (SP) sangat penting</option>
                </select>
            </div>

            <div class="form-group">
            <label for="cost_benefit">Cost / Benefit</label>
            
                <select class="form-control" name="cost_benefit" id="cost_benefit">
                  <option value='cost' <?php if ($row["cost_benefit"] == 'cost') echo "selected" ?>>Cost</option>
                  <option value='benefit' <?php if ($row["cost_benefit"] == 'benefit') echo "selected" ?>>Benefit</option>
                </select>

            </div>
            

          </div>
         
      </div><!-- /.box-body -->

      <div class="box-footer">
        <button type="reset" class="btn btn-info">Reset</button>
        <a href="kriteria.php" type="cancel" class="btn btn-warning">Batal</a>
        <button type="submit" class="btn btn-primary">Tambahkan</button>
      </div>
      </form>
      <?php ?>
    </div>
    <div class="panel-footer text-primary"><?php echo $_SESSION['by']; ?><div class="pull-right"></div>
    </div>
  </div>

  </div> <!-- /container -->


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