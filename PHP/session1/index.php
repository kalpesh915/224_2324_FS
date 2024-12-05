<?php 
    session_start();
   // print_r($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php require_once("cdn.php"); ?>
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-white p-3 text-center">Login Page</h1>

        <?php
            if(isset($_SESSION["msg"])){
                if($_SESSION["msg"]["type"] == "error"){
                    echo "<div class='alert alert-danger alert-dismissible'>
                        <button class='btn-close' data-bs-dismiss='alert'></button>
                        <storng>Error </strong> {$_SESSION['msg']['message']}
                    </div>";

                    unset($_SESSION["msg"]);
                }else if($_SESSION["msg"]["type"] == "success"){
                    echo "<div class='alert alert-success alert-dismissible'>
                        <button class='btn-close' data-bs-dismiss='alert'></button>
                        <storng>Success </strong> {$_SESSION['msg']['message']}
                    </div>";

                    unset($_SESSION["msg"]);
                }
            }
        ?>

        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-floating my-3">
                <input type="email" name="email" id="email" placeholder="Enter Email Address" class="form-control" required>
                <label for="email" class="form-lable">Enter Email Address</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" name="password" id="password" placeholder="Enter Email Password" class="form-control" required>
                <label for="password" class="form-lable">Enter Email Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST["loginProcess"])){
        $email = $_POST["email"];
        $password = $_POST["password"];

        if($email == "admin@project.com" && $password == "admin"){
            $_SESSION["validuser"] = $email;
            header("location:home.php");
        }else{
            $_SESSION["msg"] = ["type"=> "error", "message"=>"Invalid Username or Password"];
            header("location:index.php");
        }
    }
?>