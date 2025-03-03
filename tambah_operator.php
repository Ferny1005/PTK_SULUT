<?php 
// koneksi database
include 'koneksi.php';
 
$tipe_file = $_FILES['nama_file']['type']; //mendapatkan mime type
if ($tipe_file == "application/pdf"){ //mengecek apakah file tersebu pdf atau bukan
 $nama_operator     = trim($_POST['nama_operator']);
 $no_wa     = trim($_POST['no_wa']);
 $npsn     = trim($_POST['npsn']);
 $nama_file = trim($_FILES['nama_file']['name']);
 $sql = "INSERT INTO operator (nama_operator, no_wa, npsn) VALUES ('$nama_operator', '$no_wa', '$npsn')";
 mysqli_query($koneksi,$sql); //simpan data nama_operator dahulu untuk mendapatkan id_operator
 //dapatkan id_operator terkahir
 $query = mysqli_query($koneksi,"SELECT id_operator FROM operator ORDER BY id_operator DESC LIMIT 1");
 $data  = mysqli_fetch_array($query);
 //mengganti nama pdf
 $nama_baru = "SK_Operator_".$data['id_operator'].".pdf"; //hasil contoh: file_1.pdf
 $file_temp = $_FILES['nama_file']['tmp_name']; //data temp yang di upload
 $folder    = "file"; //folder tujuan
 move_uploaded_file($file_temp, "$folder/$nama_baru"); //fungsi upload
 //update nama file di database
 mysqli_query($koneksi,"UPDATE operator SET nama_file='$nama_baru' WHERE id_operator='$data[id_operator]'");
 header('location:index.php?pesan=upload-berhasil');
}else{
 echo'<div class="alert alert-danger">File gagal di upload</div>';
}
?>