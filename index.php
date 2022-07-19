<?php
session_start();
include "koneksi/ceksession.php";
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arsip PT. Ulu Mas Jaya</title>
    <meta name="description" content="Free Bootstrap Theme by BootstrapMade.com">
    <meta name="keywords" content="free website templates, free bootstrap themes, free template, free bootstrap, free website template">
    
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,300|Raleway:300,400,900,700italic,700,300,600">
    <link rel="stylesheet" type="text/css" href="css/jquery.bxslider.css">
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="shortcut icon" href="img/favicon.ico">

  </head>
  <body>

    <div class="loader"></div>
    <div id="myDiv">
    <!--HEADER-->
    <div class="header">
      <div class="bg-color">
        <header id="main-header">
        <nav class="navbar navbar-default navbar-fixed-top">
          <div class="container">
            <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">E-ARSIP <span class="logo-dec">PT. ULU MAS JAYA</span></a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
              <ul class="nav navbar-nav navbar-right">
                <li class="active"><a href="#main-header">Beranda</a></li>
                <li class=""><a href="#about">Tentang</a></li>
                <li class=""><a href="#brand">Brand </a></li>
                <li class=""><a href="#struktur">Struktur Organisasi</a></li>
                <li class=""><a href="#kontak">Contact</a></li>
                <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="" alt="">Masuk
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="admin/login"><i class="fa fa-sign-out pull-right"></i> Admin</a></li> 
                    <li><a href="pimpinan/login"><i class="fa fa-sign-out pull-right"></i> Pimpinan</a></li>
                  </ul>
                </li>
              </ul>
              </ul>
            </div>
          </div>
        </nav>
        </header>
        <div class="wrapper">
        <div class="container">
          <div class="row">
            <div class="banner-info text-center wow fadeIn delay-05s">
              <h2 class="bnr-sub-title"></h2>
              <div class="logo">
		            <img src="img/logo.png" alt="" />
	            </div> 
              <h3 class="bnr-sub-title">E-ARSIP </h3>
                <h3 class="bnr-sub-title"><span class="logo-dec">PT. ULU MAS JAYA</span></h3>
            </div>
          </div>
        </div>
        </div>
      </div>
    </div>
    <!--/ HEADER-->
    <!---->
    <section id="about" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Tentang</h2>
            
            
            <p class="sub-title pad-bt15">Perusahaan didirikan pada tanggal 30 Agustus 2013  dengan nama CV Ulu Mas dan pada tanggal 22 Pebruari 2019 berganti nama menjadi PT Ulu Mas Jaya(“UMJ”). Perusahaan berlokasi di Palembang, Sumatera Selatan. Perusahaan bergerak di bidang usaha Perdagangan Besar dan Jasa . Bidang Usaha saat ini Startup e-commerce (mall online) dengan brand “ Brayamart.com”, belibenih.com, otomotif-jasa.com, guebantu, konsultan Perkebunan, supplier, informasi dan teknologi, jasa angkutan dan pengiriman serta Biomass.</p>
            <hr class="bottom-line">
            
            
          </div>
        <div class="col-md-12">
        </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="wrap-item ">
            <h3 class="service-title pad-bt15 text-center">Visi</h3>
              <p class="sub-title pad-bt15">Menjadi perusahaan terkemuka dalam menyediakan dan menghasilkan produk-produk berkualitas tinggi dan berperan dalam pembangunan kesejahteraan masyarakat</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="wrap-item ">
            <h3 class="service-title pad-bt15 text-center">Misi</h3>
              <p class="sub-title pad-bt15">  1.Membangun perusahaan berbasis pengetahuan, efisien  dan menguntungkan.<br><br>
                                              2.Berorientasi pada kepuasan pelanggan dan menciptakan pelanggan yang loyal<br><br>
                                              3.Memberikan peluang kepada masyarakat meraih pendapatan, meningkatkan standard hidup, Pendidikan serta keterampilan</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="wrap-item ">
            <h3 class="service-title pad-bt15 text-center">Tata Nilai</h3>
              <p class="sub-title pad-bt15"><b>VISIONER</b><br>
                                            Mampu melihat jauh kedepan dan membuat proyeksi jangka Panjang dalam pengembangan bisnis
                                            <br><b>INTEGRITAS</b><br>
                                            Mengedepankan prilaku percaya, terbuka, positif, jujur, berkomitmen dan bertanggung jawab<br>
                                            <b>INOVATIF</b><br>
                                            Selalu bekerja dengan kesungguhan untuk memperoleh terobosan baru untuk menghasilkan produk dan layanan terbaik dari sebelumnya
                                            <br><b>PROFESIONAL</b><br>
                                            Melaksanakan semua tugas sesuai dengan kompetensi dengan kreativitas, penuh keberanian, komitmen penuh dalam kerjasama untuk keahlian yang terus meningkat
                                            SADAR BIAYA DAN LINGKUNGAN<br>
                                            Memiliki kesadaran tinggi dalam setiap pengelolaan aktivitas dengan menjalankan usaha atas asas manfaat yang maksimal dan kepedulain lingkungan.</p>
            </div>
          </div>
        
        </div>
        <hr class="bottom-line">
        <center><h2 class="service-title pad-bt15">Foto Perusahaan</h2>
        <hr class="bottom-line">
      <div class="paul-slider">
        <div class="isi-slider">
          <img src="img/braya1.jpg" alt="Gambar 1">
          <img src="img/braya2.jpg" alt="Gambar 2">
          <img src="img/braya3.jpg" alt="Gambar 3">
        </div>
      </div>
      
	</div>
      </div>
      <hr class="bottom-line">
    </section>
    <!---->
    <!---->
    <section id="brand" class="section-padding wow fadeIn delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Brand Kami</h2>
            
            
            <hr class="bottom-line">
            
            
          </div>
        <div class="col-md-12">
        </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="wrap-item ">
            <center><img src="img/brayamart.png"  width="200" height="100">
            <h3 class="service-title pad-bt15 text-center">brayamart.com</h3>
              <p class="sub-title pad-bt15">Berawal dari keinginan membantu memasarkan produk petani, UKM dan pengusaha penghasil produk, serta mendekatkan dan memudahkan   konsumen mendapatkan produk yang di inginkan, maka brayamart.com lahir  dengan konsep mall online (market place) guna membantu memudahkan kehidupan orang banyak melalui teknologi.
        <br>
                                            Dimulai  dari layanan sayuran, bumbu, ikan, daging dan kelengkapan dapur di kota Palembang, sekarang aplikasi brayamart.com telah menyediakan dan mempersiapkan 13 layanan  katagori utama guna memudah dan melayani pelanggan.
                                            Braya ( bersaudara ) menjadi nama yang mengingat kita semua kalau dengan bekerja bersama dan saling melengkapi kita akan maju dan sejahtera.</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="wrap-item ">
              <center><img src="img/belibenih.png"  width="200" height="100">
            <h3 class="service-title pad-bt15 text-center">belibenih.com</h3>
              <p class="sub-title pad-bt15">  Berawal dari melihat kondisi melihat para Perusahaan perkebunan, Produsen benih, Kelompok tani, Petani Pekebun sulit dalam mendapatkan benih/kecambah kelapa sawit yang unggul dan terpercaya kami hadir pada awal tahun 2021 dengan solusi belibenih.com</p>
            </div>
          </div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="wrap-item ">
            <center><img src="img/otomotif.jpg"  width="200" height="100">
            <h3 class="service-title pad-bt15 text-center">otomotif-jasa.com</h3>
              <p class="sub-title pad-bt15">  otomotif-jasa.com ini kami bangun dengan ide bahwa mempermudah masyarakat untuk mendapatkan pelayanan otomotif dan sekaligus jasa dalam perbaikan kendaraan mereka seperti mobil dan motor dalam satu genggaman aplikasi smartphone yang dapat mereka akses melalu android & IOS.</p>
            </div>
          </div>
        </div>
      </div>
      <hr class="bottom-line">
    </section>
    <section id="struktur" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Struktur Organisasi</h2>
            <hr class="bottom-line">
          </div>
          <div class="col-md-3"></div>
           <center> <img src="img/organisasi.jpg">
        </div>
        <hr class="bottom-line">
      </div>
    </section>
    <section id="kontak" class="section-padding wow fadeInUp delay-05s">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <h2 class="service-title pad-bt15">Contact Us</h2>
            <p class="sub-title pad-bt15" >For all enquiries , please email us using the form below.</p>
            <form action="admin/proses/proses_inputkontak.php"  name="formkontak" method="post" enctype="multipart/form-data" id="demo-form2" data-parsley-validate class="form-horizontal form-label-left">
                  
                <input name="id_kontak" type="hidden" class="feedback-input" /> 
                <input name="nama" type="text" class="feedback-input" placeholder="Name" />   
                <input name="email" type="text" class="feedback-input" placeholder="Email" />
                <textarea name="komentar" class="feedback-input" placeholder="Comment"></textarea>
                <button type="submit" name="input" value="SUBMIT" class="btn btn-primary"></i> SUBMIT</button>

                    </form>
                    <hr class="bottom-line">
                    <div class="row">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63753.19904842392!2d104.61399333124997!3d-2.937746399999993!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b7414f29db871%3A0x9df4b490f03b56ce!2sBrayamart!5e0!3m2!1sid!2sid!4v1656782317275!5m2!1sid!2sid" width="100%" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
          </div>
         
        </div>
       
      </div>
    </section>
    <!---->
    <!---->
    
    <!---->
    <!---->
    <!---->
    <!---->
    <footer class="site-footer">

      <div class="container">

        <div class="row">
          <div class="col-md-4">
            <h3 class="footer-heading mb-4 text-white">Alamat</h3>
            <p>Citra Grand City Cluster Copacabana Blok D30/01, Talang Kelapa, Alang-Alang Lebar, Palembang City, South Sumatra 30155</p>
            <h3 class="footer-heading mb-4 text-white">No. Telp</h3>
            <p>0811-7828-802</p>
          </div>
          
          <div class="col-md-4">
            <div class="col-md-12"><h3 class="footer-heading mb-4 text-white">Social Media</h3></div>
              <div class="col-md-12">
                <p>
                  <a href="https://www.facebook.com/" target="_blank" class="p-2"><span class="fa fa-facebook"></span></a>
                  <a href="https://www.twitter.com/" target="_blank" class="p-2"><span class="fa fa-twitter"></span></a>
                  <a href="https://www.instagram.com/" target="_blank" class="p-2"><span class="fa fa-instagram"></span></a>
                  <a href="https://www.whatsapp.com/" target="_blank" class="p-2"><span class="fa fa-whatsapp"></span></a>
                 
                </p>
              </div>
            </div>
        </div>
        
    </footer>
    <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12" style="padding-top:10px;">
            <p>
            
            Copyright &copy; <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear());</script> PT. Ulu Mas Jaya. | All Rights Reserved. 
            
          
            </p>
          </div>
          
        </div>
      </div>
    <!---->
  </div>
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.easing.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/custom.js"></script>
    <script src="contactform/contactform.js"></script>
    
  </body>
</html>