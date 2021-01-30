<html>
<head>
    <title>Halaman Edit</title>
</head>
<body>
    <center>
    <h2>Data Edit Transaksi</h2>
    <br/>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi,"select * from transaksi where id='$id'");
    while($d = mysqli_fetch_array($data)){
        ?>
        <form method="post" action="update_transaksi.php">
            <table>
                <tr>          
                    <td>Tanggal</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="date" name="tgl" value="<?php echo $d['tgl']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>Pelanggan</td>
                    <td><input type="text" name="pelanggan" value="<?php echo $d['pelanggan']; ?>"></td>
                </tr>
                <tr>
                    <td>Harga</td>
                    <td><input type="text" name="harga" value="<?php echo $d['harga']; ?>"></td>
                </tr>
                <tr>
                    <td>Berat</td>
                    <td><input type="text" name="berat" value="<?php echo $d['berat']; ?>"></td>
                </tr>
                <tr>
                    <td>Tgl Selesai</td>
                    <td><input type="date" name="tgl_selesai" value="<?php echo $d['tgl_selesai']; ?>"></td>
                </tr>
                <tr>
                    <td>Jenis Pakaian</td>
                    <td><input type="text" name="jenis_pakaian" value="<?php echo $d['jenis_pakaian']; ?>"></td>
                </tr>
                <tr>
                    <td>Jumlah</td>
                    <td><input type="text" name="jumlah" value="<?php echo $d['jumlah']; ?>"></td>
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
    <a href="transaksi.php">Kembali</a>
</center>
</body>
</html>