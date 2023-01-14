<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <a href="view.php">Back Home</a>
    <h3>Tambah Data</h3>
    <br><br>
    <form action="tambah_aksi.php" method="post">
        <table border="0">
    <thead>
        <td>NIS</td>
        <td><input type="number" name="nis" placeholder="Masukan NIS Anda" required></td>
    </thead>
    <tr>
        <td>Nama</td>
        <td><input type="text" name="nama" placeholder="Masukan Nama Anda" required>
    </tr>
    <tr>
        <td>Kelas</td>
        <td><input type="text" name="kelas" placeholder="Masukan Kelas Anda" required>
    </tr>
    <tr>
        <td><input type="submit" name="submit" value="tambah"></td>
    </tr>
    </table>
    </form>
</body>
</html>

