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
                                            <th>Tanggal</th>
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
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from ptk_swasta join upload on ptk_swasta.nik=upload.nik where upload.acc !=0");
        while($d = mysqli_fetch_array($data)){
            ?>
                                        <tr>
                                            <td><?php echo date('d-m-Y', strtotime($d['tgl'])); ?></td>
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
                                            <td><?php if ($d['status']==1)
                                        {echo "<a class='btn btn-primary btn-circle'>
                                        <i class='fas fa-check'></i></a>";}
                                        else
                                            {echo "<a class='btn btn-primary btn-circle'>X</a>";}
?></td>
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