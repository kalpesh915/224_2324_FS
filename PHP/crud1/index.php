<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <?php
    require_once("cdn.php");
    ?>
</head>

<body>
    <div class="container-fluid">
        <h1 class="p-5 text-white bg-primary text-center">Login Form</h1>
        <?php
        if (isset($_SESSION["msg"])) {
            echo $_SESSION["msg"];
            unset($_SESSION["msg"]);
        }
        ?>
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="form-floating my-3">
                <input type="email" name="email" id="email" class="form-control" placeholder="Enter Email Address" required>
                <label for="email" class="form-label">Enter Email Address</label>
            </div>
            <div class="form-floating my-3">
                <input type="password" name="password" id="password" class="form-control" placeholder="Enter Email Password" required>
                <label for="password" class="form-label">Enter Email Password</label>
            </div>
            <div class="my-3">
                <input type="submit" value="Login" class="btn btn-primary" name="loginProcess">
                <input type="reset" value="Reset" class="btn btn-danger">
            </div>
        </form>
        <div class="text-center p-5">
            <a href="register.php" class="text-decoration-none">Create an Account.</a>
        </div>
    </div>
</body>

</html>

<?php
if (isset($_POST["loginProcess"])) {

    require_once("connection.php");

    $email = $_POST["email"];
    $password = $_POST["password"];

    $sqlQuery = "select * from users where email = '$email'";
    $result = $conn->query($sqlQuery);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            print_r($row);
            if ($row["deleted"] == 0) {
                if (password_verify($password, $row["password"])) {
                    $_SESSION["loginuser"] = $email;
                    header("location:home.php");
                } else {
                    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                        <button class='btn-close' data-bs-dismiss='alert'></button>
                        <strong>Error : </strong> Invalid Email Password</div>";
                    header("location:index.php");
                }
            }else{
                $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Error : </strong> Account Disabled</div>";
                header("location:index.php");
            }
        }
    } else {
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Error : </strong> Invalid Email Address</div>";
        header("location:index.php");
    }
}
?>