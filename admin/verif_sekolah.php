<?php 
// koneksi database
include '../koneksi.php';
$npsn = $_GET['npsn'];
mysqli_query($koneksi,"update sekolah set status='1' where npsn='$npsn'");
// mengalihkan halaman kembali
header("location:../staf_btikp.php");

?>