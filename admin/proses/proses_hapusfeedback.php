<?php
	session_start();
	include '../../koneksi/koneksi.php';

if (isset($_GET['id_kontak'])) {

	$id = $_GET['id_kontak'];
    	

	$sql2  		= "SELECT * FROM tb_feedback where id_kontak='".$id."'";                        
	$query2  	= mysqli_query($db, $sql2);
	$data2 		= mysqli_fetch_array($query2);
    $total		= mysqli_num_rows($query2);

	// cek hasil query
	if ($total == 0) {
    echo '<script>window.history.back()</script>';
	    } else 
            {
             $sql  		= "DELETE FROM tb_feedback WHERE id_kontak='".$id."'";                        
	         $query  	= mysqli_query($db, $sql);


            if ($query){
                echo "<script>alert('Data Feedback Berhasil Dihapus! ');
    			window.location.href ='../feedback.php';</script>";
            }		else{
				echo "<script>alert('Gagal Menghapus Data Feedback! ');
    			window.location.href ='../feedback.php';</script>";
	}	
}	
}						
?>   