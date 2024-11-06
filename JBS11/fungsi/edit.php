<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Memastikan data dikirim dengan metode POST
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $id = antiinjection($koneksi, $_POST['id']);
        $jabatan = antiinjection($koneksi, $_POST['jabatan']);
        $keterangan = antiinjection($koneksi, $_POST['keterangan']);

        // Query untuk mengupdate data jabatan
        $query = "UPDATE jabatan SET jabatan = '$jabatan', keterangan = '$keterangan' WHERE id = '$id'";

        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Diubah.");
        } else {
            pesan('danger', "Mengubah Jabatan Gagal Karena: " . mysqli_error($koneksi));
        }

        // Redirect setelah update berhasil
        header("Location: ../index.php?page=jabatan");
        exit; // Menghentikan eksekusi setelah redirect
    }
}
