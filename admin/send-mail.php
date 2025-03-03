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
          
$npsn    = mysqli_real_escape_string($koneksi,$_GET['npsn']);
$query = mysqli_query($koneksi,"SELECT email FROM sekolah WHERE npsn='$npsn'");
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
    $mail->Subject = "Konfirmasi Pendaftaran Akun Penelitian tindakan kelas";
    $mail->Body    = "Sehubung dengan pembuatan akun untuk kepengurusan PTK yang tersedia, dengan ini Kami dari Pihak Dinas Pendidikan Daerah Sulawesi Utara menyampaikan bahwa Akun tersebut <b>DITOLAK</b><br/> dikarenakan Data yang diunggah tidak sesuai dengan ketentuan yang berlaku / Data Sekolah tersebut telah ada sebelumnya <br>";
    $mail->AltBody = '';
    //$mail->AddEmbeddedImage('gambar/logo.png', 'logo'); //abaikan jika tidak ada logo
    //$mail->addAttachment(''); 

    $mail->send();
    echo "<script>alert('Email Operator ditolak berhasil terkirim!');window.location='../staf_btikp.php';</script>";

mysqli_query($koneksi,"update sekolah set status='2',acc='2' where npsn='$npsn'");

} catch (Exception $e) {
    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

} 
        
        ?>
