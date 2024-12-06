<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <label for="file1">Select File for Upload</label>
        <input type="file" name="file1" id="file1" required>
        <input type="submit" value="Send Data" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    // receive file from HTML Form
    if(isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];
        print_r($file1);
    }
?>