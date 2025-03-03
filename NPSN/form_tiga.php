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
                                        <h1 class="h4 text-gray-900 mb-4">Upload Dokumen Pendukung</h1>
                                    </div>
                                    <form class="user" method='POST' action='aksi_tiga.php' enctype='multipart/form-data'>
                                <div class="form-group"><?php session_start();?>
                                    <input type="text" name="id_sekolah" value="<?php echo $_SESSION['id_sekolah']; ?>" class="form-control form-control-user" readonly>
                                </div>
                                <h5>Upload Dokumen (Max 1 MB dalam bentuk PDF)</h5>
                                <div class="form-group">
                                    <label>Surat Permohonan (Untuk Kepala Dinas dari Yayasan)</label>
                                        <div id="imagePreview1"></div>
    <script>
        function fileValidation3() {
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
                                    <input type="file" name="permohonan" class="form-control form-control-user" id="berkas1" onchange="return fileValidation3()">
                                </div>
                                <div class="form-group">
                                    <label>SK Pendirian</label>
                                    <div id="imagePreview2"></div>
    <script>
        function fileValidation4() {
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
                                    <input type="file" name="sk_pendiri" class="form-control form-control-user" id="berkas2" onchange="return fileValidation4()">
                                </div>
                                <div class="form-group">
                                    <label>SK Operasional</label>
                                    <div id="imagePreview3"></div>
    <script>
        function fileValidation5() {
            var fileInput =
                document.getElementById('berkas3');
             
            var filePath = fileInput.value;
         
            // Allowing file type
            var allowedExtensions =
/(\.pdf)$/i;
             
            if (!allowedExtensions.exec(filePath)) {
                alert('Tipe File Tidak sesuai ketentuan !');
                fileInput.value = '';
                return false;
            }
            const fi = document.getElementById('berkas3');
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
                                    <input type="file" name="sk_operasional" class="form-control form-control-user" id="berkas3" onchange="return fileValidation5()">
                                </div>
                                <h5>Upload Foto (Max 1 MB dalam bentuk JPG</h5>
                                <div class="form-group">
                                    <label>Foto Papan Nama Sekolah</label>
                                    <div id="imagePreview4"></div>
    <script>
        function fileValidation() {
            var fileInput2 =
                document.getElementById('file');
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
                            'imagePreview4').innerHTML =
                            '<img width="100px" src="' + e.target.result
                            + '"/>';
                    };
                     
                    reader.readAsDataURL(fileInput2.files[0]);
                }
            }
            const fi = document.getElementById('file');
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
                                    <input type="file" name="foto_papan" class="form-control form-control-user" id="file" onchange="return fileValidation()">
                                </div>
                                <div class="form-group">
                                    <label>Foto Tempat Depan Sekolah</label>
                                    <div id="imagePreview5"></div>
    <script>
        function fileValidation2() {
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
                            + '"/>';
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
                                    <input type="file" name="foto_tempat" class="form-control form-control-user" id="file2" onchange="return fileValidation2()">
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