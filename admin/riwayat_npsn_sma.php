<div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Riwayat Pengajuan SMA</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Tanggal</th>
                                            <th>Nama</th>
                                            <th>Kabupaten</th>
                                            <th>Kecamatan</th>
                                            <th>Kelurahan</th>
                                            <th>Kode POS</th>
                                            <th>Alamat</th>
                                            <th>Kategori</th>
                                            <th>Pemilik</th>
                                            <th>Tanah Milik | Bukan</th>
                                            <th>SK Pendirian</th>
                                            <th>SK Operasional</th>
                                            <th>Lintang | Bujur</th>
                                            <th>Surat Permohonan</th>
                                            <th>SK Pendirian</th>
                                            <th>SK Operasional</th>
                                            <th>Papan Nama</th>
                                            <th>Tempat Depan</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from npsn_satu join npsn_dua on npsn_satu.id_sekolah=npsn_dua.id_sekolah join npsn_upload on npsn_dua.id_sekolah=npsn_upload.id_sekolah where npsn_satu.disposisi!=0 and npsn_satu.jenjang='SMA'");
        while($d = mysqli_fetch_array($data)){
            ?>
                                        <tr>
                                            <td><?php echo date('d-m-Y', strtotime($d['tgl'])); ?></td>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['kab']; ?></td>
                                            <td><?php echo $d['kec']; ?></td>
                                            <td><?php echo $d['kel']; ?></td>
                                            <td><?php echo $d['kode']; ?></td>
                                            <td><?php echo $d['alamat']; ?></td>
                                            <td><?php echo $d['kategori']; ?></td>
                                            <td><?php echo $d['pemilik']; ?></td>
                                            <td><?php echo $d['t_milik']; echo " | "; echo $d['b_milik']; ?></td>
                                            <td><?php echo $d['sk_pen']; echo " | "; echo $d['tgl_pendiri']; ?></td>
                                            <td><?php echo $d['sk_oper']; echo " | "; echo $d['tgl_operasional']; ?></td>
                                            <td><?php echo $d['lintang']; echo " | "; echo $d['bujur']; ?></td>
                                            <td><a href="admin/lihat_permohonan.php?id_upload=<?php echo $d['id_upload'];?>">Lihat </a></td>
                                            <td><a href="admin/lihat_pendiri.php?id_upload=<?php echo $d['id_upload'];?>">Lihat </a></td>
                                            <td><a href="admin/lihat_operasional.php?id_upload=<?php echo $d['id_upload'];?>">Lihat </a></td> 
                                            <td><img src="NPSN/gb/<?php echo $d['foto_papan']; ?>" width="80" height="80"></td>
                                            <td><img src="NPSN/gb/<?php echo $d['foto_tempat']; ?>" width="80" height="80"></td>
                                            <td><?php if ($d['status']==1)
                                        {echo "<a class='btn btn-primary btn-circle'>
                                        <i class='fas fa-check'></i></a>";}
                                        else
                                            {echo "<a class='btn btn-primary btn-circle'>X</a>";} ?></td>
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