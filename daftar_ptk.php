                     <div class="container-fluid">
                       <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="p-5">
                        <h5>Registrasi Sekolah</h5> <br/>
                    <form class="user" method="post" action="tambah_aksi.php" enctype="multipart/form-data">
                        <h6>Data Sekolah</h6>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-user" name="nama" 
                                        placeholder="Nama Sekolah">
                                </div>
                                <div class="form-group">
                                        <input type="text" pattern="[0-9]{8}" class="form-control form-control-user"
                                            placeholder="NPSN" name="npsn">
                                    </div>
                                    
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-user" id="exampleLastName"
                                            placeholder="Kabupaten / Kota" name="kab_kota"> 
                                    </div>
                                <div class="form-group row">
                                    <div class="col-sm-6 mb-3 mb-sm-0">
                                        <input type="radio" name="tipe" value="SMK"> Sekolah Menegah Kejuruan<br>
                                        <input type="radio" name="tipe" value="SMA"> Sekolah Menengah Atas<br>
                                        <input type="radio" name="tipe" value="SLB"> Sekolah Luar Biasa<br>
                                    </div>
                                    <div class="col-sm-6">
                                        <input type="radio" name="kategori" value="Negeri"> Negeri<br>
                                <input type="radio" name="kategori" value="Swasta"> Swasta<br>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control form-control-user" name="email" name="email" placeholder="Email">
                                </div>
                                <div class="form-group">
                                    <input type="password" name="password" class="form-control form-control-user" name="password" placeholder="Password">
                                </div>
                                
                                <input type="submit" class="btn btn-danger btn-user btn-block" value="K I R I M">
                                    
                                <hr>
                            </form>

                </div>
                <!-- /.container-fluid -->

            </div>
    