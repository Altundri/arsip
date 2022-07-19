<?php
//koneksi ke database
session_start();
include "../../koneksi/koneksi.php";

//validasi login
$username	=	mysqli_real_escape_string($db,$_POST['username_pimpinan']); 
$password	=	mysqli_real_escape_string($db,sha1($_POST['password'])); 
$query		=	mysqli_query($db,"SELECT * FROM tb_pimpinan WHERE username_pimpinan='$username' AND password ='$password'"); 
$data		=	$query->fetch_array();
$jumlah=$query->num_rows;

if ($jumlah>0){
	echo"login berhasil ! ";
	$nama=$data['nama_pimpinan'];
	$id =$data['id_pimpinan'];
	$_SESSION['r3su'] = 'bgn';
	$_SESSION['id'] = $id;
	$_SESSION['username'] 	= $username;
	$_SESSION['nama'] = $nama;
	header('location:../');
	}
else{
    echo "<center>Username atau Password anda salah<br><br><h3>Silahkan Ulangi </h3></center>";
	echo "<meta http-equiv='refresh' content='2;url=../login/'>";
}
?>