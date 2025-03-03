 <?php
include "../koneksi.php";
?>
<!DOCTYPE html>
<html>
<head>
 <title>Lihat SK</title>
 <style type="text/css">
 body {
  font-family: verdana;
  font-size: 12px;
 }
 a {
  text-decoration: none;
  color: #3050F3;
 }
 a:hover {
  color: #000F5E;
 }
</style>
</head>
<body>
<?php
$id_upload    = mysqli_real_escape_string($koneksi,$_GET['id_upload']);
$query = mysqli_query($koneksi,"SELECT * FROM npsn_upload WHERE id_upload='$id_upload'");
$data  = mysqli_fetch_array($query);
?>
<hr>
<b>Judul:</b> <?php echo $data['permohonan'];?> | <a href='../admin.php?p=t_npsn'> Kembali </a>
<hr>
<embed src="../NPSN/up/<?php echo $data['permohonan'];?>" type="application/pdf" width="100%" height="600" ></embed>
</body>
</html>