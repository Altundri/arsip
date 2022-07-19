<?php
	session_start();
	include '../../koneksi/koneksi.php';
    $id				           		    = mysqli_real_escape_string($db,$_POST['id_fp']);
	$nomor_fp	                = mysqli_real_escape_string($db,$_POST['nomor_fp']);
	$nama_pkp	                = mysqli_real_escape_string($db,$_POST['nama_pkp']);
    $alamat_pkp	                    = mysqli_real_escape_string($db,$_POST['alamat_pkp']);
	$npwp_pkp		            = mysqli_real_escape_string($db,$_POST['npwp_pkp']);
	$nama_pjkp   	            = mysqli_real_escape_string($db,$_POST['nama_pjkp']);
    $alamat_pjkp	                        = mysqli_real_escape_string($db,$_POST['alamat_pjkp']);
	$npwp_pjkp	                        = mysqli_real_escape_string($db,$_POST['npwp_pjkp']);
    $tanggal_fp	        				= mysqli_real_escape_string($db,$_POST['tanggal_fp']);

	$file_fp			            = $_FILES['file_fp']['name'];
     date_default_timezone_set('Asia/Jakarta'); 
        $thnNow = date("Y");
        $tgl_masuk                  = date('Y-m-d', strtotime($tanggal_fp));
	
	$sql  		= "SELECT * FROM tb_fakturpajak where id_fp='".$id."'";                        
	$query  	= mysqli_query($db, $sql);
	$data 		= mysqli_fetch_array($query);
	
    //jika gambar tidak ada
	if ($file_fp == ''){
		$ext			= substr($data['file_fp'], strripos($data['file_fp'], '.'));	
		$nama_b  		= $thnNow.'-'.$nomor_fp. $ext;
		rename("../faktur_pajak/".$data['file_fp'], "../faktur_pajak/".$nama_b);
		$sql = "UPDATE tb_fakturpajak set 
						
						nomor_fp    	= '$nomor_fp',
						nama_pkp 		= '$nama_pkp',
						alamat_pkp      = '$alamat_pkp',
						npwp_pkp        = '$npwp_pkp',
						nama_pjkp		= '$nama_pjkp',
                        alamat_pjkp     = '$alamat_pjkp',
                        npwp_pjkp       = '$npwp_pjkp',
						tanggal_fp   	= '$tgl_masuk',
						file_fp			= '$nama_b' 
				where id_fp = $id";
				
		$execute = mysqli_query($db, $sql);			
						
		echo "<script>alert('Data Faktur Pajak Berhasil Diubah! ');
    			window.location.href ='../detail-fakturpajak.php?id_fp=".$id."';</script>";	
	}	
	else{
		
        $tipe_file 		= $_FILES['file_fp']['type'];
        $ukuran_file 	= $_FILES['file_fp']['size'];
		if (($tipe_file == "application/pdf") and ($ukuran_file <= 10340000)){	
			unlink("../faktur_pajak/".$data['file_fp']);
			$ext_file		= substr($file_fp, strripos($file_fp, '.'));			
			$tmp_file 		= $_FILES['file_fp']['tmp_name'];
			
			$nama_baru = $thnNow.'-'.$id. $ext_file;
			$path = "../faktur_pajak/".$nama_baru;
			move_uploaded_file($tmp_file, $path);
			
			$sql = "UPDATE tb_fakturpajak set 
						
						nomor_fp    				= '$nomor_fp',
						nama_pkp 					= '$nama_pkp',
						alamat_pkp          		= '$alamat_pkp',
						npwp_pkp          			= '$npwp_pkp',
						nama_pjkp		   			= '$nama_pjkp',
                        alamat_pjkp            	    = '$alamat_pjkp',
                        npwp_pjkp       			= '$npwp_pjkp',
						tanggal_fp					= '$tgl_masuk',
						file_fp						= '$nama_baru'
				where id_fp = $id";
				
			$execute = mysqli_query($db, $sql);			
		
			echo "<script>alert('Data Faktur Pajak Berhasil Diubah! ');
    			window.location.href ='../detail-fakturpajak.php?id_fp=".$id."';</script>";			
		}
		else{
			echo "<script>alert('Data Faktur Pajak Gagal Diubah! ');
			window.location.href ='../editfakturpajak.php?id_fp=".$id."';</script>";
		}
	
	}
	?>
	