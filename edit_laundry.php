<html>
<head>
    <title>Halaman Edit</title>
</head>
<body>
    <center>
    <h2>Data Edit Pelanggan</h2>
    <br/>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from laundry where id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update_laundry.php">
            <table>
                <tr>          
                    <td>Nama</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>No.Telpon</td>
                    <td><input type="text" name="telp" value="<?php echo $d['telp']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Simpan"></td>
                </tr>      
            </table>
        </form>
        <?php
    }
    ?>
    <a href="laundry.php">Kembali</a>
</center>
</body>
</html>