<?php
	session_start();
	include '../../koneksi/koneksi.php';
    $id				                    = mysqli_real_escape_string($db,$_POST['id_pb']);   
    $nama_pb               = mysqli_real_escape_string($db,$_POST['nama_pb']);
	$alamat_pb	                = mysqli_real_escape_string($db,$_POST['alamat_pb']);
	$jumlah_pb            = mysqli_real_escape_string($db,$_POST['jumlah_pb']);
	$tanggal_pb	        = mysqli_real_escape_string($db,$_POST['tanggal_pb']);
    $deskripsi_pb       = mysqli_real_escape_string($db,$_POST['deskripsi_pb']);
    $file_pb			            = $_FILES['file_pb']['name'];
     date_default_timezone_set('Asia/Jakarta'); 
		$tanggal_entry  = date("Y-m-d H:i:s");
        $thnNow = date("Y");
        $tgl_masuk                  = date('Y-m-d H:i:s', strtotime($tanggal_pb));
        
	
	$sql  		= "SELECT * FROM tb_pembayaran where id_pb='".$id."'";                        
	$query  	= mysqli_query($db, $sql);
	$data 		= mysqli_fetch_array($query);
	
    //jika file tidak ada
	if ($file_pb == ''){
		$ext			= substr($data['file_pb'], strripos($data['file_pb'], '.'));	
		$nama_b  		= $thnNow.'-'.$id. $ext;
		rename("../pembayaran/".$data['file_pb'], "../pembayaran/".$nama_b);
		$sql = "UPDATE tb_pembayaran set 
						
						
                        nama_pb       	= '$nama_pb',
						alamat_pb 			= '$alamat_pb',
						jumlah_pb		    = '$jumlah_pb',
						tanggal_pb     		= '$tgl_masuk',
                        deskripsi_pb        = '$deskripsi_pb',
                        file_pb				= '$nama_b' 
				where id_pb = $id";
				
		$execute = mysqli_query($db, $sql);			
						
		echo "<script>alert('Data Pembayaran Berhasil Diubah! ');
    			window.location.href ='../detail-pembayaran.php?id_pb=".$id."';</script>";
		
	}	
	else{
		
        $tipe_file 		= $_FILES['file_pb']['type'];
        $ukuran_file 	= $_FILES['file_pb']['size'];
		if (($tipe_file == "application/pdf") and ($ukuran_file <= 10340000)){	
			unlink("../pembayaran/".$data['file_pb']);
			$ext_file		= substr($file_pb, strripos($file_pb, '.'));			
			$tmp_file 		= $_FILES['file_pb']['tmp_name'];
			
			$nama_baru = $thnNow.'-'.$id. $ext_file;
			$path = "../pembayaran/".$nama_baru;
			move_uploaded_file($tmp_file, $path);
			
			$sql = "UPDATE tb_pembayaran set 
						
						
                        nama_pb       	= '$nama_pb',
						alamat_pb 			= '$alamat_pb',
						jumlah_pb		    = '$jumlah_pb',
						tanggal_pb     		= '$tgl_masuk',
                        deskripsi_pb        = '$deskripsi_pb',
						file_pb				= '$nama_baru' 
				where id_pb = $id";
				
			$execute = mysqli_query($db, $sql);			
		
			echo "<script>alert('Data Pembayaran Berhasil Diubah! ');
			window.location.href ='../detail-pembayaran.php?id_pb=".$id."';</script>";		
		}
		else{
			echo "<script>alert('Data Pembayaran Gagal Diubah! ');
			window.location.href ='../editpembayaran.php?id_pb=".$id."';</script>";
	
		}
	
	}
	?>
	