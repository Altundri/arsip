<?php
	session_start();
	include '../../koneksi/koneksi.php';
    $id				                    = mysqli_real_escape_string($db,$_POST['id_pj']);   
    $terima_pj               = mysqli_real_escape_string($db,$_POST['terima_pj']);
	$alamat_pj	                = mysqli_real_escape_string($db,$_POST['alamat_pj']);
	$jumlah_pj            = mysqli_real_escape_string($db,$_POST['jumlah_pj']);
	$tanggal_pj	        = mysqli_real_escape_string($db,$_POST['tanggal_pj']);
    $deskripsi_pj       = mysqli_real_escape_string($db,$_POST['deskripsi_pj']);
    $file_pj			            = $_FILES['file_pj']['name'];
     date_default_timezone_set('Asia/Jakarta'); 
		$tanggal_entry  = date("Y-m-d H:i:s");
        $thnNow = date("Y");
        $tgl_masuk                  = date('Y-m-d H:i:s', strtotime($tanggal_pj));
        
	
	$sql  		= "SELECT * FROM tb_penjualan where id_pj='".$id."'";                        
	$query  	= mysqli_query($db, $sql);
	$data 		= mysqli_fetch_array($query);
	
    //jika file tidak ada
	if ($file_pj == ''){
		$ext			= substr($data['file_pj'], strripos($data['file_pj'], '.'));	
		$nama_b  		= $thnNow.'-'.$id. $ext;
		rename("../penjualan/".$data['file_pj'], "../penjualan/".$nama_b);
		$sql = "UPDATE tb_penjualan set 
						
						
                        terima_pj       	= '$terima_pj',
						alamat_pj 			= '$alamat_pj',
						jumlah_pj		    = '$jumlah_pj',
						tanggal_pj     		= '$tgl_masuk',
                        deskripsi_pj        = '$deskripsi_pj',
                        file_pj				= '$nama_b' 
				where id_pj = $id";
				
		$execute = mysqli_query($db, $sql);			
						
		echo "<script>alert('Data Penjualan Berhasil Diubah! ');
    			window.location.href ='../detail-penjualan.php?id_pj=".$id."';</script>";
		
	}	
	else{
		
        $tipe_file 		= $_FILES['file_pj']['type'];
        $ukuran_file 	= $_FILES['file_pj']['size'];
		if (($tipe_file == "application/pdf") and ($ukuran_file <= 10340000)){	
			unlink("../penjualan/".$data['file_pj']);
			$ext_file		= substr($file_pj, strripos($file_pj, '.'));			
			$tmp_file 		= $_FILES['file_pj']['tmp_name'];
			
			$nama_baru = $thnNow.'-'.$id. $ext_file;
			$path = "../penjualan/".$nama_baru;
			move_uploaded_file($tmp_file, $path);
			
			$sql = "UPDATE tb_penjualan set 
						
						
                        terima_pj       	= '$terima_pj',
						alamat_pj 			= '$alamat_pj',
						jumlah_pj		    = '$jumlah_pj',
						tanggal_pj     		= '$tgl_masuk',
                        deskripsi_pj        = '$deskripsi_pj',
						file_pj				= '$nama_baru' 
				where id_pj = $id";
				
			$execute = mysqli_query($db, $sql);			
		
			echo "<script>alert('Data Penjualan Berhasil Diubah! ');
			window.location.href ='../detail-penjualan.php?id_pj=".$id."';</script>";		
		}
		else{
			echo "<script>alert('Data Penjualan Gagal Diubah! ');
			window.location.href ='../editpenjualan.php?id_pj=".$id."';</script>";
	
		}
	
	}
	?>
	