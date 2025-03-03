<div class="container-fluid">

                    <!-- Page Heading -->
                    
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Daftar Pengajuan NPSN</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>Nama</th>
                                            <th>Kabupaten</th>
                                            <th>Kecamatan</th>
                                            <th>Kelurahan</th>
                                            <th>Kode POS</th>
                                            <th>Alamat</th>
                                            <th>Jenjang</th>
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
                                            <th>Disposisi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                <?php 
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi,"select * from npsn_satu join npsn_dua on npsn_satu.id_sekolah=npsn_dua.id_sekolah join npsn_upload on npsn_dua.id_sekolah=npsn_upload.id_sekolah where npsn_satu.acc=1 and disposisi=0");
        while($d = mysqli_fetch_array($data)){
            ?>
                                        <tr>
                                            <td><?php echo $d['nama']; ?></td>
                                            <td><?php echo $d['kab']; ?></td>
                                            <td><?php echo $d['kec']; ?></td>
                                            <td><?php echo $d['kel']; ?></td>
                                            <td><?php echo $d['kode']; ?></td>
                                            <td><?php echo $d['alamat']; ?></td>
                                            <td><?php echo $d['jenjang']; ?></td>
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
                                            <td align="center"><a href="admin/npsn_terima.php?id_sekolah=<?php echo $d['id_sekolah'];?>" class="btn btn-success btn-icon-split">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-check"></i>
                                        </span>
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