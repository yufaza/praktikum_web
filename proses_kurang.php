<?php
include 'koneksi.php';
    $id_barang = $_POST['id_barang'];
    $jumlah = $_POST['jumlah'];

    $sql = "SELECT * FROM barang WHERE id_barang=$id_barang limit 1";
    $result = mysql_query($sql);
    $value = mysql_fetch_object($result);

    $stok = $value->stok - $jumlah;

    if($stok < 0){
        header("location:index.php?pesan=gagal");
    } else {
        $nama_barang = $value->nama_barang;
        mysql_query("INSERT INTO transfer(id_barang, jumlah, tipe) VALUES($id_barang, $jumlah, 'keluar')")or die(mysql_error());
        mysql_query("UPDATE barang SET nama_barang='$nama_barang', stok='$stok' WHERE id_barang='$id_barang'");
        header("location:index.php?pesan=berhasil");
    }
?>