<?php
require 'con.php';

if (isset($_POST['file_id']) && !empty($_POST['file_id'])) {
    $id = intval($_POST['file_id']);
    $sql = "SELECT * FROM `file` WHERE id = $id";
    $result = mysqli_query($con, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $file = mysqli_fetch_assoc($result);
        $filePath = 'uploads/' . $file['name'];

        if (file_exists($filePath)) {
            unlink($filePath); 
        }

        $deleteSql = "DELETE FROM `file` WHERE id = $id";
        if (mysqli_query($con, $deleteSql)) {
            echo "File deleted successfully.";
        } else {
            echo "Failed to delete file from database.";
        }
    } else {
        echo "File not found.";
    }
}
?>
