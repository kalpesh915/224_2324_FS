<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Page</title>
    <?php
    require_once("cdn.php");
    ?>
</head>

<body>
    <div class="container-fluid">
        <h1 class="p-5 text-white bg-primary text-center">Registration Form</h1>
        <?php
        if (isset($_SESSION["msg"])) {
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
        ?>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating my-3">
                        <input type="text" name="fname" id="fname" class="form-control" placeholder="Enter First Name" required>
                        <label for="fname" class="form-label">Enter First Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating my-3">
                        <input type="text" name="lname" id="lname" class="form-control" placeholder="Enter Last Name" required>
                        <label for="lname" class="form-label">Enter Last Name</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating my-3">
                        <input type="text" name="city" id="city" class="form-control" placeholder="Enter City Name" required>
                        <label for="city" class="form-label">Enter City Name</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating my-3">
                        <select name="gender" id="gender" class="form-select" required>
                            <option></option>
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                        <label for="gender" class="form-label">Select Gender</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating my-3">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Enter Phone Number" required>
                        <label for="phone" class="form-label">Enter Phone Number</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating my-3">
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                        <label for="email" class="form-label">Enter Email Address</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating my-3">
                        <input type="password" name="password" id="password" class="form-control" placeholder="Enter Email Password" required>
                        <label for="password" class="form-label">Enter Email Password</label>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-floating my-3">
                        <input type="password" name="cpassword" id="cpassword" class="form-control" placeholder="Enter Confirm Password" required>
                        <label for="cpassword" class="form-label">Enter Confirm Password</label>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="form-floating my-3">
                        <input type="file" name="profilephoto" id="profilephoto" class="form-control" placeholder="Select Profile Photo" required accept=".jpg">
                        <label for="profilephoto" class="form-label">Select Profile Photo</label>
                    </div>
                </div>
                <div class="col-md-6  d-flex justify-content-center align-items-center">
                    <div class="my-3">
                        <input type="submit" value="Create Account" class="btn btn-primary" name="registerProcess">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </div>
            </div>
        </form>
        <div class="text-center p-5">
            <a href="index.php" class="text-decoration-none">Already Have Account.</a>
        </div>
    </div>
</body>

</html>

<?php
    if(isset($_POST["registerProcess"])){
        // add connection file for database conneciton
        require_once("connection.php");

        // get all data from html Form
        $fname = $_POST["fname"];
        $lname = $_POST["lname"];
        $city = $_POST["city"];
        $gender = $_POST["gender"];
        $phone = $_POST["phone"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $cpassword = $_POST["cpassword"];
        $profilephoto = $_FILES["profilephoto"];


        // check for password and confirm password
        if($password === $cpassword){
            // photo upload code

            // array of allowed types
            $validTypes = ["image/jpg", "image/jpeg"];

            // get type of current image
            $type = $profilephoto["type"];

            // check type in validTypes Array
            if(in_array($type, $validTypes)){
                $source = $profilephoto["tmp_name"];
                $name = $profilephoto["name"];
                $date = date("dmYHisa");
                $random = rand(9999, 99999);
                // destination for upload image
                $destination = "userimages/$date $random $email $name";

                // check for email id is available to register or not
                $sqlQuery = "select * from users where email = '$email'";
                $result = $conn->query($sqlQuery);

                if($result->num_rows > 0){
                    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <strong>Error : </strong> $email is already registred with us.
                    </div>";
                }else{
                    // password encryt
                    $password = password_hash($password, PASSWORD_DEFAULT);
                    // create query
                    $sqlQuery = "insert into users (fname, lname, city, gender, phone, email, password, photopath) values ('$fname', '$lname', '$city', '$gender', '$phone', '$email', '$password', '$destination')";
                    $conn->query($sqlQuery);

                    // function for upload image
                    move_uploaded_file($source, $destination);
                
                    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
                    <button class='btn-close' data-bs-dismiss='alert'></button>
                    <strong>Success : </strong> $email Account Created
                    </div>";    
                }
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Error : </strong> Must Select .JPG or .JPEG Images Only.
                </div>";    
            }
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Error : </strong> Confirm Password Does not Match.
            </div>";
        }

        header("location:register.php");
    }
?>