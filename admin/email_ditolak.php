<?php
//ini wajib dipanggil paling atas
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

//ini sesuaikan foldernya ke file 3 ini
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';


           //sesuaikan name dengan di form nya ya 
          $nik = $_POST['nik'];
          $email = $_POST['email'];
          $alasan = $_POST['alasan'];

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
    $mail->Subject = "Konfirmasi Pengajuan Berkas PTK";
    $mail->Body    = "Sehubung dengan pengajuan yang telah saudara/i buat sebelumnya, dengan ini Kami dari Pihak Dinas Pendidikan Daerah Sulawesi Utara menyampaikan bahwa permohonan tersebut <b>DITOLAK</b><br/> dengan alasan : <br>".$alasan;
    $mail->AltBody = '';
    //$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
    //$mail->addAttachment(''); 

    $mail->send();
    echo 'Message has been sent';
} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

}
          //redirect ke halaman index.php
include "../koneksi.php";  

mysqli_query($koneksi,"update upload set status='2', acc='2' where nik='$nik'");
        echo "<script>alert('Email berhasil terkirim!');window.location='../staf_gtk.php';</script>";
        ?>
