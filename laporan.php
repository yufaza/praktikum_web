<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include "head.php"?>
<body onload="window.print()">
    <!-- fungsi untuk mengecek versi php -->
    <!-- pastikan versi php dibawah versi 5.5 -->
    <?php //phpinfo()?> 

    <?php include "autentikasi.php"?>
    <?php include "pesan.php"?>
    <?php
        include "koneksi.php";
        $query = mysql_query("SELECT transfer.*, barang.nama_barang FROM transfer JOIN barang ON barang.id_barang = transfer.id_barang")or die(mysql_error());
        $nomor = 1;
    ?>
    <h3 align="center">Data Transfer Barang</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Tipe</th>
            <th>Jumlah</th>
            <th>Waktu</th>
        </tr>
        <?php while ($data = mysql_fetch_array($query)):?>
        <tr>
            <td>
                <?=$nomor++?>
            </td>
            <td>
                <?=$data['nama_barang']?>
            </td>
            <td>
                <?=$data['tipe']?>
            </td>
            <td>
                <?=$data['jumlah']?>
            </td>
            <td>
                <?=$data['waktu_transfer']?>
            </td>
        </tr>
        <?php endwhile?>
    </table>
</body>
</html>