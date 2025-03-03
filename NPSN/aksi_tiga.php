<?php
include"../koneksi.php";

$id_sekolah = $_POST['id_sekolah'];
//Punya File
$lokasif1=$_FILES['permohonan']['tmp_name'];
$namaf1=$_FILES['permohonan']['name'];
$folderf1="up/$namaf1";

$lokasif2=$_FILES['sk_pendiri']['tmp_name'];
$namaf2=$_FILES['sk_pendiri']['name'];
$folderf2="up/$namaf2";

$lokasif3=$_FILES['sk_operasional']['tmp_name'];
$namaf3=$_FILES['sk_operasional']['name'];
$folderf3="up/$namaf3";

$lokasif4=$_FILES['foto_papan']['tmp_name'];
$namaf4=$_FILES['foto_papan']['name'];
$folderf4="gb/$namaf4";

$lokasif5=$_FILES['foto_tempat']['tmp_name'];
$namaf5=$_FILES['foto_tempat']['name'];
$folderf5="gb/$namaf5";

If (move_uploaded_file($lokasif1,$folderf1) AND move_uploaded_file($lokasif2,$folderf2) AND move_uploaded_file($lokasif3,$folderf3) AND move_uploaded_file($lokasif4,$folderf4) AND move_uploaded_file($lokasif5,$folderf5)){
$jadi=mysqli_query($koneksi,"INSERT INTO npsn_upload(permohonan,sk_pendiri,sk_operasional,foto_papan,foto_tempat,id_sekolah) VALUES ('$namaf1','$namaf2','$namaf3','$namaf4','$namaf5','$id_sekolah')");

echo "<script>window.alert('Berhasil dikirim !')
    window.location='../survey.php'</script>";
} else {
	session_start();
$_SESSION['id_sekolah'] = $id_sekolah;
echo "
<script>window.alert('Gagal dikirim !') ;window.location.href = 'form_tiga.php';</script>
";
}
?>