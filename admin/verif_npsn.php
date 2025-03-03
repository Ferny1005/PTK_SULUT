<?php 
// koneksi database
include '../koneksi.php';
$id_sekolah = $_GET['id_sekolah'];
mysqli_query($koneksi,"update npsn_satu set status='1' where id_sekolah='$id_sekolah'");
// mengalihkan halaman kembali 
header("location:../staf_npsn.php");
?>