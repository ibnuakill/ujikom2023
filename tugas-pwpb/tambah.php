<?php
     include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form  method="POST" action="tambah_aksi.php">
        <table border="1" cellspacing="0" cellpadding="10">
            <tr>
                <td>NIS</td>
                <td><input type="number" name="nis" placeholder="Masukan NIS..." required></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td><input type="name" name="nama" placeholder="Masukan Nama..." required></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas" placeholder="Masukan Kelas..." required></td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" name="submit" value="kirim">
                </td>
            </tr>
        </table>
    </form>

</body>
</html>