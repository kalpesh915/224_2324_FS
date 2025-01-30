<?php
require_once("commons/session.php");
require_once("classes/Services.class.php");

if(isset($_GET["id"])){
    $id = $_GET["id"];
    $result = $services->getOneService($id);
    if($result->num_rows > 0){
        extract($result->fetch_assoc());
    }else{
        header("location:services");    
    }
}else{
    header("location:services");
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
            <h1>Edit Services</h1>
        </div><!-- End Page Title -->

        <section class="section dashboard">
            <div class="row">
                <?php // require_once("commons/data.php"); 
                ?>
                <!-- Left side columns -->
                <div class="col-lg-12">
                    <div class="row">
                        <!-- Customers Card -->
                        <div class="col-xxl-4 col-xl-12">

                            <div class="card info-card customers-card">



                                <div class="card-body">
                                    <h5 class="card-title"> <span></span></h5>
                                    <div class="text-center display-1">
                                        <i class="bi bi-<?= $serviceicon; ?>"></i>
                                    </div>
                                    <?php
                                        if(isset($_SESSION["msg"])){
                                            echo $_SESSION["msg"];
                                            unset($_SESSION["msg"]);
                                        }
                                    ?>
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?id=$id"; ?>" method="post">
                                        <div class="my-3">
                                            <label class="form-label" for="servicetitle">Enter Service Title</label>
                                            <input type="text" name="servicetitle" id="servicetitle" class="form-control" required value="<?= $servicetitle; ?>">
                                        </div>
                                        <div class="my-3">
                                            <label class="form-label" for="servicedesc">Enter Service Description</label>
                                            <textarea name="servicedesc" id="servicedesc" class="form-control" required><?= $servicedesc; ?></textarea>
                                        </div>
                                        <div class="my-3">
                                            <label class="form-label" for="serviceicon">Enter Service Icon</label> | <a href="https://icons.getbootstrap.com/" target="_blank">Find Icons Here</a>
                                            <input type="text" name="serviceicon" id="serviceicon" class="form-control" required value="<?= $serviceicon; ?>">
                                        </div>
                                        <div class="my-3">
                                            <input type="submit" value="Update Service" class="btn btn-primary" name="updateProcess">
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
        $servicetitle = $services->filterData($_POST["servicetitle"]);
        $servicedesc = $services->filterData($_POST["servicedesc"]);
        $serviceicon = $services->filterData($_POST["serviceicon"]);

        $services->updateService($id, $servicetitle, $servicedesc, $serviceicon);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : $servicetitle Service Updated
        </div>";

        header("location:editservice?id=$id");
    }
?>