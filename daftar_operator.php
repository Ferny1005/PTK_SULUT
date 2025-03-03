                     <div class="container-fluid">
                       <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="p-5">
                        <h5>Registrasi Operator Pengusul</h5> <br/>
                    <form class="user" method="post" action="tambah_operator.php" enctype="multipart/form-data">
                            <?php
                        include 'koneksi.php';
                        $npsn = $_GET['npsn'];
                        $data = mysqli_query($koneksi,"select * from sekolah where npsn='$npsn'");
                        while($d = mysqli_fetch_array($data)){
                            ?>
                        <h6>Data Operator dan SK</h6>
                                 <div class="form-group">
                                    <input type="number" value="<?php echo $d['npsn']; ?>" class="form-control form-control-user" name="npsn" readonly>
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama_operator" 
                                        placeholder="Nama Operator">
                                </div>
                                <div class="form-group">
                                    <input type="number" class="form-control form-control-user" name="no_wa" 
                                        placeholder="Nomor WA">
                                </div>
                                <label>SK Pengangkatan Operator (File PDF)</label>
                                <div class="form-group">
                                    <input type="file" class="form-control form-control-user" name="nama_file">
                                </div>
                                <input type="submit" class="btn btn-danger btn-user btn-block" value="K I R I M">
                                            <?php 
    }
    ?>
                            </form>

                </div>
                <!-- /.container-fluid -->

            </div>
    