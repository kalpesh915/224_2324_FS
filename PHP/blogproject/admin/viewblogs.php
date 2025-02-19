<?php
require_once("commons/session.php");
require_once("classes/Blogs.class.php");

if(isset($_GET["status"])){
    $id = $_GET["id"];
    $status = $_GET["status"];

    $blogs->updateBlogStatus($id, $status);
    header("location:viewblogs");
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
    <?php require_once("commons/sidebar.php"); ?>
    <!-- End Sidebar-->

    <main id="main" class="main">

        <div class="pagetitle">
            <h1>View / Manage Blogs</h1>
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
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Blog Title</th>
                                                <th>Blog Date</th>
                                                <th>Category</th>
                                                <th>Image</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                            $result = $blogs->getAllBlogs();

                                            while($row = $result->fetch_assoc()){

                                                if($row["status"] == 1){
                                                    $statusbtn = "<a href='viewblogs?id=$row[id]&status=0' class='btn btn-danger'>Disable</a>";
                                                }else{
                                                    $statusbtn = "<a href='viewblogs?id=$row[id]&status=1' class='btn btn-success'>Enable</a>";
                                                }

                                                echo "<tr>
                                                    <td>$row[blogtitle]</td>
                                                    <td>$row[created_at]</td>
                                                    <td>$row[categoryname]</td>
                                                    <td><img src='$row[blogimagepath]' style='width:100px;'></td>
                                                    <td>$statusbtn</td>
                                                    <td><a href='editblog?id=$row[id]' class='btn btn-primary'><i class='bi bi-pencil'></i><a></td>
                                                </tr>";
                                            }
                                           ?>

                                        </tbody>
                                    </table>
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