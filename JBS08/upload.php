<?php 
if (isset($_POST["submit"])) {
    $targetdir = "uploads/"; //direktori tujuan untuk simpan file
    $targetfile = $targetdir . basename($_FILES["myFile"]["name"]);
    $fileType = strtolower(pathinfo($targetfile, PATHINFO_EXTENSION));

    $allowedExtensions = array("txt", "pdf", "doc", "docx");
    $maxSize = 3*1024*1024;

    if(in_array($fileType, $allowedExtensions) && $_FILES["myFile"]["size"]<=$maxSize){
        if (move_uploaded_file($_FILES["myFile"]["tmp_name"], $targetfile)) {
            echo "File berhasil diunggah";
            // echo "<img src='$targetfile' width='200' style='height: auto;' alt='Thumbnail'>";
        } else {
            echo "gagal mengunggah file.";
        }
    }else{
        echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
    }
}
?>