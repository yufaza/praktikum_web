<?php
include 'koneksi.php';

if (isset($_GET['logout'])){
    session_start();
    $_SESSION['login'] = FALSE;
    $_SESSION['tipe'] = '';
    header("location:login.php?pesan=logout");
} else {
    if(isset($_POST['username'])){
        session_start();
        $username = $_POST['username'];
        $password = $_POST['password'];

        $sql = "SELECT * FROM pengguna WHERE username='$username' AND password='$password' limit 1";
        $result = mysql_query($sql);
        $value = mysql_fetch_object($result);

        if(isset($value->id_pengguna)){
            $_SESSION['login'] = TRUE;
            $_SESSION['tipe'] = $value->tipe;
            header("location:index.php?pesan=sukses_login");
        } else {
            header("location:login.php?pesan=gagal_login");
        }
    } else {
        if($_SESSION['login'] != TRUE){
            header("location:login.php?belum_login");
        }
    }
}



