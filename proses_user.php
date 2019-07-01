<?php
include 'koneksi.php';
include 'cek_admmin';

    if(isset($_GET['hapus_id'])){
        $id_pengguna = $_GET['hapus_id'];
        mysql_query("DELETE FROM pengguna WHERE id_pengguna='$id_pengguna'")or die(mysql_error());
        header("location:pengguna.php?pesan=berhasil");
    } else {
        $username = $_POST['username'];
        $password = $_POST['password'];
        $tipe = $_POST['tipe'];
        mysql_query("INSERT INTO pengguna VALUES('','$username','$password', '$tipe')");
        header("location:pengguna.php?pesan=berhasil");
    }

?>