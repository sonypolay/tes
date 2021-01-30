<!DOCTYPE html>
<html>
<head>
	<title>Welcome | Laundry Qu </title>
</head>
<body style="background-color: lightblue">
	<a href="register.php" class="btn btn-success">Daftar</a>
	<center>
	<h2>Log In</h2>
	<!--cek notifikasi-->
	<?php
	if(isset($_GET['pesan'])){
		if($_GET['pesan']=="gagal"){
			echo "login gagal! username/password salah";
	}else if($_GET['pesan']=="logout"){
			echo "Ya anda berhasil logout";
	}else if($_GET['pesan']=="belum login"){
			echo "anda harus login";
	}
}
?>
<form method="post" action="cek_login.php">
	<table>
		<tr>
			<td>Username</td>
			<td>:</td>
			<td><input type="text" name="username" placeholder="masukkan username.."></td>
		</tr>
		<tr>
			<td>Password</td>
			<td>:</td>
			<td><input type="password" name="password" placeholder="masukkan password.."></td>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td><input type="submit" value="Log In"></td>
		</tr>
	</table>
	</form>
</center>
</body>
</html>