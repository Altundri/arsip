<?php
	session_start();
	include '../../koneksi/koneksi.php';

if (isset($_GET['id_po'])) {

	$id = $_GET['id_po'];
    	

	$sql2  		= "SELECT * FROM tb_purchaseorder where id_po='".$id."'";                        
	$query2  	= mysqli_query($db, $sql2);
	$data2 		= mysqli_fetch_array($query2);
    $total		= mysqli_num_rows($query2);

	// cek hasil query
	if ($total == 0) {
    echo '<script>window.history.back()</script>';
	    } else 
            {
             $sql  		= "DELETE FROM tb_purchaseorder WHERE id_po='".$id."'";                        
	         $query  	= mysqli_query($db, $sql);


            if ($query){
                unlink("../purchase_order/".$data2['file_po']);
                echo "<script>alert('Data Purchase Order Berhasil Dihapus! ');
    			window.location.href ='../datapurchaseorder.php';</script>";
            }		else{
				echo "<script>alert('Gagal Menghapus Data Purchase Order! ');
    			window.location.href ='../datapurchaseorder.php';</script>";
	}	
}	
}						
?>   