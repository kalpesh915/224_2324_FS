<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File Upload</title>
</head>
<body>
    <?php
        if(isset($_SESSION["msg"])){
            echo "<hr>".$_SESSION["msg"]."<hr>";
            unset($_SESSION["msg"]);
        }
    ?>
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

        // get file details from form
        $file1 = $_FILES["file1"];
        //print_r($file1);

        // store filename in $filename variable
        $filename = $file1["name"];
        // store tmp file copy path to $source variable
        $source = $file1["tmp_name"];
        // create destination path for store file 
        $destination = "uploads/$filename";

        // move_uplaoded_file(which file, where to store)
        if(move_uploaded_file($source, $destination)){
            $_SESSION["msg"] = "File Uploaded Successfully";
        }else{
            $_SESSION["msg"] = "Error while Uplaoding File on Server";
        }

        header("location:".$_SERVER["PHP_SELF"]);
    }
?>