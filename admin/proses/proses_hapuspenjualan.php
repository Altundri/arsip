<?php
	session_start();
	include '../../koneksi/koneksi.php';

if (isset($_GET['id_pj'])) {

	$id = $_GET['id_pj'];
    	

	$sql2  		= "SELECT * FROM tb_penjualan where id_pj='".$id."'";                        
	$query2  	= mysqli_query($db, $sql2);
	$data2 		= mysqli_fetch_array($query2);
    $total		= mysqli_num_rows($query2);

	// cek hasil query
	if ($total == 0) {
    echo '<script>window.history.back()</script>';
	    } else 
            {
             $sql  		= "DELETE FROM tb_penjualan WHERE id_pj='".$id."'";                        
	         $query  	= mysqli_query($db, $sql);


            if ($query){
                unlink("../penjualan/".$data2['file_pj']);
                echo "<script>alert('Data Penjualan Berhasil Dihapus! ');
    			window.location.href ='../datapenjualan.php';</script>";
            }		else{
				echo "<script>alert('Gagal Menghapus Data Penjualan! ');
    			window.location.href ='../datapenjualan.php';</script>";
	}	
}	
}						
?>   