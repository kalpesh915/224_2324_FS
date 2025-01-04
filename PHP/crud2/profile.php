<?php
require_once("commons/session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php require_once("commons/cdn.php"); ?>
</head>

<body>
    <?php
    require_once("commons/menu.php");
    ?>

    <div class="container-fluid">
        <h1 class="bg-primary text-white p-5">Welcome <?= $username; ?>,</h1>
        <?php
        require_once("classes/Users.class.php");
        $result = $users->getProfile($username);

        while ($row = $result->fetch_assoc()) {
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
    $fname = $users->filterData($_POST["fname"]);
    $lname = $users->filterData($_POST["lname"]);
    $gender = $users->filterData($_POST["gender"]);
    $city = $users->filterData($_POST["city"]);
    $phone = $users->filterData($_POST["phone"]);
    $profilephoto = $_FILES["profilephoto"];
    $destination = null;

    // check photo is selected or not
    if ($profilephoto["name"] != "") {
        $validTypes = ["image/jpg", "image/jpeg"];
        $type = $profilephoto["type"];
        if (in_array($type, $validTypes)) {
            $source = $profilephoto["tmp_name"];
            $name = $profilephoto["name"];
            $date = date("dmYHisa");
            $random = rand(9999, 99999);
            $destination = "userimages/$date $random $email $name";
            move_uploaded_file($source, $destination);
            unlink($photopath);
        } else {
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Error : </strong> Must Select .JPG or .JPEG Images Only.
                </div>";
        }
    }

    $users->updateProfile($fname, $lname, $city, $gender, $phone, $destination, $username);
    $users->logWriter($username, "Profile Updated");
    header("location:profile.php");
}
?>