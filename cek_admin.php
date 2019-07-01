<?php
if($_SESSION['tipe'] != 'admin'){
    header("location:index.php?pesan=admin");
}
?>