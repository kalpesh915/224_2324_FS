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
    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" enctype="multipart/form-data">
        <label for="file1">Select File For Upload</label>
        <input type="file" name="file1" id="file1" required accept=".jpg">
        <input type="submit" value="Upload File" name="uploadProcess">
        <input type="reset" value="Reset">
    </form>
</body>
</html>

<?php 
    if(isset($_POST["uploadProcess"])){
        $file1 = $_FILES["file1"];
        //print_r($file1);

        $validTypes = ["image/jpeg", "image/jpg"];
        $type = $file1["type"];

        if(in_array($type, $validTypes)){
            $mb = 2;
            $bytes = $mb * 1024 * 1024;

            if($file1["size"] < $bytes){
            
                $source = $file1["tmp_name"];
                $filename = $file1["name"];

                $random = rand(9999, 99999);
                $date = date("dmYhisa");

                $destination = "uploads/$date $random $filename";

                // check for file name exist or not
                if(!file_exists($destination)){
                    if(move_uploaded_file($source, $destination)){
                        $_SESSION["msg"] = "$filename File Uploaded Successfully";
                    }else{
                        $_SESSION["msg"] = "Error while uploading file on server";
                    }
                }else{
                    $_SESSION["msg"] = "$filename file already exist on server";
                }   
                
            }else{
                $_SESSION["msg"] = "Must Select file less then $mb Mb.";
            }
        }else{
            $_SESSION["msg"] = "Please select valid file for Uplaod";
        }

        header("location:".$_SERVER["PHP_SELF"]);
    }
?>