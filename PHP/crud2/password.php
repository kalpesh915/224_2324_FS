<?php
    require_once("commons/session.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Change Password</title>
    <?php
        require_once("commons/cdn.php");
    ?>
</head>
<body>
    <?php
        require_once("commons/menu.php");
    ?>

    <div class="container-fluid">
        <h1 class="bg-primary text-white text-center p-5">Change Password</h1>
        <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
        ?>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="my-2 form-floating">
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Current Password" required>
                <label for="password" class="form-label">Enter Current Password</label>
            </div>
            <div class="my-2 form-floating">
                <input type="password" name="npassword" id="npassword" class="form-control" placeholder="Enter New Password" required>
                <label for="npassword" class="form-label">Enter New Password</label>
            </div>
            <div class="my-2 form-floating">
                <input type="password" name="cnpassword" id="cnpassword" class="form-control" placeholder="Enter Confirm Password" required>
                <label for="cnpassword" class="form-label">Enter Confirm Password</label>
            </div>
            <div class="my-2">
                <input type="submit" name="changeProcess" class="btn btn-primary" value="Change Password">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["changeProcess"])){
        $password = $_POST["password"];
        $npassword = $_POST["npassword"];
        $cnpassword = $_POST["cnpassword"];

        if($npassword === $cnpassword){
            require_once("classes/Users.class.php");

            if($users->validateUser($username, $password)){
                $npassword = password_hash($npassword, PASSWORD_DEFAULT);
                $users->updatePassword($username, $npassword);
                $users->logWriter($username,"Password Updated Successfully");
                $_SESSION["msg"] = $users->createMessage("success", "Password Updated Successfully");
            }else{
                $users->logWriter($username,"Unsuccessfull Password Update Attepmt");
                $_SESSION["msg"] = $users->createMessage("error", "Incorrect Current Password");
            }
        }else{
            $_SESSION["msg"] = $users->createMessage("error", "Confirm Password does Not Match.");
        }
        header("location:password.php");
    }
?>