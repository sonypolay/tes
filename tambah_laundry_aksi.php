<?php
include'koneksi.php';

$nama=$_POST['nama'];
$telp=$_POST['telp'];
$alamat=$_POST['alamat'];

mysqli_query($koneksi,"insert into laundry values('','$nama','$telp','$alamat')");

header("location:laundry.php")

?>