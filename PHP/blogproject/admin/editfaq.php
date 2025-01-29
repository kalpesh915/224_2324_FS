<?php
  require_once("commons/session.php");
  require_once("classes/FAQ.class.php");

  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $result = $faq->getOneFAQ($id);

    if($result->num_rows > 0){
        extract($result->fetch_assoc());
    }else{
        header("location:faq");    
    }
  }else{
    header("location:faq");
  }

  if(isset($_POST["updateProcess"])){
    $question = $faq->filterData($_POST["question"]);
    $answer = $faq->filterData($_POST["answer"]);

    $faq->updateFAQ($id, $question, $answer);

    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
    <button class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Success</strong> : $question FAQ Updated in Database
    </div>";
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
      <h1>Edit FAQ</h1>
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
                  <h5 class="card-title">Title <span></span></h5>
                  <?php
                    if(isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                  ?>
                  <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?id=$id"; ?>" method="post">
                    <div class="my-3">
                        <label for="question" class="form-label">Enter Question</label>
                        <input type="text" name="question" id="question" class="form-control" required autofocus value="<?= $question; ?>">
                    </div>
                    <div class="my-3">
                        <label for="answer" class="form-label">Enter Answer</label>
                        <textarea name="answer" id="answer" class="form-control"><?= $answer; ?></textarea>
                    </div>
                    <div class="my-3">
                        <input type="submit" value="Update FAQ" class="btn btn-primary" name="updateProcess">
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