<?php
    require_once("commons/session.php");
    require_once("classes/Comments.class.php");
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
    <?php require_once("commons/sidebar.php"); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>All Comments</h1>
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
                                    <h5 class="card-title"><span></span></h5>
                                    <!-- Table with stripped rows -->
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Username</th>
                                                <th>Date</th>
                                                <th>BlogTitle</th>
                                                <th>Comment</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $result = $comments->getAllComments();

                                                while($row = $result->fetch_assoc()){
                                                    $commenttext = substr($row["commenttext"], 0, 40)."...";
                                                    
                                                    if($row["adminstatus"] == 0){
                                                        $adminstatus = "<span class='text-bg-secondary p-2'>Pending</span>";
                                                    }else if($row["adminstatus"] == 1){
                                                        $adminstatus = "<span class='text-bg-success p-2'>Approved</span>";
                                                    }else if($row["adminstatus"] == 2){
                                                        $adminstatus = "<span class='text-bg-danger p-2'>Rejected</span>";
                                                    }
                                                    echo "<tr>
                                                        <td>$row[userid]</td>
                                                        <td>$row[commentdate]</td>
                                                        <td>$row[blogtitle]</td>
                                                        <td title='$row[commenttext]'>$commenttext</td>
                                                        <td>$adminstatus</td>
                                                        <td><a href='viewcomment?id=$row[id]' class='btn btn-primary'>
                                                        <i class='bi bi-eye'></i></a></td>
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