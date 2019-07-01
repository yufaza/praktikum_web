<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include "head.php"?>
<body>
    
    <?php 
        include "autentikasi.php";
        include "cek_admin.php";
        include "navbar.php";
        include "pesan.php";
    ?>
    <h3>Tambah data baru</h3>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th></th>
        </tr>
        <tr>
        <form action="proses_input.php" method="post">
            <td>
            <input type="text" name="nama_barang" id="nama_barang">
            </td>
            <td>
            <input type="number" name="stok" id="stok">
            </td>
            <td>
            <input type="submit" value="Simpan">
            </td>
        </form>
        </tr>
    </table>
</body>
</html>