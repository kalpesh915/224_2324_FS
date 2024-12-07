<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_SESSION["msg"])){
            echo "<hr>".$_SESSION["msg"]."<hr>";
            unset($_SESSION["msg"]);
        }
    ?>

    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post" enctype="multipart/form-data">
        <label for="file1">Select File for Upload :</label>
        <input type="file" name="file1" id="file1" required accept=".jpg">
        <input type="submit" value="Uplaod File" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    // check for submit button clicked or not
    if(isset($_POST["uploadProcess"])){
        // get file from submited form
        $file1 = $_FILES["file1"];
        //print_r($file1);

        $validTypes = ["image/jpg", "image/jpeg"];

        // check valid file type
        if(in_array($file1["type"], $validTypes)){
            $source = $file1["tmp_name"];
            $random = rand(9999, 99999);
            $date = date("dmYHisa");
            $filename = $file1["name"];

            $destination = "uploads/$random $date $filename";

            if(move_uploaded_file($source, $destination)){
                $_SESSION["msg"] = "$filename file uploaded on server";
            }else{
                $_SESSION["msg"] = "Error while uploading file on server";
            }
        }else{
            $_SESSION["msg"] = "Invalid File Selected";
        }

        header("location:".$_SERVER["PHP_SELF"]);
    }
?>