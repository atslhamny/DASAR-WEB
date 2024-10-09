<?php 
// $umur;

// if (isset($umur) && $umur >= 18) {
//     echo "Anda sudah dewasa.";
// }else{
//     echo "Anda Belum Dewasa atau variable 'umur' tida ditemukan.";
// }

$data = array("nama" => "Atsilah", "Usia" => 19);

if (isset($data["nama"])) {
    echo "Nama: " . $data["nama"];
}else{
    echo "Variable 'nama' tidak ditemukan dalam array";
}
?>