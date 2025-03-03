<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_sekolah = $_POST['id_sekolah'];
$pemilik = $_POST['pemilik'];
$t_milik = $_POST['t_milik'];
$b_milik = $_POST['b_milik'];
$sk_pen = $_POST['sk_pen'];
$sk_oper = $_POST['sk_oper'];
$tgl_pendiri = $_POST['tgl_pendiri'];
$tgl_operasional = $_POST['tgl_operasional'];
$lintang = $_POST['lintang'];
$bujur = $_POST['bujur'];
 
// menginput data ke database
mysqli_query($koneksi,"insert into npsn_dua values('','$pemilik','$t_milik','$b_milik','$sk_pen','$sk_oper','$tgl_pendiri','$tgl_operasional','$lintang','$bujur','$id_sekolah')");
 
 
 session_start();
$_SESSION['id_sekolah'] = $id_sekolah;
header("location:form_tiga.php");
 
?>