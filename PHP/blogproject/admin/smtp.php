<?php
  require_once("commons/session.php");
  require_once("classes/SMTP.class.php");

  $result = $smtp->getAllSMTPInfo();
  extract($result->fetch_assoc());
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
  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">
    <div class="d-flex align-items-center justify-content-between">
      <a href="home" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">My Blogs</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

    <?php require_once("commons/topbar.php"); ?>

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
   <?php  require_once("commons/sidebar.php"); ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Configure SMTP</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
      <?php // require_once("commons/data.php"); ?>
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Customers Card -->
            <div class="col-xxl-12 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title"><span></span></h5>
                  <?php
                    if(isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                  ?>
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="my-3">
                            <label class="form0-label" for="smtphostname">Enter SMTP Hostname</label>
                            <input type="text" name="smtphostname" id="smtphostname" required class="form-control" value="<?= $smtphostname; ?>">
                        </div>
                        <div class="my-3">
                            <label class="form0-label" for="smtpusername">Enter SMTP Username</label>
                            <input type="text" name="smtpusername" id="smtpusername" required class="form-control" value="<?= $smtpusername; ?>">
                        </div>
                        <div class="my-3">
                            <label class="form0-label" for="smtppassword">Enter SMTP Password</label>
                            <div class="input-group">
                            <input type="password" name="smtppassword" id="smtppassword" required class="form-control" value="<?= $smtppassword; ?>">
                            <input type="button" value="Show" id="passbtn" class="btn btn-primary">
                            </div>
                        </div>
                        <div class="my-3">
                            <label class="form0-label" for="smtpsecure">Enter SMTP Secure</label>
                            <input type="text" name="smtpsecure" id="smtpsecure" required class="form-control" value="<?= $smtpsecure; ?>">
                        </div>
                        <div class="my-3">
                            <label class="form0-label" for="smtpport">Enter SMTP Port</label>
                            <input type="number" name="smtpport" id="smtpport" required class="form-control" value="<?= $smtpport; ?>">
                        </div>
                        <div class="my-3">
                            <label class="form0-label" for="otptime">Enter OTP Time</label>
                            <input type="number" name="otptime" id="otptime" required class="form-control" value="<?= $otptime; ?>">
                        </div>

                        <div class="my-3">
                            <input type="submit" value="Update SMTP" class="btn btn-primary" name="updateProcess">
                            <input type="reset" value="Reset" class="btn btn-danger">
                        </div>
                    </form>
                </div>
              </div>
            </div><!-- End Customers Card -->
          </div>
        </div><!-- End Left side columns -->
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
   <?php require_once("commons/footer.php"); ?>
 <!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/chart.js/chart.umd.js"></script>
  <script src="assets/vendor/echarts/echarts.min.js"></script>
  <script src="assets/vendor/quill/quill.js"></script>
  <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
  <script src="assets/vendor/tinymce/tinymce.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/jquery/jquery-3.7.1.js"></script>
  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<script>
    $(document).ready(function(){
        $("#passbtn").click(function(){
            if($("#smtppassword").attr("type") == "password"){
                $("#smtppassword").attr("type", "text");
                $(this).removeClass("btn-primary").addClass("btn-danger").val("Hide");
            }else{
                $("#smtppassword").attr("type", "password");
                $(this).removeClass("btn-danger").addClass("btn-primary").val("Show");
            }
        });
    });
</script>

<?php
    if(isset($_POST["updateProcess"])){

        $smtphostname = $smtp->filterData($_POST["smtphostname"]);
        $smtpusername = $smtp->filterData($_POST["smtpusername"]);
        $smtppassword = $smtp->filterData($_POST["smtppassword"]);
        $smtpsecure = $smtp->filterData($_POST["smtpsecure"]);
        $smtpport = $smtp->filterData($_POST["smtpport"]);
        $otptime = $smtp->filterData($_POST["otptime"]);

        $smtp->updateSMTPInfo($smtphostname, $smtpusername, $smtppassword, $smtpsecure, $smtpport, $otptime);


        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : SMTP Configuration Updated in Database
        </div>";
    
        header("location:smtp");
    }
?>