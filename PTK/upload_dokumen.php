<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Upload Berkas</title>

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
                                        <h1 class="h4 text-gray-900 mb-4">Upload Dokumen Pendukung</h1>
                                    </div>
                                    <form class="user" method='POST' action='aksi_dokumen.php' enctype='multipart/form-data'>
                                <div class="form-group"><?php session_start();?>
                                    <input type="number" name="nik" value="<?php echo $_SESSION['nik']; ?>" class="form-control form-control-user" readonly>
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="email" name="email" class="form-control form-control-user">
                                </div>
                                <div class="form-group">
                                    <label>Surat Pengantar Cabang Dinas / Bidang Terkait (Untuk Kota Manado)</label>
    <script>
        function fileValidation1() {
            var fileInput =
                document.getElementById('berkas1');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
/(\.pdf)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Tipe File Tidak sesuai ketentuan !');
                fileInput.value = '';
                return false;
            }
            const fi = document.getElementById('berkas1');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 1000) {
                    alert(
                      "Ukuran File terlalu Besar, silahkan unggah dengan ukuran dibawah 1mb");
                } else if (file < 1) {
                    alert(
                      "Ukuran File terlalu Kecil, Silahkan unggah dengan ukurang diatas 1kb");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
        }
    </script>
                                    <input type="file" name="sp_dinas" class="form-control form-control-user" id="berkas1" onchange="return fileValidation1()">
                                </div>
                                <div class="form-group">
                                    <label>Fotocopy Kartu Keluarga Terbaru</label>
                        <script>
        function fileValidation2() {
            var fileInput =
                document.getElementById('berkas2');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
/(\.pdf)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Tipe File Tidak sesuai ketentuan !');
                fileInput.value = '';
                return false;
            }
            const fi = document.getElementById('berkas2');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 1000) {
                    alert(
                      "Ukuran File terlalu Besar, silahkan unggah dengan ukuran dibawah 1mb");
                } else if (file < 1) {
                    alert(
                      "Ukuran File terlalu Kecil, Silahkan unggah dengan ukurang diatas 1kb");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
        }
    </script>
                                    <input type="file" name="kk" class="form-control form-control-user" id="berkas2" onchange="return fileValidation2()">
                                </div>
                                <div class="form-group">
                                    <label>Fotocopy KTP</label>
                                   <div id="imagePreview5"></div>
    <script>
        function fileValidation3() {
            var fileInput2 =
                document.getElementById('file2');
            var filePath2 = fileInput2.value;
            var allowedExtensions2 =
                    /(\.jpg)$/i;
             
            if (!allowedExtensions2.exec(filePath2)) {
                alert('Tipe File Tidak sesuai ketentuan !');
                fileInput2.value = '';
                return false;
            }
            else
            {
                if (fileInput2.files && fileInput2.files[0]) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        document.getElementById(
                            'imagePreview5').innerHTML =
                            '<img width="100px" src="' + e.target.result
                            + '"/> <br/>';
                    };
                     
                    reader.readAsDataURL(fileInput2.files[0]);
                }
            }
            const fi = document.getElementById('file2');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 1000) {
                    alert(
                      "Ukuran File terlalu Besar, silahkan unggah dengan ukuran dibawah 1mb");
                } else if (file < 1) {
                    alert(
                      "Ukuran File terlalu Kecil, Silahkan unggah dengan ukurang diatas 1kb");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
        }
    </script>
                                    <input type="file" name="ktp" class="form-control form-control-user" id="file2" onchange="return fileValidation3()">
                                </div>
                                <div class="form-group">
                                    <label>Fotocopy Ijazah</label>
                                    <script>
        function fileValidation4() {
            var fileInput =
                document.getElementById('berkas4');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
/(\.pdf)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Tipe File Tidak sesuai ketentuan !');
                fileInput.value = '';
                return false;
            }
            const fi = document.getElementById('berkas4');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 1000) {
                    alert(
                      "Ukuran File terlalu Besar, silahkan unggah dengan ukuran dibawah 1mb");
                } else if (file < 1) {
                    alert(
                      "Ukuran File terlalu Kecil, Silahkan unggah dengan ukurang diatas 1kb");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
        }
    </script>
                                    <input type="file" name="ijazah" class="form-control form-control-user" id="berkas4" onchange="return fileValidation4()">
                                </div>
                                <div class="form-group">
                                    <label>Fotocopy SK Pengangkatan Sbg Pegawai GTK</label>
                                    <script>
        function fileValidation5() {
            var fileInput =
                document.getElementById('berkas5');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
/(\.pdf)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Tipe File Tidak sesuai ketentuan !');
                fileInput.value = '';
                return false;
            }
            const fi = document.getElementById('berkas5');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 1000) {
                    alert(
                      "Ukuran File terlalu Besar, silahkan unggah dengan ukuran dibawah 1mb");
                } else if (file < 1) {
                    alert(
                      "Ukuran File terlalu Kecil, Silahkan unggah dengan ukurang diatas 1kb");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
        }
    </script>
                                    <input type="file" name="sk_gtk" class="form-control form-control-user" id="berkas5" onchange="return fileValidation5()">
                                </div>
                                <div class="form-group">
                                    <label>Fotocopy SK Pembagian Tugas saat ini</label>
                                    <script>
        function fileValidation6() {
            var fileInput =
                document.getElementById('berkas6');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
/(\.pdf)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Tipe File Tidak sesuai ketentuan !');
                fileInput.value = '';
                return false;
            }
            const fi = document.getElementById('berkas6');
        // Check if any file is selected.
        if (fi.files.length > 0) {
            for (const i = 0; i <= fi.files.length - 1; i++) {
 
                const fsize = fi.files.item(i).size;
                const file = Math.round((fsize / 1024));
                // The size of the file.
                if (file >= 1000) {
                    alert(
                      "Ukuran File terlalu Besar, silahkan unggah dengan ukuran dibawah 1mb");
                } else if (file < 1) {
                    alert(
                      "Ukuran File terlalu Kecil, Silahkan unggah dengan ukurang diatas 1kb");
                } else {
                    document.getElementById('size').innerHTML = '<b>'
                    + file + '</b> KB';
                }
            }
        }
        }
    </script>
                                    <input type="file" name="sk_tugas" class="form-control form-control-user" id="berkas6" onchange="return fileValidation6()">
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