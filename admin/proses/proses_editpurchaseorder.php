<?php
	session_start();
	include '../../koneksi/koneksi.php';
    $id				                    = mysqli_real_escape_string($db,$_POST['id_po']);
	$nomor_purchaseorder	                = mysqli_real_escape_string($db,$_POST['nomor_po']);
    $kepada_purchaseorder               = mysqli_real_escape_string($db,$_POST['kepada_po']);
	$alamat_purchaseorder	                = mysqli_real_escape_string($db,$_POST['alamat_po']);
	$outlet_purchaseorder            = mysqli_real_escape_string($db,$_POST['outlet']);
	$tanggal_purchaseorder	        = mysqli_real_escape_string($db,$_POST['tanggalmasuk_po']);
    $file_purchaseorder			            = $_FILES['file_po']['name'];
     date_default_timezone_set('Asia/Jakarta'); 
		$tanggal_entry  = date("Y-m-d H:i:s");
        $thnNow = date("Y");
        $tgl_masuk                  = date('Y-m-d H:i:s', strtotime($tanggal_purchaseorder));
        
	
	$sql  		= "SELECT * FROM tb_purchaseorder where id_po='".$id."'";                        
	$query  	= mysqli_query($db, $sql);
	$data 		= mysqli_fetch_array($query);
	
    //jika file tidak ada
	if ($file_purchaseorder == ''){
		$ext			= substr($data['file_po'], strripos($data['file_po'], '.'));	
		$nama_b  		= $thnNow.'-'.$id. $ext;
		rename("../purchase_order/".$data['file_po'], "../purchase_order/".$nama_b);
		$sql = "UPDATE tb_purchaseorder set 
						
						nomor_po    		= '$nomor_purchaseorder',
                        kepada_po       	= '$kepada_purchaseorder',
						alamat_po 			= '$alamat_purchaseorder',
						outlet			    = '$outlet_purchaseorder',
						tanggal_po     		= '$tgl_masuk',
                        file_po				= '$nama_b' 
				where id_po = $id";
				
		$execute = mysqli_query($db, $sql);			
						
		echo "<script>alert('Data Purchase Order Berhasil Diubah! ');
    			window.location.href ='../detail-purchaseorder.php?id_po=".$id."';</script>";
		
	}	
	else{
		
        $tipe_file 		= $_FILES['file_po']['type'];
        $ukuran_file 	= $_FILES['file_po']['size'];
		if (($tipe_file == "application/pdf") and ($ukuran_file <= 10340000)){	
			unlink("../purchase_order/".$data['file_po']);
			$ext_file		= substr($file_purchaseorder, strripos($file_purchaseorder, '.'));			
			$tmp_file 		= $_FILES['file_po']['tmp_name'];
			
			$nama_baru = $thnNow.'-'.$id. $ext_file;
			$path = "../purchase_order/".$nama_baru;
			move_uploaded_file($tmp_file, $path);
			
			$sql = "UPDATE tb_purchaseorder set 
						
						nomor_po    		= '$nomor_purchaseorder',
                        kepada_po       	= '$kepada_purchaseorder',
						alamat_po 			= '$alamat_purchaseorder',
						outlet			    = '$outlet_purchaseorder',
						tanggal_po     		= '$tgl_masuk',
						file_po				= '$nama_baru' 
				where id_po = $id";
				
			$execute = mysqli_query($db, $sql);			
		
			echo "<script>alert('Data Purchase Order Berhasil Diubah! ');
			window.location.href ='../detail-purchaseorder.php?id_po=".$id."';</script>";		
		}
		else{
			echo "<script>alert('Data Purchase Order Gagal Diubah! ');
			window.location.href ='../editpurchaseorder.php?id_po=".$id."';</script>";
	
		}
	
	}
	?>
	