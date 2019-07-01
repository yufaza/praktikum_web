<?php
include 'koneksi.php';
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    mysql_query("INSERT INTO barang VALUES('','$nama_barang','$stok')");
    header("location:index.php?pesan=input");
?>