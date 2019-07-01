<?php
include 'koneksi.php';
include 'cek_admin.php';
    $nama_barang = $_POST['nama_barang'];
    $stok = $_POST['stok'];
    $id_barang = $_POST['id_barang'];
    mysql_query("UPDATE barang SET nama_barang='$nama_barang', stok='$stok' WHERE id_barang='$id_barang'");
    header("location:index.php?pesan=update");
?>