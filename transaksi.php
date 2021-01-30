<!DOCTYPE html>
</html>
<head>
	<title>Halaman Data Transaksi</title>
</head>
<body style="background-color: #ff9966">
	<center>
		<h2>Data Transaksi</h2><br/>
		<table border="1" width="90%">
		<tr>
			<th>NO</th>
			<th>TANGGAL</th>
			<th>PELANGGAN</th>
			<th>HARGA</th>
			<th>BERAT</th>
			<th>TANGGAL SELESAI</th>
			<th>JENIS PAKAIAN</th>
			<th>JUMLAH PAKAIAN</th>
			<th>OPSI</th>
		</tr>
<?php
include 'koneksi.php';
$no=1;
$data=mysqli_query($koneksi,"select * from transaksi");
while ($d=mysqli_fetch_array($data)){
	?>
	<tr>
		<td style="vertical-align: middle; text-align: center;"><?php echo $no++; ?></td>
		<td><?php echo $d['tgl']; ?></td>
		<td><?php echo $d['pelanggan']; ?></td>
		<td><?php echo $d['harga']; ?></td>
		<th><?php echo $d['berat']; ?></th>
		<th><?php echo $d['tgl_selesai']; ?></th>
		<th><?php echo $d['jenis_pakaian']; ?></th>
		<th><?php echo $d['jumlah']; ?></th>
		<td style="vertical-align: middle; text-align: center;">
			<a href="edit_transaksi.php?id=<?php echo $d ['id']; ?>">Edit</a>
			<a href="hapus_transaksi.php?id=<?php echo $d ['id']; ?>">Hapus</a>
		</td>
	</tr>
	<?php
}
?>
		</table>
		<br/>
		<a href="tambah_transaksi.php">Tambah Data Pelanggan</a><br/>
		<a href="laundry.php">Data Pelanggan</a><br/>
		<a href="halaman_utama.php">Home</a>
	</center>
</body>
</html>