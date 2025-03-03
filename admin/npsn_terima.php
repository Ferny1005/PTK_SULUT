<?php
//ini wajib dipanggil paling atas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


include "../koneksi.php";  

//ini sesuaikan foldernya ke file 3 ini
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


           //sesuaikan name dengan di form nya ya 

$id_sekolah    = mysqli_real_escape_string($koneksi,$_GET['id_sekolah']);
$query = mysqli_query($koneksi,"SELECT email FROM npsn_satu WHERE id_sekolah='$id_sekolah'");
$data  = mysqli_fetch_array($query);
$email = $data['email'];

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

try {
    //Server settings
    $mail->SMTPDebug = 2;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'sulutdinaspendidikan@gmail.com';                     //SMTP username
    $mail->Password   = 'jarvaaucvixgrxeb';                               //SMTP password
    $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
    $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //pengirim
    $mail->setFrom('sulutdinaspendidikan@gmail.com', 'Dinas Pendidikan Sulawesi Utara');
    $mail->addAddress($email);     //Add a recipient
 
    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = "Konfirmasi Pengajuan Berkas NPSN";
    $mail->Body    = "Sehubung dengan Pengisian berkas untuk kepengurusan NPSN yang tersedia, dengan ini Kami dari Pihak Dinas Pendidikan Daerah Sulawesi Utara menyampaikan bahwa Berkas tersebut <b>DITERIMA</b><br/>";
    $mail->AltBody = '';
    //$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
    //$mail->addAttachment(''); 

    $mail->send();

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

} 

mysqli_query($koneksi,"update npsn_satu set disposisi=1 where id_sekolah='$id_sekolah'");


        echo "<script>alert('Email berhasil terkirim!');window.location='../admin_npsn.php';</script>";

        
        ?>
