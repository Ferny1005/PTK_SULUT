<?php 
// koneksi database
include '../koneksi.php';
$nik = $_GET['nik'];
mysqli_query($koneksi,"update upload set status='1' where nik='$nik'");
// mengalihkan halaman kembali 
header("location:../staf_gtk.php");
?>