<?php
    // koneksi ke database
    include 'koneksi.php';

    $no = $_GET['id'];
    mysqli_query($koneksi, "DELETE FROM table_siswa WHERE id_siswa='$no' ");
?>