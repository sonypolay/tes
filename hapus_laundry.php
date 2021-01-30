<?php

include 'koneksi.php';

$id = $_GET['id'];

mysqli_query($koneksi,"delete from laundry where id='$id'");

header("location:laundry.php");

?>