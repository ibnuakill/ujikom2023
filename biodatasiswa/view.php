<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Siswa</title>
</head>
<body>
    <thead>
        <th>NIS</th>
        <th>Nama</th>
        <th>Kelas</th>
    </thead>
    <?php
    include 'koneksi.php';

    $no = 1; 
    $data = mysqli_query($koneksi, "SELECT * FROM siswa ");

    while($koneksi = mysqli_fetch_array($data)){

    ?>

    <tr>
        <td><?php echo $no; ?></td>
        <td><?php echo $d['nis'] ?></td>
        <td><?php echo $d['nama'] ?></td>
        <td><?php echo $d['kelas'] ?></td>
        <td>
            <a href="edit.php?id=<?php echo $koneksi['nis']; ?> ">Edit</a>
            <a href="hapus.php?id=<?php echo $koneksi['nis']; ?> ">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</body>
</html>