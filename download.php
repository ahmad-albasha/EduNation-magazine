<?php
require 'con.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = intval($_GET['id']);
    $sqlq = "SELECT * FROM `file` WHERE id = $id";

    $resq = mysqli_query($con, $sqlq);

    if ($resq && mysqli_num_rows($resq) > 0) {
        $fileq = mysqli_fetch_assoc($resq);
        $filepath = 'uploads/' . $fileq['name'];

        if (file_exists($filepath)) {
            header('Content-Type: application/octet-stream');
            header('Content-Description: File Transfer');
            header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize($filepath));

            readfile($filepath);

            
            $newcount = $fileq['down'] + 1;
            $updatequery = "UPDATE `file` SET down = $newcount WHERE id = $id";
            $resu = mysqli_query($con, $updatequery);
            if (!$resu) {
                error_log("Failed to update download count: " . mysqli_error($con));
            }

            exit;
        } else {
            echo "File does not exist.";
        }
    } else {
        echo "File not found in the database.";
    }
} else {
    echo "Invalid file ID.";
}

header("Location: ajax.php");
exit;
?>