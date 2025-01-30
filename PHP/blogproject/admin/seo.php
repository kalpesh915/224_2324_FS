<?php
  require_once("commons/session.php");
  require_once("classes/SEO.class.php");

  $result = $seo->getSEODetails();

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
      <h1>Manage SEO</h1>
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
                  <h5 class="card-title"> <span></span></h5>
                    <?php
                        if(isset($_SESSION["msg"])){
                            echo $_SESSION["msg"];
                            unset($_SESSION["msg"]);
                        }
                    ?>

                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="my-3">
                            <label class="form-label" for="metakeyword">Enter Meta Keyword</label>
                            <textarea id="metakeyword" name="metakeyword" required class="form-control"><?= $metakeyword; ?></textarea>
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="metadescription">Enter Meta Description</label>
                            <textarea id="metadescription" name="metadescription" required class="form-control"><?= $metadescription; ?></textarea>
                        </div>
                        <div class="my-3">
                            <label class="form-label" for="tagid">Enter Tag ID</label>
                            <input type="text" name="tagid" id="tagid" required class="form-control" value="<?= $tagid; ?>">
                        </div>
                        <div class="my-3">
                            <input type="submit" value="Update SEO" class="btn btn-primary" name="updateProcess">
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
        $metakeyword = $seo->filterData($_POST["metakeyword"]);
        $metadescription = $seo->filterData($_POST["metadescription"]);
        $tagid = $seo->filterData($_POST["tagid"]);

        $seo->updateSEODetails($metakeyword, $metadescription, $tagid);
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : SEO Details are updated.
        </div>";
        header("location:seo");
    }
?>