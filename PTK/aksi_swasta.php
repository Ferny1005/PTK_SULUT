<?php 
// koneksi database
include '../koneksi.php';
 
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$jk = $_POST['jk'];
$jam_linier = $_POST['jam_linier'];
$jam_tidak_linier = $_POST['jam_tidak_linier'];
$npsn = $_POST['npsn'];


$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT nik FROM ptk_swasta WHERE nik='$nik'"));
    if ($cek > 0){
    echo "<script>window.alert('data NIK yang anda masukan sudah ada')
    window.location='form_swasta'</script>";
    }else {

// menginput data ke database
mysqli_query($koneksi,"insert into ptk_swasta values('$nik','$nama','$jk','$jam_linier','$jam_tidak_linier','$npsn')");
 
 session_start();
$_SESSION['nik'] = $nik;
// mengalihkan halaman kembali ke index.php
header("location:upload_dokumen");
}
 
?>