<?php
require_once("commons/session.php");
require_once("classes/Slider.class.php");

if (isset($_GET["id"])) {
    $id = $slider->filterData($_GET["id"]);
    $result = $slider->getOneSlider($id);

    if ($result->num_rows > 0) {
        extract($result->fetch_assoc());
    } else {
        header("location:slider");
    }
} else {
    header("location:slider");
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
            <h1>Edit Slider</h1>
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
                                    <?php
                                    if (isset($_SESSION["msg"])) {
                                        echo $_SESSION["msg"];
                                        unset($_SESSION["msg"]);
                                    }
                                    ?>
                                    <div class="text-center">
                                        <img src="<?= $photopath; ?>" class="w-50">
                                    </div>

                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]) . "?id=$id"; ?>" method="post" enctype="multipart/form-data">
                                        <div class="my-2 form-floating">
                                            <input type="text" name="slidertitle" id="slidertitle" class="form-control" required placeholder="Enter Slider Title" value="<?= $slidertitle; ?>">
                                            <label class="form-label" for="slidertitle">Enter Slider Title</label>
                                        </div>

                                        <div class="my-2 form-floating">
                                            <input type="text" name="description" id="description" class="form-control" required placeholder="Enter Slider Description" value="<?= $description; ?>">
                                            <label class="form-label" for="description">Enter Slider Description</label>
                                        </div>

                                       
                                        <div class="my-2 form-floating">
                                            <input type="file" name="sliderphoto" id="sliderphoto" class="form-control" placeholder="Enter Slider Photo" accept=".jpg, .jpeg">
                                            <label class="form-label" for="sliderphoto">Enter Slider Photo</label>
                                        </div>

                                        <div class="my-2">
                                            <input type="submit" value="Update Slider" class="btn btn-primary" name="updateProcess">
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
if (isset($_POST["updateProcess"])) {
    $slidertitle = $slider->filterData($_POST["slidertitle"]);
    $description = $slider->filterData($_POST["description"]);
    
    $sliderphoto = $_FILES["sliderphoto"];
    $validtypes = ["image/jpg", "image/jpeg"];

    $destination = null;

    if ($sliderphoto["name"] != "") {
        if (in_array($sliderphoto["type"], $validtypes)) {
            $slidername = $sliderphoto["name"];
            $date = date("dmYhisa");
            $random = rand(9999, 99999);

            $source = $sliderphoto["tmp_name"];
            $destination = "sliderimages/$date $random $slidername";

            move_uploaded_file($source, $destination);
        } else {
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Error</strong> : Must Select Valid File
            </div>";
        }
    }
    $slider->updateSlider($id, $slidertitle, $description, $destination);
    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
    <button class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Success</strong> : $slidertitle Slider Updated in Database.
    </div>";

    header("location:editslider?id=$id");
}
?>