<?php
session_start();
ob_start();
require_once("classes/Forgotpassword.class.php");
date_default_timezone_set("Asia/Kolkata");

if(!isset($_SESSION["resetemail"])){
    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
    <button class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Error</strong> :  Invalid Attempt to Enter OTP
    </div>";

    header("location:index");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <?php
    require_once("commons/title.php");
    require_once("commons/csslinks.php");
    ?>
</head>

<body>

    <main>
        <div class="container-fluid">

            <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="assets/img/logo.png" alt="">
                                    <span class="d-none d-lg-block">My Blogs</span>
                                </a>
                            </div><!-- End Logo -->

                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="pt-4 pb-2">
                                        <h5 class="card-title text-center pb-0 fs-4">Change Password</h5>
                                        <p class="text-center small">for <b><?= $_SESSION["resetemail"] ;?></b> Email Address </p>
                                    </div>

                                    <form class="row g-3" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                                        <div class="col-12">
                                            <label for="newpassword" class="form-label">Enter New Password</label>
                                            <div class="input-group has-validation">
                                                <input type="password" name="newpassword" class="form-control" id="newpassword" required>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <label for="confirmpassword" class="form-label">Enter Confirm Password</label>
                                            <div class="input-group has-validation">
                                                <input type="password" name="confirmpassword" class="form-control" id="confirmpassword" required>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit" name="changeProcess">Change Password</button>
                                        </div>
                                        <div class="col-12">
                                            <?php
                                            if (isset($_SESSION["msg"])) {
                                                echo $_SESSION["msg"];
                                                unset($_SESSION["msg"]);
                                            }
                                            ?>
                                        </div>
                                        <div class="col-12 text-center">
                                            <p class="small mb-0"><a href="index">Login</a></p>
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main><!-- End #main -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

<?php
    if(isset($_POST["changeProcess"])){
        $newpassword = $forgotPassword->filterData($_POST["newpassword"]);
        $confirmpassword = $forgotPassword->filterData($_POST["confirmpassword"]);
        
        if($newpassword == $confirmpassword){

            $newpassword = password_hash($newpassword, PASSWORD_DEFAULT);
            $forgotPassword->changePassword($_SESSION["resetemail"], $newpassword);

            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Success</strong> : Password Reset Successfully 
            </div>";
            $forgotPassword->logWriter($_SESSION["resetemail"], "Password Reset Successfully ");
            unset($_SESSION["resetemail"]);
            header("location:index");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Error</strong> : Confirm Password does not Match.
            </div>";

            header("location:resetpassword");
        }
        
    }
?>