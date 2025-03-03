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
$id_operator    = mysqli_real_escape_string($koneksi,$_GET['id_operator']);
$query = mysqli_query($koneksi,"SELECT * FROM operator WHERE id_operator='$id_operator' ");
$data  = mysqli_fetch_array($query);
?>
<hr>
<b>Judul:</b> <?php echo $data['nama_operator'];?> | <a href='../admin.php?p=ptk_skl'> Kembali </a>
<hr>
<embed src="../file/<?php echo $data['nama_file'];?>" type="application/pdf" width="100%" height="600" ></embed>
</body>
</html>