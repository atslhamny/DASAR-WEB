<?php 
if ($_SERVER["REQUEST_METHOD"]) {
    $nama = $_POST["nama"];
    $email = $_POST["email"];

    echo "Nama: " . $nama . "<br>";
    echo "Email: " . $email;
}
?>