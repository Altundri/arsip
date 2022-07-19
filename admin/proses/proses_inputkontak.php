<?php
	session_start();
	include '../../koneksi/koneksi.php';
	
	$id                 = mysqli_real_escape_string($db,$_POST['id_kontak']);
	$nama                = mysqli_real_escape_string($db,$_POST['nama']);
    $email                   = mysqli_real_escape_string($db,$_POST['email']);
	$komentar          = mysqli_real_escape_string($db,$_POST['komentar']);
    

    if (!($nama =='') and !($email =='') and !($komentar =='')){	
		$sql = "INSERT INTO tb_feedback( id_kontak, nama, email, komentar)
				values ( '$id', '$nama', '$email', '$komentar')";
		$execute = mysqli_query($db, $sql);
		
		echo "<script>alert('Feedback anda berhasil Dikirim! , Terimakasih :) ');
    			window.location.href ='../../index.php';</script>";
            }
    else{
        echo "<script>alert('Feedback gagal dikirim! ');
                        window.location.href ='../../index.php.php?';</script>";
            }
?>
	