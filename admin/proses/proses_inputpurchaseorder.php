<?php
	session_start();
	include '../../koneksi/koneksi.php';
	
	$id				                    = mysqli_real_escape_string($db,$_POST['id_po']);
	$nomor_purchaseorder	                = mysqli_real_escape_string($db,$_POST['nomor_po']);
    $kepada_purchaseorder               = mysqli_real_escape_string($db,$_POST['kepada_po']);
	$alamat_purchaseorder	                = mysqli_real_escape_string($db,$_POST['alamat_po']);
	$tanggal_purchaseorder	        = mysqli_real_escape_string($db,$_POST['tanggal_po']);
	$outlet_purchaseorder            = mysqli_real_escape_string($db,$_POST['outlet']);

        date_default_timezone_set('Asia/Jakarta'); 
		$tanggal_entry  = date("Y-m-d H:i:s");
        $thnNow = date("Y");
	
	$nama_file_lengkap 		= $_FILES['file_po']['name'];
	$nama_file 		= substr($nama_file_lengkap, 0, strripos($nama_file_lengkap, '.'));
	$ext_file		= substr($nama_file_lengkap, strripos($nama_file_lengkap, '.'));
	$tipe_file 		= $_FILES['file_po']['type'];
	$ukuran_file 	= $_FILES['file_po']['size'];
	$tmp_file 		= $_FILES['file_po']['tmp_name'];
	
    $tgl_masuk                  = date('Y-m-d', strtotime($tanggal_purchaseorder));
    
	
    if (!($nomor_purchaseorder =='') and !($kepada_purchaseorder  =='') and !($alamat_purchaseorder =='') and !($outlet_purchaseorder =='')  and !($tgl_masuk=='') and   
		($tipe_file == "application/pdf") and ($ukuran_file <= 10340000)){		
		
		$nama_baru = $thnNow.'-'.$id. $ext_file;
		$path = "../purchase_order/".$nama_baru;
		move_uploaded_file($tmp_file, $path);
		
		$sql = "INSERT INTO tb_purchaseorder(nomor_po, kepada_po, alamat_po, outlet, tanggal_po, file_po )
				values ('$nomor_purchaseorder', '$kepada_purchaseorder ', '$alamat_purchaseorder', '$outlet_purchaseorder', '$tanggal_purchaseorder', '$nama_baru')";
		$execute = mysqli_query($db, $sql);
		
		echo "<script>alert('Data Purchase Order Berhasil Ditambahkan! ');
    			window.location.href ='../datapurchaseorder.php';</script>";
	}
	else{
		echo "<script>alert('Silahkan isi semua kolom lalu tekan Submit! ');
    			window.location.href ='../inputpurchaseorder.php?';</script>";
	}
	
?>
	