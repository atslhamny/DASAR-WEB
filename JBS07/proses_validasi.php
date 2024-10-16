<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama = htmlspecialchars($_POST['nama']);
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);

    $errors = [];

    if (empty($nama)) {
        $errors[] = 'Nama harus diisi.';
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] .= 'Format email tidak valid';
    } else {
    }
    if (strlen(trim($password)) < 8) {
        $errors[] = 'Password harus minimal 8 karakter.';
    }

    if ($errors) {
        echo nl2br(implode('<br>', $errors));
    } else {
        echo "Data berhasil dikirim: Nama = $nama, Email = $email";
    }
} 
?>