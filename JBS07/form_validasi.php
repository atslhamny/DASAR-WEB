<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input dengan Validasi</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>

<body>
    <h1>Form Input dengan Validasi dan AJAX</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span>
        <br><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span>
        <br><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" style="color: red;"></span>
        <br><br>

        <input type="submit" value="Submit">
        <span id="form-message" style="color: green;"></span>
    </form>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah pengiriman form secara default
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;

                // Reset error messages
                $("#nama-error").text("");
                $("#email-error").text("");
                $("#password-error").text("");
                $("#form-message").text("");

                // Validasi nama
                if (nama === "") {
                    $("#nama-error").text("Nama harus diisi.");
                    valid = false;
                }

                // Validasi email
                if (email === "") {
                    $("#email-error").text("Email harus diisi.");
                    valid = false;
                }

                // Validasi password minimal 8 karakter
                if (password.length < 8) {
                    $("#password-error").text("Password harus minimal 8 karakter.");
                    valid = false;
                }

                if (valid) {
                    // Menggunakan AJAX untuk mengirim form tanpa refresh
                    $.ajax({
                        url: 'proses_validasi.php',
                        type: 'POST',
                        data: {
                            nama: nama,
                            email: email,
                            password: password
                        },
                        success: function(response) {
                            $("#form-message").text("Form berhasil dikirim!");
                        },
                        error: function(xhr, status, error) {
                            $("#form-message").text("Terjadi kesalahan: " + error);
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>