<?php 
	 include '../koneksi/koneksi.php';
			$sql  		= "SELECT * FROM tb_admin where id_admin='".$_SESSION['id']."'";                        
			$query  	= mysqli_query($db, $sql);
			$data 		= mysqli_fetch_array($query);
?>
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="index.php" class="site_title"><img src="../img/favicon.ico" ><span> E-Arsip</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">
              <div class="profile_pic">
                <img src="images/<?php echo $data['gambar']; ?>" height="55" width="55" alt="" class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Selamat Datang,</span>
                <h2><?php echo $_SESSION['nama'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />
            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <h3>Menu</h3>
                <ul class="nav side-menu">
                  
                      <li><a href="datapurchaseorder.php"><i class="fa fa-inbox"></i>Purchase Order</a></li>
                      <li><a href="datafakturpajak.php"><i class="fa fa-file-archive-o"></i>Faktur Pajak</a></li>
                      <li><a href="datapenjualan.php"><i class="fa fa-credit-card"></i>Penjualan</a></li>
                      <li><a href="datapembayaran.php"><i class="fa fa-shopping-cart"></i>Pembayaran</a></li>
                    
                  </li>
                </ul>
                <ul class="nav side-menu">
                  <li><a href="feedback.php"><i class="fa fa-comment"></i> Feedback </a></li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->
          </div>
        </div>
