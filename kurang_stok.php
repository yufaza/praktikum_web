<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include "head.php"?>
<body>
    <?php
        include "navbar.php";
        include "pesan.php";
        include "koneksi.php";
        $query = mysql_query("SELECT * FROM barang")or die(mysql_error());
    ?>
    <h3>Kurangi Stok Barang</h3>
    <table>
        <tr>
            <th>Nama Barang</th>
            <th>Jumlah</th>
            <th></th>
        </tr>
        <tr>
        <form action="proses_kurang.php" method="post">
            <td>
                <select name=id_barang id="id_barang">
                    <?php while ($data = mysql_fetch_array($query)):?>
                        <option value="<?=$data['id_barang']?>"><?=$data['nama_barang']?></option>
                    <?php endwhile?>
                </select>
            </td>
            <td>
            <input type="number" name="jumlah" id="jumlah">
            </td>
            <td>
            <input type="submit" value="Simpan">
            </td>
        </form>
        </tr>
    </table>
</body>
</html>