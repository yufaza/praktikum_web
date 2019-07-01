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

    <?php 
        include "autentikasi.php";
        include "cek_admin.php";
        include "navbar.php";
        include "pesan.php";
    ?>
    <?php
        include "koneksi.php";
        $query_mysql = mysql_query("SELECT * FROM pengguna")or die(mysql_error());
        $halaman = 5;
        $page = isset($_GET["halaman"]) ? (int)$_GET["halaman"] : 1;
        $mulai = ($page>1) ? ($page * $halaman) - $halaman : 0;
        $total = mysql_num_rows($query_mysql);
        $pages = ceil($total/$halaman);
        $query = mysql_query("SELECT * FROM pengguna LIMIT $mulai, $halaman")or die(mysql_error);
        $nomor = $mulai+1;
    ?>
    <h3>Data Pengguna</h3>
    <table>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Tipe User</th>
            <th>Aksi</th>
        </tr>
        <?php while ($data = mysql_fetch_array($query)):?>
        <tr>
            <td>
                <?=$nomor++?>
            </td>
            <td>
                <?=$data['username']?>
            </td>
            <td>
                <?=$data['tipe']?>
            </td>
            <td>
                <a href="proses_user.php?hapus_id=<?=$data['id_pengguna']?>" onclick="confirm('Apakah Anda Yakin?')">Hapus</a>
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

        <h3>Tambah Pengguna baru</h3>
    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Tipe</th>
            <th></th>
        </tr>
        <tr>
        <form action="proses_user.php" method="post">
            <td>
            <input type="text" name="username" id="username" required>
            </td>
            <td>
            <input type="password" name="password" id="password" required>
            </td>
            <td>
            <select name="tipe" id="tipe" required>
                <option value="operator">Operator</option>
                <option value="admin">Admin</option>
            </select>
            </td>
            <td>
            <input type="submit" value="Simpan">
            </td>
        </form>
        </tr>
    </table>
</body>
</html>