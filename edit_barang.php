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
    $id = $_GET['id'];
    $query_mysql = mysql_query("SELECT * FROM barang WHERE id_barang=$id")or die(mysql_error());
    $data = mysql_fetch_array($query_mysql);
    ?>
    <h3>Ubah data <?=$data['nama_barang']?></h3>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th></th>
        </tr>
        <tr>
        <form action="proses_edit.php" method="post">
            <td>
            <input type="text" name="nama_barang" id="nama_barang" value="<?=$data['nama_barang']?>">
            </td>
            <td>
            <input type="number" name="stok" id="stok" value="<?=$data['stok']?>">
            </td>
            <td>
            <input type="submit" value="Ubah">
            </td>
            <input type="hidden" name="id_barang" value="<?=$id?>">
        </form>
        </tr>
    </table>
</body>
</html>