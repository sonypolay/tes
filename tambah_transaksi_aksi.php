<?php
include'koneksi.php';

$tgl=$_POST['tgl'];
$pelanggan=$_POST['pelanggan'];
$harga=$_POST['harga'];
$berat=$_POST['berat'];
$tgl_selesai=$_POST['tgl_selesai'];
$jenis_pakaian=$_POST['jenis_pakaian'];
$jumlah=$_POST['jumlah'];

mysqli_query($koneksi,"insert into transaksi values('','$tgl','$pelanggan','$harga','$berat','$tgl_selesai','$jenis_pakaian','$jumlah')");

header("location:transaksi.php")

?>