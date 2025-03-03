<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>PTK Negeri</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-danger">

    <div class="container">

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Penilaian Tindakan Kelas Baru</h1>
                                    </div>
                                    <form class="user" method="post" action="aksi_negeri.php">
                                        <h5>Identitas Diri</h5>
                                            <?php 
                                            session_start();
                                            ?>
                                <div class="form-group">
                                    <input type="number" name="npsn" class="form-control form-control-user" value="<?php echo $_SESSION['npsn']; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" pattern="[0-9]{16}" name="nik" class="form-control form-control-user" placeholder="NIK" required>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" required placeholder="Nama sesuai Kartu Keluarga">
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <h6>Tempat</h6>
                                        <input type="text" name="tempat" class="form-control form-control-user" required
                                                placeholder="Tempat Lahir">
                                    </div>
                                    <div class="col-sm-6">
                                        <h6>Tanggal Lahir</h6>
                                        <input type="date" id="end_dt" name="tgl_lahir" class="form-control form-control-user" required
                                                placeholder="Tanggal Lahir" data-date-format="DD/MMM/YYYY">
                                    </div>
                                </div>
                                 <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Jenis Kelamin</label><br/>
                                        <input type="radio" name="jk" value="P" checked> Perempuan<br>
                                        <input type="radio" name="jk" value="L"> Laki-Laki<br>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Status Perkawinan</label><br/>
                                        <input type="radio" name="status_per" value="Belum Menikah" checked> Belum Menikah<br>
                                        <input type="radio" name="status_per" value="Menikah"> Menikah<br>
                                        <input type="radio" name="status_per" value="Janda/Duda"> Janda/Duda<br>
                                    </div>
                                </div>
                                <div class="form-group">
                                        <input type="text" class="form-control form-control-user" name="nama_ibu" required
                                                placeholder="Nama Ibu Kandung sesuai Kartu Keluarga">
                                </div>
                                <h5>Domisili</h5>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="kab" class="form-control form-control-user" required
                                                placeholder="Kabupaten/Kota">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" name="kec" class="form-control form-control-user" required
                                                placeholder="Kecamatan">
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" name="kel" class="form-control form-control-user" required
                                                placeholder="Kelurahan">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="number" class="form-control form-control-user" name="kode" required
                                                placeholder="Kode Pos">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="alamat" class="form-control form-control-user" required
                                                placeholder="Alamat">
                                </div>
                                <h5>Kepegawaian</h5>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Jenis PTK</label><br/>
                                        <input type="radio" name="jenis_ptk" value="Guru MaPel" checked> Guru MaPel<br>
                                        <input type="radio" name="jenis_ptk" value="Guru BK"> Guru BK<br>
                                        <input type="radio" name="jenis_ptk" value="Guru TIK"> Guru TIK<br>
                                        <input type="radio" name="jenis_ptk" value="Tenaga Administrasi Sekolah"> Tenaga Administrasi Sekolah<br>
                                        <input type="radio" name="jenis_ptk" value="Tukang Kebun"> Tukang Kebun<br>
                                        <input type="radio" name="jenis_ptk" value="Penjaga Sekolah"> Penjaga Sekolah<br>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Status Kepegawaian</label><br/>
                                        <input type="radio" name="status_kep" value="PNS" checked> PNS<br>
                                        <input type="radio" name="status_kep" value="PNS Depag"> PNS Depag<br>
                                        <input type="radio" name="status_kep" value="CPNS"> CPNS<br>
                                        <input type="radio" name="status_kep" value="PPPK"> PPPK<br>
                                        <input type="radio" name="status_kep" value="Honor Daerah TK I Prov / THL"> Honor Daerah TK I Prov / THL<br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" pattern="[0-9]{18}" class="form-control form-control-user"
                                                placeholder="NIP" name="nip" required>
                                                
                                </div>
                                <div class="form-group">
                                    <label>Lembaga Pengangkat</label><br/>
                                        <input type="radio" name="lembaga" value="Pemerintah Pusat" checked> Pemerintah Pusat<br>
                                        <input type="radio" name="lembaga" value="Pemerintah Provinsi"> Pemerintah Provinsi<br>
                                        <input type="radio" name="lembaga" value="Kepala Sekolah"> Kepala Sekolah<br>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_sk" class="form-control form-control-user" required
                                                placeholder="Nomor SK Pengangkatan">
                                </div>
                                <div class="form-group">
                                    <h6>TMT Pengangkatan</h6>
                                    <input type="date" id="end_dt" name="tmt_peng" class="form-control form-control-user" required
                                                placeholder="TMT Pengangkatan">
                                </div>
                                <div class="form-group">
                                     <label>Sumber Gaji</label><br/>
                                        <input type="radio" name="sumber" value="APBN" checked> APBN<br>
                                        <input type="radio" name="sumber" value="APBD Provinsi"> APBD Provinsi<br>
                                        <input type="radio" name="sumber" value="Sekolah"> Sekolah<br>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="no_pem" class="form-control form-control-user" required
                                                placeholder="Nomor SK Pembagian Tugas">
                                </div>
                                <div class="form-group">
                                    <h6>Tanggal SK</h6>
                                    <input type="date" id="end_dt" name="tgl_sk" class="form-control form-control-user" required
                                                placeholder="Tanggal SK">
                                </div>
                                <h6>TMT Tugas</h6>
                                 <div class="form-group">
                                    <input type="date" id="end_dt" name="tmt_tugas" class="form-control form-control-user"required
                                                placeholder="TMT Tugas">
                                </div>
                                    <input type="submit" name="Submit" value="Simpan" class="btn btn-danger btn-user btn-block">
                                        
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"> $(document).ready(function () {
    $("#end_dt").datepicker({ dateFormat: "MM/dd/yyyy" });
});</script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>