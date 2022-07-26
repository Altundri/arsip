<!DOCTYPE html>
<?php
session_start();
include "login/ceksession.php";
?>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arsip PT. Ulu Mas Jaya </title>

    <!-- Bootstrap -->
    <link href="../assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="../assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../assets/vendors/iCheck/skins/flat/green.css" rel="stylesheet">
	
    <!-- bootstrap-progressbar -->
    <link href="../assets/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="../assets/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="../assets/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
      <link rel="shortcut icon" href="../img/favicon.ico">

      <!-- Chart -->
    <script src="https://www.chartjs.org/dist/2.9.3/Chart.min.js"></script>
    <script src="https://www.chartjs.org/samples/latest/utils.js"></script>
    <style>
    canvas {
      -moz-user-select: none;
      -webkit-user-select: none;
      -ms-user-select: none;
    }
    </style>
      
    <!-- Custom Theme Style -->
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        
        <!-- Profile and Sidebarmenu -->
        <?php
        include("sidebarmenuu.php");
        ?>
        <!-- /Profile and Sidebarmenu -->
        
        <!-- top navigation -->
        <?php
        include("header.php");
        ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="row">
              <div class="col-md-12">
                <div class="">
                  <div class="x_content">
                    <div class="row">
                      <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">     
                            <br><br> 
                                <center><h1><b>Selamat Datang,  <?php echo $_SESSION['nama'];?></b></h1></center>
                                
                                
                            <br><br>  
                        </div>
                      </div>
                                <?php include '../koneksi/koneksi.php';
                                $sql1		= "SELECT * FROM tb_purchaseorder";  
                                $query1  	= mysqli_query($db, $sql1);
                                $jumlah1   = mysqli_num_rows($query1);
                                  ?>
                      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-inbox"></i>
                          </div>
                          <div class="count"><?php echo "$jumlah1" ?></div>
                          <h3>Purchase Order</h3>
                          <p>Telah diarsipkan</p>
                        </div>
                      </div>
                                <?php include '../koneksi/koneksi.php';
                                $sql2		= "SELECT * FROM tb_fakturpajak";  
                                $query2  	= mysqli_query($db, $sql2);
                                $jumlah2   = mysqli_num_rows($query2);
                                  ?>
                      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-file-archive-o"></i>
                          </div>
                          <div class="count"><?php echo "$jumlah2" ?></div>
                          <h3>Faktur Pajak</h3>
                          <p>Telah Diarsipkan</p>
                        </div>
                      </div>
                                <?php include '../koneksi/koneksi.php';
                                $sql3		= "SELECT * FROM tb_penjualan";  
                                $query3  	= mysqli_query($db, $sql3);
                                $jumlah3   = mysqli_num_rows($query3);
                                  ?>
                      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-credit-card "></i>
                          </div>
                          <div class="count"><?php echo "$jumlah3" ?></div>

                          <h3>Penjualan</h3>
                          <p>Telah Didaftarkan</p>
                        </div>
                      </div>
                      <?php include '../koneksi/koneksi.php';
                                $sql3		= "SELECT * FROM tb_pembayaran";  
                                $query3  	= mysqli_query($db, $sql3);
                                $jumlah3   = mysqli_num_rows($query3);
                                  ?>
                      <div class="animated flipInY col-lg-4 col-md-4 col-sm-6 col-xs-12">
                        <div class="tile-stats">
                          <div class="icon"><i class="fa fa-shopping-cart "></i>
                          </div>
                          <div class="count"><?php echo "$jumlah3" ?></div>

                          <h3>Pembayaran</h3>
                          <p>Telah Didaftarkan</p>
                        </div>
                      </div>
                    </div>
                
                <div id="container" style="width: 100%;">
                  <canvas id="canvas"></canvas>
                </div>

                <?php 
                //misal ada 3 dealer
                $dealer = 1;
                for($d=1;$d<=$dealer;$d++)
                {
                  //kemudian misal data dari bulan 1 hingga bulan 12
                  for($b=1;$b<=12;$b++)
                  {
                     include '../koneksi/koneksi.php';
                     $sqlpo		= "SELECT * FROM tb_purchaseorder where MONTH(tanggal_po) = '$b'";  
                     $querypo  = mysqli_query($db, $sqlpo);
                     $jumlahpo = mysqli_num_rows($querypo);
                     
                  $data[$d][$b] = $jumlahpo;
                  }
                }
                $dealer = 2;
                for($d=2;$d<=$dealer;$d++)
                {
                  //kemudian misal data dari bulan 1 hingga bulan 12
                  for($b=1;$b<=12;$b++)
                  {
                     include '../koneksi/koneksi.php';
                     $sqlfp		= "SELECT * FROM tb_fakturpajak where MONTH(tanggal_fp) = '$b'";  
                     $queryfp  = mysqli_query($db, $sqlfp);
                     $jumlahfp = mysqli_num_rows($queryfp);
                     
                  $data[$d][$b] = $jumlahfp;
                  }
                }
                $dealer = 3;
                for($d=3;$d<=$dealer;$d++)
                {
                  //kemudian misal data dari bulan 1 hingga bulan 12
                  for($b=1;$b<=12;$b++)
                  {
                     include '../koneksi/koneksi.php';
                     $sqlpj		= "SELECT * FROM tb_penjualan where MONTH(tanggal_pj) = '$b'";  
                     $querypj  = mysqli_query($db, $sqlpj);
                     $jumlahpj = mysqli_num_rows($querypj);
                     
                  $data[$d][$b] = $jumlahpj;
                  }
                }
                $dealer = 4;
                for($d=4;$d<=$dealer;$d++)
                {
                  //kemudian misal data dari bulan 1 hingga bulan 12
                  for($b=1;$b<=12;$b++)
                  {
                     include '../koneksi/koneksi.php';
                     $sqlpb		= "SELECT * FROM tb_pembayaran where MONTH(tanggal_pb) = '$b'";  
                     $querypb  = mysqli_query($db, $sqlpb);
                     $jumlahpb = mysqli_num_rows($querypb);
                     
                  $data[$d][$b] = $jumlahpb;
                  }
                }

                function random_color()
                {  
                  return sprintf('#%06X', mt_rand(0, 0xFFFFFF));
                }
                ?>

                <script>
                  var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'];
                  var color = Chart.helpers.color;
                  var barChartData = {
                  labels: MONTHS,
                  datasets: [
                  <?php 
                  $nota = array(' ', 'Purchase Order' , 'Faktur Pajak' , 'Penjualan' , 'Pembayaran');
                  for($d=1;$d<=$dealer;$d++)
                  {
                    $color = random_color();
                  ?>
                    {
                    label: '<?php echo " $nota[$d]";?>',
                    backgroundColor: color('<?php echo $color;?>').alpha(0.5).rgbString(),
                    borderColor: '<?php echo $color;?>',
                    borderWidth: 1,
                    data: [
                      <?php 
                      for($b=1;$b<=12;$b++)
                      {
                      echo $data[$d][$b].",";
                      }
                      ?>     
                    ]
                    },
                  <?php 
                  }
                  ?>
                  ]

                  };

                  window.onload = function() {
                  var ctx = document.getElementById('canvas').getContext('2d');
                  window.myBar = new Chart(ctx, {
                    type: 'bar',
                    data: barChartData,
                    options: {
                    responsive: true,
                    legend: {
                      position: 'top',
                    },
                    title: {
                      display: true,
                      text: 'Grafik Data Arsip'
                    }
                    }
                  });

                  };

                </script>
                </div>
            </div>
          </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            PT. ULU MAS JAYA 2022
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../assets/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../assets/vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../assets/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../assets/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <!-- gauge.js -->
    <script src="../assets/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="../assets/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="../assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="../assets/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="../assets/vendors/Flot/jquery.flot.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.time.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="../assets/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="../assets/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="../assets/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="../assets/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="../assets/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="../assets/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="../assets/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="../assets/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="../assets/vendors/moment/min/moment.min.js"></script>
    <script src="../assets/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>

  </body>
</html>
