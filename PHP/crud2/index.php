<?php
    session_start();
    ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <?php require_once("commons/cdn.php"); ?>
</head>
<body>
    <div class="container-fluid">
        <h1 class="bg-primary text-center text-white p-5">Login Form</h1>
        <?php
            if(isset($_SESSION["msg"])){
                echo $_SESSION["msg"];
                unset($_SESSION["msg"]);
            }
        ?>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="my-3 form-floating">
                <input type="email" name="email" id="email" required class="form-control" placeholder="Enter Email Address" autofocus>
                <label class="form-label" for="email">Enter Email Address</label>
            </div>

            <div class="my-3 form-floating">
                <input type="password" name="password" id="password" required class="form-control" placeholder="Enter Email Password">
                <label class="form-label" for="password">Enter Email Password</label>
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
        require_once("classes/Users.class.php");

        $email = $users->filterData($_POST["email"]);
        $password = $users->filterData($_POST["password"]);

        if($users->validateUser($email, $password)){
            $_SESSION["validateuser"] = $email;
            $users->logWriter($email, "Login Successfully");
            header("location:home.php");
        }else{
            $users->logWriter($email, "Invalid Login Attempt");
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn =-close' data-bs-dismiss='alert'></button>
                <b>Error : </b> Invalid Username or Password
            </div>";
            header("location:index.php");
        }
    }
?>