<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan PTK Negeri</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Tempat, Tanggal Lahir</th>
                                            <th>JK</th>
                                            <th>Status</th>
                                            <th>Nama Ibu</th>
                                            <th>Jenis PTK</th>
                                            <th>Status</th>
                                            <th>Lembaga</th>
                                            <th>SK Pngangkatan</th>
                                            <th>Sumber</th>
                                            <th>SK Tugas</th>
                                            <th>TMT Penugasan</th>
                                            <th>SP Dinas</th>
                                            <th>KK</th>
                                            <th>KTP</th>
                                            <th>Ijazah</th>
                                            <th>SK GTK</th>
                                            <th>SK Tugas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from ptk_negeri join upload on ptk_negeri.nik=upload.nik join ptk_pegawai on ptk_negeri.nik=ptk_pegawai.nik where upload.status =''" );
        while($d = mysqli_fetch_array($data)){
            ?>
                                        <tr>
                                            <td><?php echo $d['nik']; ?></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['tempat']; echo ", "; echo $d['tgl_lahir']; ?></td>
                                            <td><?php echo $d['jk']; ?></td>
                                            <td><?php echo $d['status_per']; ?></td>
                                            <td><?php echo $d['nama_ibu']; ?></td>
                                            <td><?php echo $d['jenis_ptk']; ?></td>
                                            <td><?php echo $d['status_kep']; ?></td>
                                            <td><?php echo $d['lembaga']; ?></td>
                                            <td><?php echo $d['no_sk']; ?> / <?php echo $d['tmt_peng']; ?></td>
                                            <td><?php echo $d['sumber']; ?></td>
                                            <td><?php echo $d['no_pem']; ?> / <?php echo $d['tgl_sk']; ?></td>
                                            <td><?php echo $d['tmt_tugas']; ?></td>
                                            <td><a href="admin/view_spdinas.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>
                                            <td><a href="admin/view_kk.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>
                                            <td><a href="admin/view_ktp.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>    
                                            <td><a href="admin/view_ijazah.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>
                                            <td><a href="admin/view_skgtk.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>
                                            </td>
                                            <td><a href="admin/view_sktugas.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>
                                            </td>
                                            <td><a href="admin/verif_ptk.php?nik=<?php echo $d['nik'];?>" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Terima</span>
                                    </a>
                                    <a href="admin/form_tolak.php?nik=<?php echo $d['nik'];?>" class="btn btn-warning btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Tolak</span>
                                    </a>
                                            </td>
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
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan PTK Swasta</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>NIK</th>
                                            <th>Nama</th>
                                            <th>Jenis Kelamin</th>
                                            <th>Jam Linear</th>
                                            <th>Jam Tidak Linear</th>
                                            <th>SP Dinas</th>
                                            <th>KK</th>
                                            <th>KTP</th>
                                            <th>Ijazah</th>
                                            <th>SK GTK</th>
                                            <th>SK Tugas</th>
                                            <th>Aksi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from ptk_swasta join upload on ptk_swasta.nik=upload.nik where upload.status =''");
        while($d = mysqli_fetch_array($data)){
            ?>
                                        <tr>
                                            <td><?php echo $d['nik']; ?></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['jk']; ?></td>
                                            <td><?php echo $d['jam_linier']; ?></td>
                                            <td><?php echo $d['jam_tidak_linier']; ?>
                                            <td><a href="admin/view_spdinas.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>
                                            <td><a href="admin/view_kk.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>
                                            <td><a href="admin/view_ktp.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>    
                                            <td><a href="admin/view_ijazah.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>
                                            <td><a href="admin/view_skgtk.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>
                                            </td>
                                            <td><a href="admin/view_sktugas.php?nik=<?php echo $d['nik'];?>">Lihat </a></td>
                                            </td>
                                            <td><a href="admin/verif_ptk.php?nik=<?php echo $d['nik'];?>" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
                                        <span class="text">Terima</span>
                                    </a>
                                    <a href="admin/form_tolak.php?nik=<?php echo $d['nik'];?>" class="btn btn-warning btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-exclamation-triangle"></i>
                                        </span>
                                        <span class="text">Tolak</span>
                                    </a>
                                            </td>
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