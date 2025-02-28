<?php
session_start();
ob_start();

require_once("classes/Client.class.php");

date_default_timezone_set("Asia/Kolkata");
// Import PHPMailer classes into the global namespace 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

// Include library files 
require './admin/PHPMailer/Exception.php';
require './admin/PHPMailer/PHPMailer.php';
require './admin/PHPMailer/SMTP.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php require_once("commons/title.php"); ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WP8DKDSP');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="index-page">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP8DKDSP"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">My Blogs</h1>
            </a>

            <?php require_once("commons/forgotmenu.php"); ?>
        </div>
    </header>



    <main class="main">
        <div class="card mb-3">

            <div class="card-body">

                <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Enter OTP</h5>
                    <p class="text-center small">Enter OTP Received in <b><?= $_SESSION["resetemail"]; ?></b> <br>Email Address to Recover Password</p>
                </div>

                <form class="row g-3" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="col-6 offset-lg-3">
                        <label for="otp" class="form-label">OTP</label>
                        <div class="input-group has-validation">

                            <input type="text" name="otp" class="form-control" id="otp" minlength="6" maxlength="6" required>

                        </div>
                    </div>


                    <div class="col-6 offset-lg-3">
                        <button class="btn btn-primary w-100" type="submit" name="otpProcess">Verify OTP</button>
                    </div>
                    <div class="col-12">
                        <?php
                        if (isset($_SESSION["msg"])) {
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                        ?>
                    </div>
                  
                </form>

            </div>
        </div>
    </main>

    <?php
    require_once("commons/footer.php");
    ?>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>


<?php
if (isset($_POST["otpProcess"])) {
    $otp = $_POST["otp"];

    $status = $client->verifyOTP($_SESSION["resetemail"], $otp);

    if ($status == 1) {
        header("location:resetpassword");
    } else if ($status == 2) {
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Error</strong> : OTP Expired Please Request for New one.
            </div>";
        header("location:enterotp");
    } else if ($status == 0) {
        $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Error</strong> : Invalid OTP
            </div>";
        header("location:enterotp");
    }
}
?>