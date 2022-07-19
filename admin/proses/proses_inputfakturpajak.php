<?php
	session_start();
	include '../../koneksi/koneksi.php';
	
	$id	                = mysqli_real_escape_string($db,$_POST['id_fp']);
	$nomor_fp	                = mysqli_real_escape_string($db,$_POST['nomor_fp']);
	$nama_pkp	                = mysqli_real_escape_string($db,$_POST['nama_pkp']);
    $alamat_pkp	                    = mysqli_real_escape_string($db,$_POST['alamat_pkp']);
	$npwp_pkp           = mysqli_real_escape_string($db,$_POST['npwp_pkp']);
	$nama_pjkp		            = mysqli_real_escape_string($db,$_POST['nama_pjkp']);
	$alamat_pjkp   	            = mysqli_real_escape_string($db,$_POST['alamat_pjkp']);
    $npwp_pjkp	                        = mysqli_real_escape_string($db,$_POST['npwp_pjkp']);
	$tanggal_fp	        = mysqli_real_escape_string($db,$_POST['tanggal_fp']);
	
        date_default_timezone_set('Asia/Jakarta'); 
		$tanggal_entry  = date("Y-m-d H:i:s");
        $thnNow = date("Y");
	
	$nama_file_lengkap 		= $_FILES['file_fp']['name'];
	$nama_file 		= substr($nama_file_lengkap, 0, strripos($nama_file_lengkap, '.'));
	$ext_file		= substr($nama_file_lengkap, strripos($nama_file_lengkap, '.'));
	$tipe_file 		= $_FILES['file_fp']['type'];
	$ukuran_file 	= $_FILES['file_fp']['size'];
	$tmp_file 		= $_FILES['file_fp']['tmp_name'];
	
    $tgl_masuk                 = date('Y-m-d H:i:s', strtotime($tanggal_fp));
	
    if (!($nomor_fp =='') and !($nama_pkp =='') and !($alamat_pkp =='') and !($npwp_pkp =='') and !($nama_pjkp =='') and !($alamat_pjkp =='') and !($npwp_pjkp =='') and !($tgl_masuk=='') and    
		($tipe_file == "application/pdf") and ($ukuran_file <= 10340000)){		
		
		$nama_baru = $thnNow.'-'.$nomor_fp. $ext_file;
		$path = "../faktur_pajak/".$nama_baru;
		move_uploaded_file($tmp_file, $path);
		
		$sql = "INSERT INTO tb_fakturpajak( nomor_fp, nama_pkp, alamat_pkp, npwp_pkp, nama_pjkp, alamat_pjkp,  npwp_pjkp, tanggal_fp ,file_fp)
				values ( '$nomor_fp', '$nama_pkp', '$alamat_pkp', '$npwp_pkp', '$nama_pjkp', '$alamat_pjkp',  '$npwp_pjkp', '$tgl_masuk','$nama_baru')";
		$execute = mysqli_query($db, $sql);
		
		echo "<script>alert('Data Faktur Pajak Berhasil Ditambahkan! ');
    			window.location.href ='../datafakturpajak.php';</script>";
	}
	else{
		echo "<script>alert('Silahkan isi semua kolom lalu tekan Submit! ');
    			window.location.href ='../inputfakturpajak.php?';</script>";
	}
	
?>
	