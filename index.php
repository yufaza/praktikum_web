<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include "head.php"?>
<body>
    <!-- fungsi untuk mengecek versi php -->
    <!-- pastikan versi php dibawah versi 5.5 -->
    <?php //phpinfo()?> 


    <?php include "autentikasi.php"?>
    <?php include "navbar.php"?>
    <?php include "pesan.php"?>
    <?php
        include "koneksi.php";
        $query_mysql = mysql_query("SELECT * FROM barang")or die(mysql_error());
        $halaman = 5;
        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $total = mysql_num_rows($query_mysql);
        $pages = ceil($total/$halaman);
        $query = mysql_query("SELECT * FROM barang LIMIT $mulai, $halaman")or die(mysql_error);
        $nomor = $mulai+1;
    ?>
    <h3>Data Barang</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Aksi</th>
        </tr>
        <?php while ($data = mysql_fetch_array($query)):?>
        <tr>
            <td>
                <?=$nomor++?>
            </td>
            <td>
                <?=$data['nama_barang']?>
            </td>
            <td>
                <?=$data['stok']?>
            </td>
            <td>
                <a href="edit_barang.php?id=<?=$data['id_barang']?>">Edit</a>
                <a href="proses_hapus.php?id=<?=$data['id_barang']?>" onclick="confirm('Apakah Anda Yakin?')">Hapus</a>
            </td>
        </tr>
        <?php endwhile?>
    </table>
        <div align="center">
        <h5>Halaman</h5>
            <?php for ($i=1; $i<=$pages ; $i++): ?>
            <a href="?halaman=<?php echo $i; ?>"><?php echo $i; ?></a>
            <?php endfor ?>
        </div>
</body>
</html>