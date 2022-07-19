<?php
	session_start();
	include '../../koneksi/koneksi.php';
	
	$id	                = mysqli_real_escape_string($db,$_POST['id_pb']);
    $nama_pb               = mysqli_real_escape_string($db,$_POST['nama_pb']);
	$alamat_pb	                = mysqli_real_escape_string($db,$_POST['alamat_pb']);
    $jumlah_pb	                = mysqli_real_escape_string($db,$_POST['jumlah_pb']);
	$tanggal_pb	        = mysqli_real_escape_string($db,$_POST['tanggal_pb']);
	$deskripsi_pb            = mysqli_real_escape_string($db,$_POST['deskripsi_pb']);
    

        date_default_timezone_set('Asia/Jakarta'); 
		$tanggal_entry  = date("Y-m-d H:i:s");
        $thnNow = date("Y");
	
	$nama_file_lengkap 		= $_FILES['file_pb']['name'];
	$nama_file 		= substr($nama_file_lengkap, 0, strripos($nama_file_lengkap, '.'));
	$ext_file		= substr($nama_file_lengkap, strripos($nama_file_lengkap, '.'));
	$tipe_file 		= $_FILES['file_pb']['type'];
	$ukuran_file 	= $_FILES['file_pb']['size'];
	$tmp_file 		= $_FILES['file_pb']['tmp_name'];
	
    $tgl_masuk                  = date('Y-m-d', strtotime($tanggal_pb));
    
	
    if (!($nama_pb  =='') and !($alamat_pb =='') and !($jumlah_pb =='')  and !($tgl_masuk=='') and !($deskripsi_pb=='') and 
		($tipe_file == "application/pdf") and ($ukuran_file <= 10340000)){		
		
		$nama_baru = $thnNow.'-'.$id. $ext_file;
		$path = "../pembayaran/".$nama_baru;
		move_uploaded_file($tmp_file, $path);
		
		$sql = "INSERT INTO tb_pembayaran(nama_pb, alamat_pb, jumlah_pb, tanggal_pb, deskripsi_pb, file_pb )
				values ('$nama_pb ', '$alamat_pb', '$jumlah_pb', '$tanggal_pb', '$deskripsi_pb', '$nama_baru')";
		$execute = mysqli_query($db, $sql);
		
		echo "<script>alert('Data Pembayaran Berhasil Ditambahkan! ');
    			window.location.href ='../datapembayaran.php';</script>";
	}
	else{
		echo "<script>alert('Silahkan isi semua kolom lalu tekan Submit! ');
    			window.location.href ='../inputpembayaran.php?';</script>";
	}
	
?>
	