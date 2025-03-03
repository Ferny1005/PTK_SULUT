<?php 
// koneksi database
include 'koneksi.php';
 
// menangkap data yang di kirim dari form
$npsn = $_POST['npsn'];
$nama = $_POST['nama'];
$kab_kota = $_POST['kab_kota'];
$tipe = $_POST['tipe'];
$kategori = $_POST['kategori'];
$email = $_POST['email'];
$password = $_POST['password'];
 
$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT npsn FROM sekolah WHERE npsn='$npsn'"));
    if ($cek > 0){
    echo "<script>window.alert('NPSN yang anda masukan sudah ada')
    window.location='../PTK/'</script>";
    }else {
// menginput data ke database
mysqli_query($koneksi,"insert into sekolah values('$npsn','$nama','$kab_kota','$tipe','$kategori','$email','$password',0,0)");
 
header("location:index?p=op&npsn=$npsn");
 }
?> 