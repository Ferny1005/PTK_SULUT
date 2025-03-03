<?php 
// berfungsi mengaktifkan session
session_start();
 
// berfungsi menghubungkan koneksi ke database
include 'koneksi.php';
 
// berfungsi menangkap data yang dikirim
$user = $_POST['email'];
$pass = $_POST['password'];
 
// berfungsi menyeleksi data user dengan email dan password yang sesuai
$sql = mysqli_query($koneksi,"SELECT * FROM sekolah WHERE email='$user' AND password='$pass' AND acc=1");
//berfungsi menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($sql);

// berfungsi mengecek apakah email dan password ada pada database
if($cek > 0){
	$data = mysqli_fetch_assoc($sql);

	// berfungsi mengecek jika user login sebagai Swasta
	if($data['kategori']=="Swasta"){
		// berfungsi membuat session
		$_SESSION['npsn'] =  $data['npsn'];
		$_SESSION['kategori'] = "Swasta";
		//berfungsi mengalihkan ke halaman Swasta
		header("location:PTK/form_swasta");
	// berfungsi mengecek jika user login sebagai Negeri
	}else if($data['kategori']=="Negeri"){
		// berfungsi membuat session
		$_SESSION['npsn'] = $data['npsn'];
		$_SESSION['kategori'] = "Negeri";
		// berfungsi mengalihkan ke halaman Negeri
		header("location:PTK/form_negeri");

	}else{
		// berfungsi mengalihkan alihkan ke halaman login kembali
		header("location:?pesan=gagal");
	}	
}else{
	header("location:?pesan=gagal");
}
?>