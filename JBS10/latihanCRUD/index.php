<?php
include 'auth.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="<?= $_SESSION['csrf_token'] ?>">
    <title>Data Anggota</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css">
    <!-- DataTables -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css">
    <style>
        .form-group {
            margin-bottom: 1rem;
        }

        .btn-hapus {
            background-color: #dc3545;
            color: white;
        }

        .btn-edit {
            background-color: #28a745;
            color: white;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-dark bg-primary">
        <span class="navbar-brand mb-0 h1">CRUD Dengan Ajax</span>
    </nav>

    <!-- Main Content -->
    <div class="container mt-4">
        <h2 class="text-center mb-4">Data Anggota</h2>

        <!-- Form Input -->
        <form method="post" id="form-data">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="hidden" name="id" id="id">
                <input type="text" name="nama" id="nama" class="form-control">
                <p class="text-danger" id="err_nama"></p>
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <div>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="jenkel1" name="jenis_kelamin" value="L" class="form-check-input">
                        <label class="form-check-label" for="jenkel1">Laki-laki</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" id="jenkel2" name="jenis_kelamin" value="P" class="form-check-input">
                        <label class="form-check-label" for="jenkel2">Perempuan</label>
                    </div>
                </div>
                <p class="text-danger" id="err_jenis_kelamin"></p>
            </div>

            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" id="alamat" class="form-control" rows="3"></textarea>
                <p class="text-danger" id="err_alamat"></p>
            </div>

            <div class="form-group">
                <label for="no_telp">No Telepon</label>
                <input type="number" name="no_telp" id="no_telp" class="form-control">
                <p class="text-danger" id="err_no_telp"></p>
            </div>

            <button type="button" id="simpan" class="btn btn-primary">
                <i class="fa fa-save"></i> Simpan
            </button>
        </form>

        <!-- Table Data -->
        <div class="mt-4">
            <div class="data"></div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="text-center py-3">
        <p class="mb-0">&copy; <?php echo date('Y'); ?> Copyright:
            <a href="https://google.com/">Desain Dan Pemrograman Web</a>
        </p>
    </footer>

    <!-- Scripts -->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.bundle.min.js"></script>

    <script>
        $(document).ready(function() {
            // Set CSRF token for all AJAX requests
            $.ajaxSetup({
                headers: {
                    'Csrf-Token': $('meta[name="csrf-token"]').attr('content')
                }
            });

            // Load initial data
            $('.data').load('data.php');

            // Form submission and validation
            $("#simpan").click(function() {
                var data = $('#form-data').serialize();
                var jenkel1 = document.getElementById("jenkel1").value;
                var jenkel2 = document.getElementById("jenkel2").value;
                var nama = document.getElementById("nama").value;
                var alamat = document.getElementById("alamat").value;
                var no_telp = document.getElementById("no_telp").value;

                if (nama == "") {
                    document.getElementById("err_nama").innerHTML = "Nama Harus Diisi";
                } else {
                    document.getElementById("err_nama").innerHTML = "";
                }

                if (alamat == "") {
                    document.getElementById("err_alamat").innerHTML = "Alamat Harus Diisi";
                } else {
                    document.getElementById("err_alamat").innerHTML = "";
                }

                if (document.getElementById("jenkel1").checked == false && document.getElementById("jenkel2").checked == false) {
                    document.getElementById("err_jenis_kelamin").innerHTML = "Jenis Kelamin Harus Dipilih";
                } else {
                    document.getElementById("err_jenis_kelamin").innerHTML = "";
                }

                if (no_telp == "") {
                    document.getElementById("err_no_telp").innerHTML = "No Telepon Harus Diisi";
                } else {
                    document.getElementById("err_no_telp").innerHTML = "";
                }

                if (nama != "" && alamat != "" && (document.getElementById("jenkel1").checked == true || document.getElementById("jenkel2").checked == true) && no_telp != "") {
                    $.ajax({
                        type: 'POST',
                        url: 'form-action.php',
                        data: data,
                        success: function() {
                            $('.data').load('data.php');
                            document.getElementById("id").value = "";
                            document.getElementById("form-data").reset();
                        },
                        error: function(response) {
                            console.log(response.responseText);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>