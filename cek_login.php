<?php
//mengaktifkan session
session_start();

//menghubungkan koneksi
include'koneksi.php';

//menangkap data yang dikirim dari form
$username=($_POST['username']);
$password=($_POST['password']);

//menyeleksi data admin username dan password yang sesuai
$data=mysqli_query($koneksi,"select*from admin where username='$username' and password='$password'");

//menghitung jumlah data yang ditemukan
$cek=mysqli_num_rows($data);

if($cek>0){
	$_SESSION['username']=$username;
	$_SESSION['status']="login";
	header("location:halaman_utama.php");
	}else{
		header("location:index.php?pesan=gagal");
	}
?>