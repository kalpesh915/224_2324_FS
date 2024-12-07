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
       print_r($file1);
    }
?>