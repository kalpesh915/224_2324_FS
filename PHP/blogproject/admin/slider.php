<?php
    require_once("commons/session.php");
    require_once("classes/Slider.class.php");

    if(isset($_GET["status"])){
        $id = $slider->filterData($_GET["id"]);
        $status = $slider->filterData($_GET["status"]);

        $slider->changeSliderStatus($id, $status);

        header("location:slider");
    }

    if(isset($_GET["delete"])){
        $id = $slider->filterData($_GET["id"]);

        $slider->deleteSlider($id);

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
            <div class="d-flex justify-content-between">
                <h1>Add / Manage Slider</h1>
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addteam">Add</button>
            </div>
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

                                    <hr>

                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Designation</th>
                                                <th>Photo</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $result = $slider->getAllSliders();

                                                while($row = $result->fetch_assoc()){
                                                    if($row["status"] == 1){
                                                        $statusBtn = "<a href='slider?id=$row[id]&status=0' class='btn btn-danger'>Disable</a>";
                                                    }else{
                                                        $statusBtn = "<a href='slider?id=$row[id]&status=1' class='btn btn-success'>Enable</a>";
                                                    }

                                                    echo "<tr>
                                                        <td>$row[slidertitle]</td>
                                                        <td>$row[description]</td>
                                                        <td><img src='$row[photopath]' style='width:100px;'></td>
                                                        <td>$statusBtn</td>
                                                        <td><button class='btn btn-danger' onclick='confirmDelete($row[id])'><i class='bi bi-trash'></i></button>
                                                        <a href='editslider?id=$row[id]' class='btn btn-primary'><i class='bi bi-pencil'></i></a>
                                                        </td>
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

<!-- Add Team Modal -->
<div class="modal fade" id="addteam" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add Slider Image</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <div class="my-2 form-floating">
                        <input type="text" name="slidertitle" id="slidertitle" class="form-control" required placeholder="Enter Slider Title">
                        <label class="form-label" for="slidertitle">Enter Slider Title</label>
                    </div>

                    <div class="my-2 form-floating">
                        <input type="text" name="description" id="description" class="form-control" required placeholder="Enter Slider Description">
                        <label class="form-label" for="description">Enter Slider Description</label>
                    </div>


                    <div class="my-2 form-floating">
                        <input type="file" name="sliderphoto" id="sliderphoto" class="form-control" placeholder="Enter Slider Photo" required accept=".jpg, .jpeg">
                        <label class="form-label" for="sliderphoto">Enter Slider Photo</label>
                    </div>

                    <div class="my-2">
                        <input type="submit" value="Add New Slider" class="btn btn-primary" name="addProcess">
                        <input type="reset" value="Reset" class="btn btn-danger">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<?php
    if(isset($_POST["addProcess"])){
        $slidertitle = $slider->filterData($_POST["slidertitle"]);
        $description = $slider->filterData($_POST["description"]);
        
        $sliderphoto = $_FILES["sliderphoto"];

        $validtypes = ["image/jpg", "image/jpeg"];
        
        if(in_array($sliderphoto["type"], $validtypes)){
            $slidername = $sliderphoto["name"];
            $date = date("dmYhisa");
            $random = rand(9999, 99999);

            $source = $sliderphoto["tmp_name"];
            $destination = "sliderimages/$date $random $slidername";

            $slider->addNewSlider($slidertitle, $description, $destination);

            move_uploaded_file($source, $destination);

            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Success</strong> : $slidername Slider added in Database
            </div>";
        
            $slider->logWriter($loginuser, "$slidername Slider Added in Database");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Error</strong> : Must Select Valid File
            </div>";        
        }

        header("location:slider");
    }
?>

<script>
    function confirmDelete(id){
        if(confirm("Are you sure to delete this Slider ??")){
            window. location.assign("slider?delete=1&id="+id);
        }
    }
</script>