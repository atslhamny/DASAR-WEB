<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Input Aman</title>
</head>

<body>
    <h2>Input Aman</h2>
    <form action="html_aman.php" method="post">
        <label for="input">Masukkan data :</label><br>
        <input type="text" id="input" name="input"><br><br>

        <label for="input">Masukkan email :</label><br>
        <input type="text" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $input = $_POST['input'];

        //sanitasi input untuk mencegah XSS
        $input = htmlspecialchars($input, ENT_QUOTES, 'UTF-8');

        //validasi sederhana : pastikan input tidak kosong
        if (!empty($input)) {
            echo "<p>Data yang dimasukkan : " . $input . "</p>";
        } else {
            echo "<p>Input tidak boleh kosong!</p>";
        }

        $email = $_POST['email'];
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $email = $_POST['email'];
            $email = htmlspecialchars($email, ENT_QUOTES, 'UTF-8');
            echo "<h2>Hasil Input yang Aman:</h2>";
            echo "<p>" . $email . "</p>";
        } else {
            echo "<h2>Silakan masukkan teks melalui form.</h2>";
        }
    }
