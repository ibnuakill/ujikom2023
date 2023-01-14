<?php 
include 'koneksi.php';

$id = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "UPDATE siswa SET nis='$nis', nama='$nama', kelas='$kelas' WHERE id='$id' ");

header("location:view.php");
?>