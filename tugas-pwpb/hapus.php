<?php 
include 'koneksi.php';

$id = $_GET['id'];
mysqli_query($koneksi, "DELETE FROM siswa WHERE id='$id' ");
 
header("location:view.php");
?>