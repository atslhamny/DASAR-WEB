<?php 
$a = 10;
$b = 5;
$c = $a + 5;
$d = $b + (10 * 5);
$e = $d - $c;

echo "Variable a: {$a} <br>";
echo "Variable b: {$b} <br>";
echo "Variable c: {$c} <br>";
echo "Variable d: {$d} <br>";
echo "Variable e: {$e} <br>";

var_dump($e);

$nilaiMatematika = 5.1;
$nilaiIPA = 6.7;
$nilaiBahasaIndonesia = 9.3;

$rataRata = ($nilaiMatematika + $nilaiIPA + $nilaiBahasaIndonesia);

echo "<br>Matematika: {$nilaiMatematika} <br>";
echo "IPA: {$nilaiIPA} <br>";
echo "Bahasa Indonesia: {$nilaiBahasaIndonesia} <br>";
echo "Rata Rata: {$rataRata} <br>";

var_dump($rataRata);
echo "<br>";

$apakahSiswaLulus = true;
$apakahSiswaTidakLulus = false;

var_dump($apakahSiswaLulus);
echo "<br>";
var_dump($apakahSiswaTidakLulus);

echo "<br>";

$namaDepan = "Atsilah";
$namaBelakang = "Amany";

$namaLengkap = "{$namaDepan} {$namaBelakang}";
$namaLengkap2 = $namaDepan . ' ' . $namaBelakang . '<br>';

echo $namaLengkap;

echo "<br>";
$listMahasiswa = ["Atsilah Amany", "Erika Atthacarya", "Jamiatul Afifah"];
echo $listMahasiswa[0];

?>