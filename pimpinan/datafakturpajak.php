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
    <!-- Datatables -->
    <link href="../assets/vendors/datatables.net-bs/css/dataTables.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-buttons-bs/css/buttons.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-fixedheader-bs/css/fixedHeader.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-responsive-bs/css/responsive.bootstrap.min.css" rel="stylesheet">
    <link href="../assets/vendors/datatables.net-scroller-bs/css/scroller.bootstrap.min.css" rel="stylesheet">
      <link rel="shortcut icon" href="../img/favicon.ico">
    <!-- Custom Theme Style -->
    <link href="../assets/build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <!-- Profile and Sidebarmenu -->
        <?php
        include("sidebarmenu.php");
        ?>
        <!-- /Profile and Sidebarmenu -->
        
        <!-- top navigation -->
        <?php
        include("header.php");
        ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_right">
                <h2>Faktur Pajak ><small> Data Faktur Pajak</small></h2>
              </div>
            </div>

            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Data<small>Faktur Pajak</small></h2>
                    <div class="clearfix"></div>
                  </div>
                   
                  <div class="x_content">
                  <div class="x_content">
                              <?php
                              include '../koneksi/koneksi.php';
                              $sql1  		= "SELECT * FROM tb_fakturpajak ";                        
                              $query1  	= mysqli_query($db, $sql1);
                              $total		= mysqli_num_rows($query1);
                              if ($total == 0) {
                                echo"<center><h2>Belum Ada Data Faktur Pajak</h2></center>";
                              }
                              else{?>
                    <table id="datatable" class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th rowspan="2">No.</th>
                          <th rowspan="2">No Faktur Pajak</th>
                          <th rowspan="2">Tanggal Masuk</th>
                          <th colspan="3">Pengusaha Kena Pajak</th>
                          <th colspan="3">Penerima Jasa Kena Pajak</th>
                          <th rowspan="2">Aksi</th>
                        </tr>
                        <tr>
                          <th width="10%">Nama </th>
                          <th width="20%">Alamat</th>
                          <th width="15%">NPWP</th>
                          <th width="10%">Nama</th>
                          <th width="20%">Alamat</th>
                          <th width="15%">NPWP</th>
                          
                          
                        </tr>
                      </thead>


                      <tbody>
                            <?php
                            while($data = mysqli_fetch_array($query1)){
                              echo'<tr>
                              <td>	'. $data['id_fp'].'  	</td>
                              <td>	'. $data['nomor_fp'].'  	</td>
                              <td>	'. $data['tanggal_fp'].'		</td>
                              <td>	'. $data['nama_pkp'].'	</td>
                              <td>	'. $data['alamat_pkp'].'  		</td>
                              <td>	'. $data['npwp_pkp'].'  		</td>
                              <td>	'. $data['nama_pjkp'].'		</td>
                              <td>  '. $data['alamat_pjkp'].'  </td>
                              <td>  '. $data['npwp_pjkp'].'  </td> 
                              <td style="text-align:center;">
                              <a href= ../admin/faktur_pajak/'.$data['file_fp'].'><button type="button" title="Unduh File" class="btn btn-success btn-xs"><i class="fa fa-download"></i></button></a>
                              </td>
                              </tr>';
                            }
                            ?>
                      </tbody>
                    </table>
                    <?php } ?>
                  </div>
                  </div>
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
    <!-- iCheck -->
    <script src="../assets/vendors/iCheck/icheck.min.js"></script>
    <!-- Datatables -->
    <script src="../assets/vendors/datatables.net/js/jquery.dataTables.min.js"></script>
    <script src="../assets/vendors/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons-bs/js/buttons.bootstrap.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.flash.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.html5.min.js"></script>
    <script src="../assets/vendors/datatables.net-buttons/js/buttons.print.min.js"></script>
    <script src="../assets/vendors/datatables.net-fixedheader/js/dataTables.fixedHeader.min.js"></script>
    <script src="../assets/vendors/datatables.net-keytable/js/dataTables.keyTable.min.js"></script>
    <script src="../assets/vendors/datatables.net-responsive/js/dataTables.responsive.min.js"></script>
    <script src="../assets/vendors/datatables.net-responsive-bs/js/responsive.bootstrap.js"></script>
    <script src="../assets/vendors/datatables.net-scroller/js/dataTables.scroller.min.js"></script>
    <script src="../assets/vendors/jszip/dist/jszip.min.js"></script>
    <script src="../assets/vendors/pdfmake/build/pdfmake.min.js"></script>
    <script src="../assets/vendors/pdfmake/build/vfs_fonts.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../assets/build/js/custom.min.js"></script>
    <script type="text/javascript" language="JavaScript">
        function konfirmasi()
        {
        tanya = confirm("Anda Yakin Akan Menghapus Data ?");
        if (tanya == true) return true;
        else return false;
        }
    </script>

  </body>
</html>