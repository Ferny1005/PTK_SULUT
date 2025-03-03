<div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Riwayat Pengajuan PTK Negeri</h6>
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
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
        <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from ptk_negeri join upload on ptk_negeri.nik=upload.nik join ptk_pegawai on ptk_negeri.nik=ptk_pegawai.nik where upload.acc !=0");
        while($d = mysqli_fetch_array($data)){
            ?>
                                        <tr>
                                            <td><?php echo date('d-m-Y', strtotime($d['tgl'])); ?></td>
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
                                            <td><?php if ($d['status']==1)
                                        {echo "<a class='btn btn-primary btn-circle'>
                                        <i class='fas fa-check'></i></a>";}
                                        else
                                            {echo "<a class='btn btn-primary btn-circle'>X</a>";} ?></td>
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


                