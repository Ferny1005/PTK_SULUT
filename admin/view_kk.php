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
$nik    = mysqli_real_escape_string($koneksi,$_GET['nik']);
$query = mysqli_query($koneksi,"SELECT * FROM upload WHERE nik='$nik'");
$data  = mysqli_fetch_array($query);
?>
<hr>
<b>Judul:</b> <?php echo $data['kk'];?> | <a href='../admin.php?p=t_swasta'> Kembali </a>
<hr>
<embed src="../PTK/up/<?php echo $data['kk'];?>" type="application/pdf" width="100%" height="600" ></embed>
</body>
</html>