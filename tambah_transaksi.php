<!DOCTYPE html>
<html>
<head>
<title>Tambah Transaksi Baru</title>
</head>
<body style="background-color: #ff9966">
<center>
	<h2>Tambah Transaksi Baru</h2>
	<form method="POST" action="tambah_transaksi_aksi.php">
		<table>
		<tr>
			<td>TANGGAL</td>
			<td><input type="date" name="tgl"></td>
		</tr>
		<tr>
			<td>PELANGGAN</td>
			<td><input type="text" name="pelanggan"></td>
		</tr>
		<tr>
			<td>HARGA</td>
			<td><input type="text" name="harga"></td>
		</tr>
		<tr>
			<td>BERAT</td>
			<td><input type="text" name="berat"></td>
		</tr>
		<tr>
			<td>TGL SELESAI</td>
			<td><input type="date" name="tgl_selesai"></td>
		</tr>
		<tr>
			<td>JENIS PAKAIAN</td>
			<td><input type="text" name="jenis_pakaian"></td>
		</tr>
		<tr>
			<td>JUMLAH</td>
			<td><input type="text" name="jumlah"></td>
		</tr>
</table>
	<tr>
	<td><input type="submit" value="Simpan"></td>
	<td><input type="reset" value="Reset"></td>
	</tr>
	</form>
	<a href="transaksi.php">Kembali</a>
</center>
</body>
</html>