<?php
include 'koneksi.php';

$id = $_POST['id'];
$tgl=$_POST['tgl'];
$pelanggan=$_POST['pelanggan'];
$harga=$_POST['harga'];
$berat=$_POST['berat'];
$tgl_selesai=$_POST['tgl_selesai'];
$jenis_pakaian=$_POST['jenis_pakaian'];
$jumlah=$_POST['jumlah'];

mysqli_query($koneksi,"update transaksi set tgl='$tgl', pelanggan='$pelanggan', harga='$harga', berat='$berat', tgl_selesai='$tgl_selesai', jenis_pakaian='$jenis_pakaian', jumlah='$jumlah' where id='$id'");

header("location:transaksi.php");

?>