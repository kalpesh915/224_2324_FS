<?php
  require_once("commons/session.php");
  require_once("classes/Social.class.php");

  $result = $social->getAllSocialMediaLinks();
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
      <h1>Social Media Links</h1>
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
                  <h5 class="card-title">Title <span></span></h5>
                <?php
                    if(isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                ?>

                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="my-3">
                        <label for="facebook">Enter Facebook Link</label>
                        <input type="url" name="facebook" id="facebook" class="form-control" value="<?= $facebook; ?>">
                    </div>

                    <div class="my-3">
                        <label for="instagram">Enter Instagram Link</label>
                        <input type="url" name="instagram" id="instagram" class="form-control" value="<?= $instagram; ?>">
                    </div>

                    <div class="my-3">
                        <label for="linkedin">Enter Linkedin Link</label>
                        <input type="url" name="linkedin" id="linkedin" class="form-control" value="<?= $linkedin; ?>">
                    </div>

                    <div class="my-3">
                        <label for="youtube">Enter Youtube Link</label>
                        <input type="url" name="youtube" id="youtube" class="form-control" value="<?= $youtube; ?>">
                    </div>

                    <div class="my-3">
                        <label for="snapchat">Enter Snapchat Link</label>
                        <input type="url" name="snapchat" id="snapchat" class="form-control" value="<?= $snapchat; ?>">
                    </div>

                    <div class="my-3">
                        <label for="telegram">Enter Telegram Link</label>
                        <input type="url" name="telegram" id="telegram" class="form-control" value="<?= $telegram; ?>">
                    </div>

                    <div class="my-3">
                        <label for="whatsapp">Enter Whatsapp Link</label>
                        <input type="url" name="whatsapp" id="whatsapp" class="form-control" value="<?= $whatsapp; ?>">
                    </div>

                    <div class="my-3">
                        <label for="twitter">Enter Twitter Link</label>
                        <input type="url" name="twitter" id="twitter" class="form-control" value="<?= $twitter; ?>">
                    </div>

                    <div class="my-3">
                        <input type="submit" value="Update Social Media Links" class="btn btn-primary" name="updateProcess">
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
        $facebook = $social->filterData($_POST["facebook"]);
        $instagram = $social->filterData($_POST["instagram"]);
        $linkedin = $social->filterData($_POST["linkedin"]);
        $youtube = $social->filterData($_POST["youtube"]);
        $snapchat = $social->filterData($_POST["snapchat"]);
        $telegram = $social->filterData($_POST["telegram"]);
        $whatsapp = $social->filterData($_POST["whatsapp"]);
        $twitter = $social->filterData($_POST["twitter"]);

        $social->updateSocialMediaLinks($facebook, $instagram, $linkedin, $youtube, $snapchat, $telegram, $whatsapp, $twitter);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : Social Media Links are Updated
        </div>";

        header("location:social");
    }
?>