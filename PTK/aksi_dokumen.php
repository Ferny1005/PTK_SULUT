<?php
include"../koneksi.php";

$nik = $_POST['nik'];
$email = $_POST['email'];
//Punya File
$lokasif1=$_FILES['sp_dinas']['tmp_name'];
$namaf1=$_FILES['sp_dinas']['name'];
$folderf1="up/$namaf1";

$lokasif2=$_FILES['kk']['tmp_name'];
$namaf2=$_FILES['kk']['name'];
$folderf2="up/$namaf2";

$lokasif3=$_FILES['ktp']['tmp_name'];
$namaf3=$_FILES['ktp']['name'];
$folderf3="up/$namaf3";

$lokasif4=$_FILES['ijazah']['tmp_name'];
$namaf4=$_FILES['ijazah']['name'];
$folderf4="up/$namaf4";

$lokasif5=$_FILES['sk_gtk']['tmp_name'];
$namaf5=$_FILES['sk_gtk']['name'];
$folderf5="up/$namaf5";

$lokasif6=$_FILES['sk_tugas']['tmp_name'];
$namaf6=$_FILES['sk_tugas']['name'];
$folderf6="up/$namaf6";
$tgl = date('Y-m-d');

If (move_uploaded_file($lokasif1,$folderf1) AND move_uploaded_file($lokasif2,$folderf2) AND move_uploaded_file($lokasif3,$folderf3) AND move_uploaded_file($lokasif4,$folderf4) AND move_uploaded_file($lokasif5,$folderf5) AND move_uploaded_file($lokasif6,$folderf6)){
$jadi=mysqli_query($koneksi,"INSERT INTO upload(sp_dinas,kk,ktp,ijazah,sk_gtk,sk_tugas,nik,email,tgl) VALUES ('$namaf1','$namaf2','$namaf3','$namaf4','$namaf5','$namaf6','$nik','$email','$tgl')");

echo "<script>window.alert('Berhasil dikirim !')
    window.location='../survey'</script>";
} else {
	session_start();
$_SESSION['nik'] = $nik;
echo "
<script>window.alert('Gagal dikirim !') ;window.location.href = 'upload_dokumen';</script>
";
}
?>