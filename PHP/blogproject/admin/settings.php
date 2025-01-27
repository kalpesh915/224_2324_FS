<?php
  require_once("commons/session.php");
  require_once("classes/Settings.class.php");

  $result = $settings->getSettings();
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
      <h1>Change Settings</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
      <?php // require_once("commons/data.php"); ?>
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Customers Card -->
            <div class="col-xxl-4 col-xl-12">
              <div class="card info-card customers-card">
                <div class="card-body">
                  <h5 class="card-title"><span></span></h5>
                    <?php
                        if(isset($_SESSION["msg"])){
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                    ?>

                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <div class="my-3">
                            <label for="comment" class="form-label">Select Comment Are : </label>
                            <select class="form-select" name="comment" id="comment" required>
                                <option value="1" <?= $comment == 1 ? "selected" : ""; ?>>Enabled</option>
                                <option value="0" <?= $comment == 0 ? "selected" : "";?>>Disabled</option>
                            </select>
                        </div>

                        <div class="my-3">
                            <label for="googletranslate" class="form-label">Select Google Translate Are : </label>
                            <select class="form-select" name="googletranslate" id="googletranslate" required>
                                <option value="1" <?= $googletranslate == 1 ? "selected" : "";?> >Enabled</option>
                                <option value="0" <?= $googletranslate == 0 ? "selected" : "";?> >Disabled</option>
                            </select>
                        </div>

                        <div class="my-3">
                            <input type="submit" value="Update Settings" class="btn btn-primary" name="updateProcess">
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

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
    if(isset($_POST["updateProcess"])){
        $comment = $settings->filterData($_POST["comment"]);
        $googletranslate = $settings->filterData($_POST["googletranslate"]);

        $settings->setSettings($comment, $googletranslate);
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : Settings are Updated
        </div>";
        $settings->logWriter($loginuser, "Set Settings to Comment $comment and Translate to $googletranslate");
        header("location:settings");
    }
?>