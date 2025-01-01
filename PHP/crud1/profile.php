<?php
require_once("session.php");
require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once("cdn.php"); ?>
</head>

<body>
    <?php
    require_once("menu.php");
    ?>

    <div class="container-fluid">
        <h1 class="bg-primary text-white p-5">Welcome <?= $username; ?>,</h1>
        <?php
        $sqlQuery = "select * from users where email = '$username'";
        $result = $conn->query($sqlQuery);

        while ($row = $result->fetch_assoc()) {
            //print_r($row);
            // convert all array elements to variable
            extract($row);
        }
        ?>
        <div class="row">
            <div class="col-md-4">
                <img src="<?= $photopath; ?>" class="w-75 d-block mx-auto rounded">
            </div>
            <div class="col-md-8">
                <?php
                    if(isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                ?>
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <div class="my-2 form-floating">
                        <input type="text" name="fname" id="fname" required class="form-control" placeholder="Enter First Name" value="<?= $fname; ?>">
                        <label class="form-label" for="fname">Enter First Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="lname" id="lname" required class="form-control" placeholder="Enter Last Name" value="<?= $lname; ?>">
                        <label class="form-label" for="lname">Enter Last Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="city" id="city" required class="form-control" placeholder="Enter City Name" value="<?= $city; ?>">
                        <label class="form-label" for="city">Enter City Name</label>
                    </div>
                    <div class="my-2 form-floating">
                        <select name="gender" id="gender" class="form-select" required>
                            <option></option>
                            <option value="male" <?= $gender == "male" ? "selected" : "" ?>>Male</option>
                            <option value="female" <?= $gender == "female" ? "selected" : "" ?>>Female</option>
                        </select>
                        <label for="gender" class="form-label">Select Gender</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="text" name="phone" id="phone" required class="form-control" placeholder="Enter Phone Number" value="<?= $phone; ?>">
                        <label class="form-label" for="phone">Enter Phone Number</label>
                    </div>
                    <div class="my-2 form-floating">
                        <input type="file" name="profilephoto" id="profilephoto" class="form-control" placeholder="Select Profile Photo">
                        <label class="form-label" for="profilephoto">Select Profile Photo</label>
                    </div>
                    <div class="my-2">
                        <input type="submit" value="Update Profile" class="btn btn-primary" name="updateProcess">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>

<?php
// update Profile
if (isset($_POST["updateProcess"])) {
    $fname = $_POST["fname"];
    $lname = $_POST["lname"];
    $gender = $_POST["gender"];
    $city = $_POST["city"];
    $phone = $_POST["phone"];
    $profilephoto = $_FILES["profilephoto"];

    // check photo is selected or not
    if ($profilephoto["name"] != "") {
        // array of allowed types
        $validTypes = ["image/jpg", "image/jpeg"];
        // get type of current image
        $type = $profilephoto["type"];
        // check type in validTypes Array
        if (in_array($type, $validTypes)) {
            $source = $profilephoto["tmp_name"];
            $name = $profilephoto["name"];
            $date = date("dmYHisa");
            $random = rand(9999, 99999);
            // destination for upload image
            $destination = "userimages/$date $random $email $name";
            // upload photo
            move_uploaded_file($source, $destination);

            // delete old photo
            unlink($photopath);

            $sqlQuery = "update users set photopath = '$destination' where email = '$username'";
            $conn->query($sqlQuery);
        } else {
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Error : </strong> Must Select .JPG or .JPEG Images Only.
                </div>";
        }
    }

    $sqlQuery = "update users set fname = '$fname', lname = '$lname', gender = '$gender', city = '$city', phone = '$phone' where email = '$username'";
    $conn->query($sqlQuery);

    header("location:profile.php");
}
?>