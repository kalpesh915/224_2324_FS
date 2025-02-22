<?php
    require_once("commons/session.php");
    require_once("classes/Comments.class.php");

    if(isset($_GET["id"])){
        $id = $comments->filterData($_GET["id"]);
       
        $result = $comments->getOneComment($id);
        
        if($result->num_rows > 0){
            $comments->changeCommentStatus($id);
            extract($result->fetch_assoc());
        }else{
            header("location:pendingcomment");
        }
    }else{
        header("location:pendingcomment");
    }

    if(isset($_POST["approvebtn"])){
        $comments->changeCommentAllowStatus($id, 1);
    }else if(isset($_POST["rejectbtn"])){
        $comments->changeCommentAllowStatus($id, 2);
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
      <h1>Read Comment</h1>
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
                  <h5 class="card-title"> <span></span></h5>
                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?id=$id"; ?>" method="post">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Blog Title</th>
                                <td><?= $blogtitle; ?></td>
                            </tr>

                            <tr>
                                <th>Comment Date</th>
                                <td><?= $commentdate; ?></td>
                            </tr>

                            <tr>
                                <th>User ID</th>
                                <td><?= $userid; ?></td>
                            </tr>

                            <tr>
                                <th>Comment</th>
                                <td><?= $commenttext; ?></td>
                            </tr>

                            <tr>
                                <th colspan="2">
                                    <input type="submit" value="Approve" name="approvebtn" class="btn btn-primary">
                                    <input type="submit" value="Reject" name="rejectbtn" class="btn btn-danger">
                                </th>
                            </tr>
                        </table>

                        
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