<?php
  require_once("commons/session.php");
  require_once("classes/AdminUsers.class.php");

  if(isset($_GET["id"])){
    $id = $_GET["id"];
    $result = $adminusers->getOneMesaage($id);

    if($result->num_rows > 0){
        extract($result->fetch_assoc());
        $adminusers->markMessageasRead($id);
    }else{
        header("location:unreadmessages");    
    }
  }else{
    header("location:unreadmessages");
  }

  if(isset($_GET["delete"])){
    $id = $_GET["id"];
    $adminusers->deleteMessage($id);
    header("location:allmessages");
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
      <h1>Read Message</h1>
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
                    <div class="table-responsive">
                        <table class="table table-hover table-striped">
                            <tr>
                                <th>Message Date / Time</th>
                                <td><?= $messagedate; ?></td>
                            </tr>

                            <tr>
                                <th>Sender Email</th>
                                <td><?= $senderemail; ?></td>
                            </tr>

                            <tr>
                                <th>Subject</th>
                                <td><?= $subject; ?></td>
                            </tr>

                            <tr>
                                <th>Content</th>
                                <td><?= $content; ?></td>
                            </tr>
                        </table>

                        <div class="d-grid">
                            <button class="btn btn-danger" type="button" onclick="confirmDelete(<?= $id; ?>)">Delete Message</button>
                        </div>
                        
                    </div>
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

<script>
    function confirmDelete(id){
        if(confirm("Are you sure to delete this Message ?")){
            window.location.assign("readmessage?delete=1&id="+id);
        }
    }
</script>