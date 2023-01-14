<?php
    include "koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Biodata</title>
</head>
<body>
    <a href="tambah.php">Tambah Data</a>
<table border="1" cellspacing="0" cellpadding="10">
    <thead>
        <td>ID</td>  
        <td>NIS</td>
        <td>Nama</td>
        <td>Kelas</td>
        <td class="btn">Aksi</td>
    </thead>
    <?php

        $tampil = mysqli_query($koneksi, "SELECT * FROM siswa");
        $no = 1;
        while($hasil = mysqli_fetch_array($tampil)){
    ?>
    <tr>
        <td><?php echo $no++; ?></td>
        <td><?php echo $hasil['nis']; ?></td>
        <td><?php echo $hasil['nama']; ?></td>
        <td><?php echo $hasil['kelas']; ?></td>
        <td>
            <a href="edit.php?id=<?php echo $hasil['id']; ?>">Edit</a>
            <a href="hapus.php?id=<?php echo $hasil['id']; ?>">Hapus</a>
        </td>
    </tr>
    <?php
        }
    ?>
</table>
</body>
</html>
