<?php 
// $koneksi =  mysqli_connect("localhost","root","","prakwebdb");

// if (mysqli_connect_errno()) {
//     die("Koneksi database gagal: " . mysqli_connect_errno());
// }

define('HOST', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB1', 'prakwebdb');

// Buat koneksi
$db1 = new mysqli(HOST, USER, PASS, DB1);
?>