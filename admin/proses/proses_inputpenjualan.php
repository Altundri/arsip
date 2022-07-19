<?php
	session_start();
	include '../../koneksi/koneksi.php';
	
	$id	                = mysqli_real_escape_string($db,$_POST['id_pj']);
    $terima_pj               = mysqli_real_escape_string($db,$_POST['terima_pj']);
	$alamat_pj	                = mysqli_real_escape_string($db,$_POST['alamat_pj']);
    $jumlah_pj	                = mysqli_real_escape_string($db,$_POST['jumlah_pj']);
	$tanggal_pj	        = mysqli_real_escape_string($db,$_POST['tanggal_pj']);
	$deskripsi_pj            = mysqli_real_escape_string($db,$_POST['deskripsi_pj']);
    

        date_default_timezone_set('Asia/Jakarta'); 
		$tanggal_entry  = date("Y-m-d H:i:s");
        $thnNow = date("Y");
	
	$nama_file_lengkap 		= $_FILES['file_pj']['name'];
	$nama_file 		= substr($nama_file_lengkap, 0, strripos($nama_file_lengkap, '.'));
	$ext_file		= substr($nama_file_lengkap, strripos($nama_file_lengkap, '.'));
	$tipe_file 		= $_FILES['file_pj']['type'];
	$ukuran_file 	= $_FILES['file_pj']['size'];
	$tmp_file 		= $_FILES['file_pj']['tmp_name'];
	
    $tgl_masuk                  = date('Y-m-d', strtotime($tanggal_pj));
    
	
    if (!($terima_pj  =='') and !($alamat_pj =='') and !($jumlah_pj =='')  and !($tgl_masuk=='') and !($deskripsi_pj=='') and 
		($tipe_file == "application/pdf") and ($ukuran_file <= 10340000)){		
		
		$nama_baru = $thnNow.'-'.$id. $ext_file;
		$path = "../penjualan/".$nama_baru;
		move_uploaded_file($tmp_file, $path);
		
		$sql = "INSERT INTO tb_penjualan(terima_pj, alamat_pj, jumlah_pj, tanggal_pj, deskripsi_pj, file_pj )
				values ('$terima_pj ', '$alamat_pj', '$jumlah_pj', '$tanggal_pj', '$deskripsi_pj', '$nama_baru')";
		$execute = mysqli_query($db, $sql);
		
		echo "<script>alert('Data Penjualan Berhasil Ditambahkan! ');
    			window.location.href ='../datapenjualan.php';</script>";
	}
	else{
		echo "<script>alert('Silahkan isi semua kolom lalu tekan Submit! ');
    			window.location.href ='../inputpenjualan.php?';</script>";
	}
	
?>
	