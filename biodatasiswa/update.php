<?php 
include 'koneksi.php';

$data = $_POST['id'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "UPDATE table_siswa SET nis='$nis', nama='$nama', kelas='$kelas' where id_siswa='$data' ");
?>