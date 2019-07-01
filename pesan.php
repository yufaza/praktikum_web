<?php
if (isset($_GET['pesan'])) 
{
    $pesan = $_GET['pesan'];
    if ($pesan == "input") {
        echo "Data berhasil di input.";
    } else if ($pesan == "update") {
        echo "Data berhasil di update.";
    } else if ($pesan == "hapus") {
        echo "Data berhasil di hapus.";
    } else if ($pesan == "belum_login") {
        echo "Silakan Login terlebih dahulu";
    } else if ($pesan == "logout"){
        echo "Berhasil Logout";
    } else if ($pesan == "sukses_login") {
        echo "Berhasil login";
    } else if ($pesan == "gagal_login") {
        echo "username atau password salah";
    } else if ($pesan == "admin") {
        echo "Anda tidak mempunyai hak untuk melakukan aksi tersebut!";
    } else if ($pesan == "berhasil") {
        echo "Aksi berhasil dilakukan";
    } else if ($pesan == "gagal") {
        echo "Aksi gagal dilakukan";
    }
} 
?>