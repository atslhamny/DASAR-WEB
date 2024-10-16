<?php
if (isset($_FILES["myFile"])) {
    $targetdir = "uploads/";
    $targetfile = $targetdir . basename($_FILES["myFile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxSize = 3*1024*1024;

    // Logging untuk memeriksa file yang diterima di server
    error_log("File diterima: " . $_FILES["myFile"]["name"]);

    if (in_array($fileType, $allowedExtensions) && $_FILES["myFile"]["size"] <= $maxSize) {
        if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah";
        } else {
            echo "Gagal mengunggah file.";
        }
    } else {
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
} else {
    echo "Tidak ada file yang diunggah.";
}
