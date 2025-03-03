<?php 
// mengaktifkan session pada php
session_start();
 
// menghubungkan php dengan koneksi database
include 'koneksi.php';
 
// menangkap data yang dikirim dari form login
$username = $_POST['username'];
$password = $_POST['password'];
 
 
// menyeleksi data user dengan username dan password yang sesuai
$login = mysqli_query($koneksi,"select * from admin where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);
 
// cek apakah username dan password di temukan pada database
if($cek > 0){
 
    $data = mysqli_fetch_assoc($login);
 
    // cek jika user login sebagai staf_btikp
    if($data['status']=="staf_btikp"){
 
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "staf_btikp";
        $_SESSION['nama'] = $data["nama"];
        // alihkan ke halaman dashboard staf_btikp
        header("location:staf_btikp");
 
    // cek jika user login sebagai pejabat_btikp
    }else if($data['status']=="pejabat_btikp"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "pejabat_btikp";
        $_SESSION['nama'] = $data["nama"];
        // alihkan ke halaman dashboard pejabat_btikp
        header("location:pejabat_btikp");
     
      // cek jika user login sebagai staf_gtk
     }else if($data['status']=="staf_gtk"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "staf_gtk";
        $_SESSION['nama'] = $data["nama"];
        // alihkan ke halaman dashboard staf_gtk
        header("location:staf_gtk");
 
    // cek jika user login sebagai kabid_gtk
    }else if($data['status']=="kabid_gtk"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "kabid_gtk";
        $_SESSION['nama'] = $data["nama"];
        // alihkan ke halaman dashboard kabid_gtk
        header("location:kabid_gtk");
    
    }else if($data['status']=="staf_npsn"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "staf_npsn";
        $_SESSION['nama'] = $data["nama"];
        // alihkan ke halaman dashboard staf_npsn
        header("location:staf_npsn");
    
    }else if($data['status']=="pejabat_es_npsn"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "pejabat_es_npsn";
        $_SESSION['nama'] = $data["nama"];
        // alihkan ke halaman dashboard pejabat_es_npsn
        header("location:pejabat_es_npsn");
 
    }else if($data['status']=="admin_npsn"){
        // buat session login dan username
        $_SESSION['username'] = $username;
        $_SESSION['status'] = "admin_npsn";
        $_SESSION['nama'] = $data["nama"];
        // alihkan ke halaman dashboard admin_npsn
        header("location:admin_npsn");
 
    }
    else{
 
        // alihkan ke halaman login kembali
        header("location:?pesan=gagal");
    }   
}else{
    header("location:?pesan=gagal");
}
 
?>