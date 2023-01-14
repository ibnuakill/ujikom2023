<?php

include 'koneksi.php';

$nis = $_POST['nis'];
$nama = $_POST['nama'];
$kelas = $_POST['kelas'];
 
mysqli_query($koneksi, "INSERT INTO siswa VALUES('','$nis','$nama','$kelas')");

header("location:view.php");
?>