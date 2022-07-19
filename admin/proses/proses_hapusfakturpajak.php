<?php
	session_start();
	include '../../koneksi/koneksi.php';

if (isset($_GET['id_fp'])) {

	$id = $_GET['id_fp'];
    	

	$sql2  		= "SELECT * FROM tb_fakturpajak where id_fp='".$id."'";                        
	$query2  	= mysqli_query($db, $sql2);
	$data2 		= mysqli_fetch_array($query2);
    $total		= mysqli_num_rows($query2);

	// cek hasil query
	if ($total == 0) {
    echo '<script>window.history.back()</script>';
	    } else 
            {
             $sql  		= "DELETE FROM tb_fakturpajak WHERE id_fp='".$id."'";                        
	         $query  	= mysqli_query($db, $sql);


            if ($query){
                unlink("../faktur_pajak/".$data2['file_fp']);
                echo "<script>alert('Data Faktur Pajak Berhasil Dihapus! ');
    			window.location.href ='../datafakturpajak.php';</script>";
            }		else{
				echo "<script>alert('Gagal Menghapus Data Faktur Pajak! ');
    			window.location.href ='../datafakturpajak.php';</script>";
	}	
}	
}						
?>   