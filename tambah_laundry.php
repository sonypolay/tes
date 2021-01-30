<!DOCTYPE html>
<html>
<head>
	<title>Halaman Tambah Pelanggan</title>
</head>
<body style="background-color: lightblue">
<center>
	<h2>TAMBAH DATA PELANGGAN</h2>
	<form method="POST" action="tambah_laundry_aksi.php">
		<table>
		<tr>
			<td>NAMA</td>
			<td><input type="text" name="nama"></td>
		</tr>
		<tr>
			<td>NO.TELP</td>
			<td><input type="text" name="telp"></td>
		</tr>
		<tr>
			<td>ALAMAT</td>
			<td><input type="text" name="alamat"></td>
		</tr>
</table>
	<tr>
	<td><input type="submit" value="Simpan"></td>
	<td><input type="reset" value="Reset"></td>
	</tr>
	</form>
	<a href="laundry.php">Kembali</a>
</center>
</body>
</html>