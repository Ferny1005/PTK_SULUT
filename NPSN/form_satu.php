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
                                    <form class="user" method="post" action="aksi_satu.php">
                                                                      
                                 <div class="form-group">
                                    <?php
    include '../koneksi.php';
 
    $query = mysqli_query($koneksi, "SELECT max(id_sekolah) as id_besar FROM npsn_satu");
    $data = mysqli_fetch_array($query);
    $id_sekolah = $data['id_besar'];
 
    $urutan = (int) substr($id_sekolah, 3, 3);
 
    $urutan++;
    $huruf = "S";
    $kodeBarang = $huruf . sprintf("%03s", $urutan);
    ?>
                                    <input type="text" name="id_sekolah" class="form-control form-control-user" value="<?php echo $kodeBarang; ?>" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" name="nama" class="form-control form-control-user" placeholder="Nama Sekolah" required>
                                </div>
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
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <label>Jenjang</label><br/>
                                        <input type="radio" name="jenjang" value="SMA"> Sekolah Menengah Atas<br>
                                        <input type="radio" name="jenjang" value="SMK"> Sekolah Menengah Kejuruan<br>
                                        <input type="radio" name="jenjang" value="SLB">  Sekolah Luar Biasa<br>
                                    </div>
                                    <div class="col-sm-6">
                                        <label>Kategori</label><br/>
                                        <input type="radio" name="kategori" value="Swasta"> Swasta<br>
                                        <input type="radio" name="kategori" value="Negeri"> Negeri<br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" name="email" class="form-control form-control-user" required
                                                placeholder="Email">
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
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>