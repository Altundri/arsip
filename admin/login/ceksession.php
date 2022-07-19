<?php
//koneksi ke database
if (isset($_SESSION['r3su'])){
	if ($_SESSION['r3su'] == 'dmn'){
        
    }
	elseif($_SESSION['r3su'] == 'bgn'){
	    header('location:../pimpinan/');	
	}
}
else header('location:../')

?>