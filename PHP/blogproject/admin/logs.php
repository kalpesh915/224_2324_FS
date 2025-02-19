<?php
require_once("commons/session.php");
require_once("classes/AdminUsers.class.php");
if(isset($_POST["clearProcess"])){
    $password = $adminusers->filterData($_POST["password"]);
    if($adminusers->adminLogin($loginuser, $password)){
        $adminusers->deleteAllLogs();
        $adminusers->logWriter($loginuser, "Logs Deleted");
    }else{
        $adminusers->logWriter($loginuser, "Invalid Attempt to Delete Logs");
    }
    header("location:logs");
}

    $adminusers->markAllLogstoRead();
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
            <a href="index.html" class="logo d-flex align-items-center">
                <img src="assets/img/logo.png" alt="">
                <span class="d-none d-lg-block">My Blogs</span>
            </a>
            <i class="bi bi-list toggle-sidebar-btn"></i>
        </div><!-- End Logo -->

        <?php require_once("commons/topbar.php"); ?>

    </header><!-- End Header -->

    <!-- ======= Sidebar ======= -->
    <?php require_once("commons/sidebar.php"); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>Activity Logs</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <?php // require_once("commons/data.php"); 
                ?>
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Customers Card -->
                        <div class="col-xxl-12 col-xl-12">

                            <div class="card info-card customers-card">
                                <div class="card-body">
                                    <div class="mt-4 d-flex justify-content-end">
                                        <button class="btn btn-danger" type="button" data-bs-toggle="modal" data-bs-target="#clearlogmodal">Clear Logs</button>
                                    </div>
                                    <!-- Table with stripped rows -->
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Event Time</th>
                                                <th>Message</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                                
                                                $result = $adminusers->getAllLogs();

                                                while($row = $result->fetch_assoc()){
                                                    echo "<tr>
                                                        <td>$row[timestamp]</td>
                                                        <td>$row[logmessage]</td>
                                                    </tr>";
                                                }
                                           ?>

                                        </tbody>
                                    </table>
                                    <!-- End Table with stripped rows -->

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

<!-- Modal -->
<div class="modal fade" id="clearlogmodal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Clear Log Messages</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
            <div class="my-3">
            <input type="password" name="password" id="password" required class="form-control" placeholder="Enter Current Password">
            </div>
            <input type="submit" value="Clear Log Messages" name="clearProcess" class="btn btn-danger">
        </form>                                                
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

