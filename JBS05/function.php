<?php 
function perkenalan($nama, $salam="Assalamualaikum"){
    echo $salam. ", ";
    echo "Perkenalkan, nama saya ".$nama." <br>";
    echo "Senang berkenalan dengan Anda <br>";
}

perkenalan("Atsilah", "Hallo");

echo "<hr>";
$saya = "Atsilah";
$ucapanSalam = "Selamat sore";

perkenalan($saya);

?>