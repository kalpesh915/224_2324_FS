<?php
session_start();
ob_start();
require_once("classes/Forgotpassword.class.php");
date_default_timezone_set("Asia/Kolkata");
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include library files 
require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';
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
                                        <h5 class="card-title text-center pb-0 fs-4">Forgot Account Password</h5>
                                        <p class="text-center small">Enter your Email Address to Recover Password</p>
                                    </div>

                                    <form class="row g-3" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">

                                                <input type="email" name="email" class="form-control" id="yourUsername" required>
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>


                                        <div class="col-12">
                                            <button class="btn btn-primary w-100" type="submit" name="forgotProcess">GET OTP</button>
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
// Code for Login
if (isset($_POST["forgotProcess"])) {

    $email = $forgotPassword->filterData($_POST["email"]);

    if ($forgotPassword->checkUserExist($email)) {
        $otp = rand(99999, 999999);
        $_SESSION["resetemail"] = $email;

        $smtpResult = $forgotPassword->readSMTPInfo();
        extract($smtpResult->fetch_assoc());

        $content = "<hr>Your Password Reset OTP is <br> <h1>$otp</h1>
        <p>Valid for Only $otptime Minutes. </p><hr>";
        //echo $content;

        $mail = new PHPMailer();
        $mail->isSMTP();
        $mail->SMTPAuth = true;
        $mail->Host = "$smtphostname";
        $mail->Username = "$smtpusername";
        $mail->Password = "$smtppassword";
        $mail->SMTPSecure = "$smtpsecure";
        $mail->Port = "$smtpport";

        $mail->setFrom("$smtpusername", "Password Reset OTP");
        $mail->isHTML(true);

        $mail->addAddress($_SESSION["resetemail"]);
        //$mail->addAddress("hetmanani177@gmail.com");
        $mail->Subject = "Password Reset OTP";
        $mail->Body = "$content";

        if ($mail->send()) {
            $currentTime = time();
            $expiryTime = strtotime("+$otptime minute", $currentTime);
            $forgotPassword->addOTPEntry($_SESSION["resetemail"], $otp, date("Y-m-d H:i:s",$currentTime), date("Y-m-d H:i:s",$expiryTime));

            $forgotPassword->logWriter($_SESSION["resetemail"], "Password reset otp $otp Generated and Send to Your Registered Email Address");

            header("location:enterotp");

            //echo "Send";
        } else {
            //echo "Error while sending email : ".$mail->ErrorInfo;
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible fade show' role='alert'><strong>Error : </strong> Unable to send OTP on $resetemail Try after Some time or Contact Admin. <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
            <span aria-hidden='true'>&times;</span></button></div>";
            header("location:forgotpassword");

            ///echo "Not Sent";
        }
    } else {

        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
    <button class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Error</strong> : $email is Not Registered user with US
    </div>";

        //header("location:forgotpassword");
    }
}
?>