<?php
session_start();
if (!empty($_SESSION['username'])) {
    require '../config/koneksi.php';
    require '../fungsi/pesan_kilat.php';
    require '../fungsi/anti_injection.php';

    // Check if `jabatan` is being deleted
    if (!empty($_GET['jabatan'])) {
        $id = antiinjection($koneksi, $_GET['id']);
        $query = "DELETE FROM jabatan WHERE id = '$id'";

        if (mysqli_query($koneksi, $query)) {
            pesan('success', "Jabatan Telah Terhapus.");
        } else {
            pesan('danger', "Jabatan Tidak Terhapus Karena: " . mysqli_error($koneksi));
        }

        header("Location: ../index.php?page=jabatan");
        exit();
    }
    // Check if `anggota` is being deleted
    elseif (!empty($_GET['anggota'])) {
        $id = antiinjection($koneksi, $_GET['id']);

        // First delete from `anggota` table
        $query2 = "DELETE FROM anggota WHERE user_id = '$id'";
        if (mysqli_query($koneksi, $query2)) {

            // If successful, delete from `user` table
            $query2 = "DELETE FROM user WHERE id = '$id'";
            if (mysqli_query($koneksi, $query2)) { // Corrected `$query` instead of `$query2`
                pesan('success', "Anggota Telah Terhapus.");
            } else {
                pesan('warning', "Data Anggota Terhapus Tetapi Data Login Tidak Terhapus Karena: " . mysqli_error($koneksi));
            }
        } else {
            pesan('danger', "Gagal Menghapus Data Anggota Karena: " . mysqli_error($koneksi));
        }

        header("Location: ../index.php?page=anggota");
        exit();
    }
}
