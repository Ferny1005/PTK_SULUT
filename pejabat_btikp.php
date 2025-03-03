<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Sistem PTK & NPSN</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>
 <?php 
    session_start();
 
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['status']!="pejabat_btikp"){
        header("location:index.php?pesan=gagal");
    }
 
    ?>
<body id="page-top">
        

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-danger sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="pejabat_btikp.php">
                <div class="sidebar-brand-icon">
                    <img src="img/logo_dinas.png" width="50px">
                </div>
                <div class="sidebar-brand-text mx-3">Admin</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
          <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
             Pengajuan PTK
            </div>
            <li class="nav-item">
                <a class="nav-link" href="#">
                    <span>Operator Dinas</span></a>
            </li>
             <hr class="sidebar-divider">
             <li class="nav-item">
                <a class="nav-link" href="logout.php">
                    <i></i>
                    <span>LOGOUT</span></a>
            </li>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

         

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">
<h5><center>PEMBANGUNAN SISTEM INFORMASI PADA WEBSITE 
PEMBERKASAN TAMBAH PTK DAN PENGUSULAN NPSN 
DI DINAS PENDIDIKAN DAERAH SULAWESI UTARA</center></h5>
                   
                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>


                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">

                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                
                                <!--<span class="mr-2 d-none d-lg-inline text-gray-600 small">Douglas McGee</span>
                                <img class="img-profile rounded-circle"
                                    src="img/undraw_profile.svg"> -->
                            </a>

                            <!-- Dropdown - User Information -->
                            
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

<div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan Akun PTK</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            <th>NPSN</th>
                                            <th>Nama</th>
                                            <th>Kab/Kota</th>
                                            <th>Jenis</th>
                                            <th>Nama Operator</th>
                                            <th>Nomor WA</th>
                                            <th>SK</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from operator inner join sekolah on sekolah.npsn=operator.npsn where status=1 and acc=0");
        while($d = mysqli_fetch_array($data)){
            ?>
                                        <tr>
                                            <td><?php echo $d['npsn']; ?></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['kab_kota']; ?></td>
                                            <td><?php echo $d['tipe']; echo" / "; echo $d['kategori']; ?></td>
                                            <td><?php echo $d['nama_operator']; ?></td>
                                            <td><?php echo $d['no_wa']; ?></td>
                                            <td><a href="admin/view_operator.php?id_operator=<?php echo $d['id_operator'];?>" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a></td>
                                            <td><a href="admin/terima_operator.php?npsn=<?php echo $d['npsn'];?>" class="btn btn-success btn-circle"><i class="fas fa-check"></i></a></td>
                                        </tr>
                                                    <?php 
        }
        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Riwayat Pengajuan Akun PTK</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr align="center">
                                            <th>NPSN</th>
                                            <th>Nama</th>
                                            <th>Kab/Kota</th>
                                            <th>Jenis</th>
                                            <th>Nama Operator</th>
                                            <th>Nomor WA</th>
                                            <th>SK</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from operator inner join sekolah on sekolah.npsn=operator.npsn where acc!=0");
        while($d = mysqli_fetch_array($data)){
            ?>
                                        <tr>
                                            <td><?php echo $d['npsn']; ?></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['kab_kota']; ?></td>
                                            <td><?php echo $d['tipe']; echo" / "; echo $d['kategori']; ?></td>
                                            <td><?php echo $d['nama_operator']; ?></td>
                                            <td><?php echo $d['no_wa']; ?></td>
                                            <td><a href="admin/view_operator.php?id_operator=<?php echo $d['id_operator'];?>" class="btn btn-info btn-circle"><i class="fas fa-info-circle"></i></a></td>
                                            <td><?php if ($d['status']==1)
                                        {echo "<a class='btn btn-primary btn-circle'>
                                        <i class='fas fa-check'></i></a>";}

else
{echo "<a class='btn btn-primary btn-circle'>X</a>";}
?></td>
                                        </tr>
                                                    <?php 
        }
        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                </div>
    <br>

      
                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; 2022</span>
                    </div>
                </div>
            </footer>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="js/demo/chart-area-demo.js"></script>
    <script src="js/demo/chart-pie-demo.js"></script>

</body>

</html>