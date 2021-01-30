<html>
<head>
	<title>Halaman Data Pelanggan</title>
</head>
<body style="background-color: lightblue">
	<center>
		<h2>Data Laundry</h2><br/>
		<table border="1" width="50%">
		<tr>
			<th>NO</th>
			<th>Nama</th>
			<th>No.Telepon</th>
			<th>Alamat</th>
			<th>Opsi</th>
		</tr>
<?php
include 'koneksi.php';
$no=1;
$data=mysqli_query($koneksi,"select * from laundry");
while ($d=mysqli_fetch_array($data)){
	?>
	<tr>
		<td style="vertical-align: middle; text-align: center;"><?php echo $no++; ?></td>
		<td><?php echo $d['nama']; ?></td>
		<td><?php echo $d['telp']; ?></td>
		<td><?php echo $d['alamat']; ?></td>
		<td style="vertical-align: middle; text-align: center;">
			<a href="edit_laundry.php?id=<?php echo $d ['id']; ?>">Edit /</a>
			<a href="hapus_laundry.php?id=<?php echo $d ['id']; ?>">Hapus</a>
		</td>
	</tr>
	<?php
}
?>
		</table>
		<br/>
		<a href="tambah_laundry.php">Tambah Data Pelanggan</a><br/>
		<a href="harga.php">Pengaturan Harga Laundry</a><br/>
		<a href="transaksi.php">Data Transaksi</a><br/>
		<a href="halaman_utama.php">Home</a>
	</center>
</body>
</html>