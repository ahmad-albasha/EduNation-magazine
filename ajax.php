<?php
session_start();
include "display.php";
$sql = "SELECT * FROM `file`"; 
$result = mysqli_query($con, $sql);

$files = []; 
if ($result && mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        $files[] = $row;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="file.css">
  <title>Document</title>
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- مكتبة jQuery -->
</head>
<body>
  <h1>Your Files:</h1><hr>

  <form id="uploadForm" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="myfile" id="fileInput">
    <input type="submit" value="Upload File" name="save">
  </form>

  <br><br>
  <div id="fileTableContainer">
    <table border="2">
      <thead>
        <th>ID</th><th>FILE NAME</th><th>SIZE (KB)</th><th>DOWNLOADS</th><th>ACTION</th><th>DELETE</th>
      </thead>
      <tbody>
      <?php if (!empty($files)) { ?>
    <?php foreach ($files as $f) { ?>
        <tr id="row-<?php echo $f['id']; ?>">
            <td><?php echo $f['id']; ?></td>
            <td><?php echo $f['name']; ?></td>
            <td><?php echo $f['size'] / 1000; ?></td>
            <td><?php echo $f['down']; ?></td>
            <td><a href="#" class="download" data-id="<?php echo $f['id']; ?>">Download</a></td>
            <td><a href="#" class="delete" data-id="<?php echo $f['id']; ?>">Delete</a></td>
        </tr>
    <?php } ?>
<?php } else { ?>
    <tr>
        <td colspan="6">No files found.</td>
    </tr>
<?php } ?>
      </tbody>
    </table>
  </div>
  <a href="commant.php" class="" >Home</a>


  <script>
$(document).ready(function () {
    function refreshTable() {
        $.ajax({
            url: "ajax.php", 
            type: "GET",
            success: function (response) {
                $("#fileTableContainer").html(response);
            },
            error: function () {
                alert("Failed to refresh table.");
            }
        });
    }

    $("#uploadForm").submit(function (e) {
        e.preventDefault(); 

        let formData = new FormData(this); 

        $.ajax({
            url: "display.php", 
            type: "POST",
            data: formData,
            processData: false, 
            contentType: false, 
            success: function (response) {
                alert("File uploaded successfully.");
                refreshTable(); 
            },
            error: function () {
                alert("Failed to upload file.");
            }
        });
    });

    $(document).on("click", ".download", function (e) {
        e.preventDefault();

        let fileId = $(this).data("id"); 

        window.location.href = "download.php?id=" + fileId;
        $.ajax({
          success: function (response) {

        refreshTable(); }

      })}); 

    $(document).on("click", ".delete", function (e) {
        e.preventDefault();

        let fileId = $(this).data("id"); 

        if (confirm("Are you sure you want to delete this file?")) {
            $.ajax({
                url: "delete.php", 
                type: "POST",
                data: { file_id: fileId },
                success: function (response) {
                    alert("File deleted successfully.");
                    refreshTable(); 
                },
                error: function () {
                    alert("Failed to delete file.");
                }
            });
        }
    });
});

  </script>
</body>
</html>
