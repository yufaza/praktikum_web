<?php
include 'koneksi.php';
include 'cek_admin.php';
    $id_barang = $_GET['id'];
    mysql_query("DELETE FROM barang WHERE id_barang='$id_barang'")or die(mysql_error());
    mysql_query("DELETE FROM transfer WHERE id_barang='$id_barang'")or die(mysql_error());
    header("location:index.php?pesan=hapus");
?>