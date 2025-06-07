<?php
require 'con.php';

if (isset($_FILES['myfile']['name'])) {
    $fileName = $_FILES['myfile']['name'];
    $fileTmp = $_FILES['myfile']['tmp_name'];
    $uploadDir = 'uploads/';
    $uploadPath = $uploadDir . basename($fileName);

    if (move_uploaded_file($fileTmp, $uploadPath)) {
        $fileSize = filesize($uploadPath);
        $sql = "INSERT INTO `file` (name, size, down) VALUES ('$fileName', $fileSize, 0)";
        if (mysqli_query($con, $sql)) {
            echo "File uploaded and database updated.";
        } else {
            echo "Failed to update database.";
        }
    } else {
        echo "Failed to upload file.";
    }
}
?>
