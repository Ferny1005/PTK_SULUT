<?php 
// koneksi database
include '../koneksi.php';
 
$npsn = $_POST['npsn'];
$nik = $_POST['nik'];
$nama = $_POST['nama'];
$tempat = $_POST['tempat'];
$tgl_lahir = $_POST['tgl_lahir'];
$jk = $_POST['jk'];
$status_per = $_POST['status_per'];
$nama_ibu = $_POST['nama_ibu'];
$kab = $_POST['kab'];
$kec = $_POST['kec'];
$kel = $_POST['kel'];
$kode = $_POST['kode'];
$alamat = $_POST['alamat'];
$nip = $_POST['nip'];
$jenis_ptk = $_POST['jenis_ptk'];
$status_kep = $_POST['status_kep'];
$lembaga = $_POST['lembaga'];
$no_sk = $_POST['no_sk'];
$tmt_peng = $_POST['tmt_peng'];
$sumber = $_POST['sumber'];
$no_pem = $_POST['no_pem'];
$tgl_sk = $_POST['tgl_sk'];
$tmt_tugas = $_POST['tmt_tugas'];

$cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT nik FROM ptk_negeri WHERE nik='$nik'"));
    if ($cek > 0){
    echo "<script>window.alert('NIK yang anda masukan sudah ada')
    window.location='form_negeri'</script>";
    }else {

 $sql1 = "INSERT INTO ptk_negeri (nik, nama, tempat, tgl_lahir, jk, status_per, nama_ibu, kab, kec, kel, kode, alamat, npsn) VALUES('$nik', '$nama', '$tempat', '$tgl_lahir', '$jk', '$status_per', '$nama_ibu', '$kab', '$kec', '$kel', '$kode', '$alamat', '$npsn')";

$sql2 = "INSERT INTO ptk_pegawai (nip, jenis_ptk, status_kep, lembaga, no_sk, tmt_peng, sumber, no_pem, tgl_sk, tmt_tugas, nik) VALUES('$nip', '$jenis_ptk', '$status_kep', '$lembaga', '$no_sk', '$tmt_peng', '$sumber', '$no_pem', '$tgl_sk', '$tmt_tugas', '$nik')"; 

  mysqli_query($koneksi,$sql1);
  mysqli_query($koneksi,$sql2);

 session_start();
$_SESSION['nik'] = $nik;
// mengalihkan halaman kembali ke index.php
header("location:upload_dokumen");
 }
?>