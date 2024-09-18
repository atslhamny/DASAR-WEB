<?php 
$nilaiNumerik = 92;

if ($nilaiNumerik >= 90 && $nilaiNumerik <= 100) {
    echo "Nilai Huruf: A";
}elseif ($nilaiNumerik >= 80 && $nilaiNumerik < 90) {
    echo "Nilai Huruf: B";
} elseif ($nilaiNumerik >= 70 && $nilaiNumerik < 80) {
    echo "Nilai Huruf: C";
} elseif ($nilaiNumerik < 70) {
    echo "Nilai Huruf: D";
}

echo "<br>";
echo "<br>";

$jarakSaatIni = 0;
$jarakTarget = 500;
$peningkatanHarian = 30;
$hari = 0;

while ($jarakSaatIni < $jarakTarget) {
    $jarakSaatIni += $peningkatanHarian;
    $hari++;
}

echo "Atlet tersebut memerlukan $hari hari untuk mencapai jarak 500 kilometer";


echo "<br>";
echo "<br>";

$jumlahLahan = 10;
$tanamanPerlahan = 5;
$buahPerTanaman = 10;
$jumlahBuah = 0;

for ($i=1; $i <= $jumlahLahan ; $i++) { 
    $jumlahBuah += ($tanamanPerlahan * $buahPerTanaman);
}

echo "Jumlah Buat yang akan dipanen adalah: $jumlahBuah";


echo "<br>";
echo "<br>";

$skorUjian = [85, 92, 78, 96, 88];
$totalSkor = 0;

foreach($skorUjian as $skor){
    $totalSkor += $skor;
}
echo "Total skor ujian adalah: $totalSkor";


echo "<br>";
echo "<br>";

$nilaiSiswa = [85, 92, 58, 64, 90, 55, 88, 79, 70, 96];

foreach ($nilaiSiswa as $nilai) {
    if ($nilai < 60) {
        echo "Nilai: $nilai (tidak lulus) <br>";
        continue;
    }
    echo "Nilai: $nilai (Lulus)<br>";
}

echo "<br>";
echo "<br>";

$nilaiSiswa = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilaiSiswa);
array_shift($nilaiSiswa);
array_shift($nilaiSiswa);
array_pop($nilaiSiswa);
array_pop($nilaiSiswa);
$totalNilai = array_sum($nilaiSiswa);
$rataRata = $totalNilai / count($nilaiSiswa);
echo "Total nilai setelah mengabaikan dua nilai tertinggi dan dua nilai terendah: {$totalNilai} <br>";
echo "Rata-rata nilai: " . number_format($rataRata, 2) . "<br>";

echo "<br>";
echo "<br>";
$hargaProduk = 120000;
$diskon = 20;
if ($hargaProduk > 100000) {
    $jumlahDiskon = ($hargaProduk * $diskon) / 100;
    $hargaSetelahDiskon = $hargaProduk - $jumlahDiskon;
    echo "Harga produk: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
    echo "Diskon: {$diskon}%<br>";
    echo "Jumlah diskon: Rp " . number_format($jumlahDiskon, 0, ',', '.') . "<br>";
    echo "Harga yang harus dibayar setelah diskon: Rp " . number_format($hargaSetelahDiskon, 0, ',', '.') . "<br>";
} else {
    echo "Harga produk tidak memenuhi syarat diskon.<br>";
    echo "Harga yang harus dibayar: Rp " . number_format($hargaProduk, 0, ',', '.') . "<br>";
}
echo "<br>";
echo "<br>";

$skorPemain = 550;
$hadiahTambahan = ($skorPemain > 500) ? "IYA" : "TIDAK";
echo "Total skor pemain: {$skorPemain}<br>";
echo "Apakah pemain mendapatkan hadiah tambahan? {$hadiahTambahan}<br>";

echo "<br>";
echo "<br>";

?>