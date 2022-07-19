<?php
	session_start();
	include '../../koneksi/koneksi.php';

if (isset($_GET['id_pb'])) {

	$id = $_GET['id_pb'];
    	

	$sql2  		= "SELECT * FROM tb_pembayaran where id_pb='".$id."'";                        
	$query2  	= mysqli_query($db, $sql2);
	$data2 		= mysqli_fetch_array($query2);
    $total		= mysqli_num_rows($query2);

	// cek hasil query
	if ($total == 0) {
    echo '<script>window.history.back()</script>';
	    } else 
            {
             $sql  		= "DELETE FROM tb_pembayaran WHERE id_pb='".$id."'";                        
	         $query  	= mysqli_query($db, $sql);


            if ($query){
                unlink("../pembayaran/".$data2['file_pb']);
                echo "<script>alert('Data Pembayaran Berhasil Dihapus! ');
    			window.location.href ='../datapembayaran.php';</script>";
            }		else{
				echo "<script>alert('Gagal Menghapus Data Pembayaran! ');
    			window.location.href ='../datapembayaran.php';</script>";
	}	
}	
}						
?>   