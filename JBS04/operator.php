<?php 
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;

echo "Hasil dari Tambah {$a} + {$b} = {$hasilTambah}<br>";
echo "Hasil dari Kurang {$a} - {$b} = {$hasilKurang}<br>";
echo "Hasil dari Kali {$a} x {$b} = {$hasilKali}<br>";
echo "Hasil dari Bagi {$a} : {$b} = {$hasilBagi}<br>";
echo "Hasil dari sisa bagi {$a} % {$b} = {$sisaBagi}<br>";
echo "<br>";
echo "Hasil Sama dari {$a} Sama dengan {$b} = {$hasilSama}"; var_dump($hasilSama); 
echo "<br>";
echo "Hasil Tidak Sama {$a} Tidak Sama dengan {$b} = {$hasilTidakSama}"; var_dump($hasilTidakSama);
echo "<br>";
echo "Hasil Lebih Kecil dari {$a} Lebih Kecil {$b} = {$hasilLebihKecil}"; var_dump($hasilLebihKecil);
echo "<br>";
echo "Hasil Lebih Besar dari {$a} Lebih Besar {$b} = {$hasilLebihBesar}"; var_dump($hasilLebihBesar);
echo "<br>";
echo "Hasil Lebih Kecil Sama dari {$a} Lebih Kecil Sama {$b} = {$hasilLebihKecilSama}"; var_dump($hasilLebihKecilSama);
echo "<br>";
echo "Hasil Lebih Besar Sama dari {$a} Lebih Besar Sama {$b} = {$hasilLebihBesarSama}"; var_dump($hasilLebihBesarSama);
echo "<br>";
echo "<br>";

echo "Hasil And {$a} && {$b} = "; var_dump($hasilAnd);
echo "<br>";
echo "Hasil Or {$a} || {$b} = "; var_dump($hasilOr);
echo "<br>";
echo "Hasil Not A = {$hasilNotA}"; var_dump($hasilNotA);
echo "<br>";
echo "Hasil Not B = {$hasilNotB}"; var_dump($hasilNotB);

echo "<br>";
echo "<br>";
$a += $b;
echo "Hasil dari \$a += \$b adalah: $a<br>";
$a -= $b;
echo "Hasil dari \$a -= \$b adalah: $a<br>";
$a *= $b;
echo "Hasil dari \$a *= \$b adalah: $a<br>";
$a /= $b;
echo "Hasil dari \$a /= \$b adalah: $a<br>";
$a %= $b;
echo "Hasil dari \$a %= \$b adalah: $a<br>";
echo "<br>";

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;
echo "<br>";
echo "Hasil identik dari {$a} === {$b} adalah "; 
var_dump($hasilIdentik);
echo "<br>";
echo "Hasil Tidak identik dari {$a} !== {$b} adalah ";
var_dump($hasilIdentik);

echo "<br>";
echo "<br>";

$total_kursi = 45; 
$kursi_ditempati = 28; 

$kursi_kosong = $total_kursi - $kursi_ditempati;

$persentase_kosong = ($kursi_kosong / $total_kursi) * 100;

echo "Persentase kursi yang masih kosong adalah: $persentase_kosong%";

?>