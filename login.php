<?php
session_start();
?>
<!DOCTYPE html>
<html>
<?php include "head.php"?>
<body>
    <h2 style="margin-top:25%" align="center">Silakan Masuk untuk melanjutkan!</h2>
    <?php include "pesan.php"?>
    <table>
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th></th>
        </tr>
        <tr>
        <form action="autentikasi.php" method="post">
            <td>
                <input type="text" name="username" id="username" required>
            </td>
            <td>
                <input type="password" name="password" id="password" required>
            </td>
            <td>
                <input type="submit" name="submit" value="Masuk">
            </td>
        </form>
        </tr>
    </table>
</body>
</html>