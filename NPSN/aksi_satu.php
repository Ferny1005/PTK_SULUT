<?php 
// koneksi database
include '../koneksi.php';
 
// menangkap data yang di kirim dari form
$id_sekolah = $_POST['id_sekolah'];
$nama = $_POST['nama'];
$kab = $_POST['kab'];
$kec = $_POST['kec'];
$kel = $_POST['kel'];
$kode = $_POST['kode'];
$alamat = $_POST['alamat'];
$jenjang = $_POST['jenjang'];
$kategori = $_POST['kategori'];
$email = $_POST['email'];
$tgl = date('Y-m-d');
 
// menginput data ke database
mysqli_query($koneksi,"insert into npsn_satu values('$id_sekolah','$nama','$kab','$kec','$kel','$kode','$alamat','$jenjang','$kategori','$email','','','','$tgl')");
 
 
 session_start();
$_SESSION['id_sekolah'] = $id_sekolah;
// mengalihkan halaman kembali ke index.php
header("location:form_dua.php");
 
?>