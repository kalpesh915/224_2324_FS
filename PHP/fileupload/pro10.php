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
        <input type="file" name="file1[]" id="file1" required accept=".jpg" multiple>
        <input type="submit" value="Uplaod File" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php
    // check for submit button clicked or not
    if(isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];
       
        $count = count($file1["name"]);
        $err = 0;
        $success = 0;

        $validTypes = ["image/jpg", "image/jpeg"];

        for($i=0; $i<$count; $i++){
            if(in_array($file1["type"][$i], $validTypes)){
                $source = $file1["tmp_name"][$i];
                $date = date("dmYHisa");
                $random = rand(9999, 99999);
                $filename = $file1["name"][$i];
                $destination = "uploads/$date $random $filename";

                if(move_uploaded_file($source, $destination)){
                    $success++;
                }else{
                    $err++;
                }
            }else{
                $err++;
            }
        }

        $_SESSION["msg"] = "Total $count Files are Selected, $success files are uploaded and $err file are rejected";

        header("location:".$_SERVER["PHP_SELF"]);
    }
?>