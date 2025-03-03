<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Pengajuan NPSN</title>

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
                                        <h1 class="h4 text-gray-900 mb-4">Pengajuan Nomor Pokok Sekolah Nasional</h1>
                                    </div>
                                    <form class="user" method="post" action="aksi_dua.php">
                                                                      
                                 <div class="form-group">
                                    <?php session_start();?>
                                    <input type="text" name="id_sekolah" value="<?php echo $_SESSION['id_sekolah']; ?>" class="form-control form-control-user" readonly>
                                </div>
                                <div class="form-group">
                                     <label>Kepemilikan</label><br/>
                                        <input type="radio" name="pemilik" value="Pemerintah Pusat"> Pemerintah Pusat<br>
                                        <input type="radio" name="pemilik" value="Pemerintah Daerah"> Pemerintah Daerah<br>
                                        <input type="radio" name="pemilik" value="Yayasan"> Yayasan<br>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-5 mb-3 mb-sm-0">
                                        <input type="text" inputmode="numeric" name="t_milik" class="form-control form-control-user" required
                                                placeholder="Luas Tanah Milik">
                                    </div>
                                    <div>
                                        <h5>m <sup>2</sup></h5>
                                    </div>
                                    <div class="col-sm-5">
                                        <input type="text" inputmode="numeric" name="b_milik" class="form-control form-control-user" required
                                                placeholder="Luas Tanah Bukan Milik">
                                    </div>
                                     <div>
                                        <h5>m <sup>2</sup></h5>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="sk_pen" class="form-control form-control-user" required
                                                placeholder="Nomor SK Pendirian">
                                </div>
                                <div class="form-group">
                                    <input type="text" name="sk_oper" class="form-control form-control-user" required
                                                placeholder="Nomor SK Operasional">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal SK Pendirian</label>
                                    <input type="date" name="tgl_pendiri" class="form-control form-control-user" required>
                                </div>
                                <div class="form-group">
                                    <label>Tanggal SK Operasional</label>
                                    <input type="date" name="tgl_operasional" class="form-control form-control-user" required>
                                </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="text" inputmode="numeric" name="lintang" class="form-control form-control-user" required
                                                placeholder="Lintang">
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="text" inputmode="numeric" name="bujur" class="form-control form-control-user" placeholder="Bujur" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="checkbox" name="checkbox" value="check" /> Silahkan Cek kembali data anda 
                                    <br/>
                                </div>
                                

                                    <input type="submit" name="Submit" value="Simpan" class="btn btn-danger btn-user btn-block" onclick="if(!this.form.checkbox.checked){alert('Wajib di centang !');return false}"  />
                                        
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>