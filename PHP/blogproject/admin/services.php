<?php
require_once("commons/session.php");
require_once("classes/Services.class.php");

// status code
if(isset($_GET["status"])){
    $id = $_GET["id"];
    $status = $_GET["status"];

    $services->updateServiceStatus($id, $status);
    header("location:services");
}

// delete service
if(isset($_GET["delete"])){
    $id = $_GET["id"];
    $services->deleteService($id);
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

        <div class="pagetitle d-flex justify-content-between">
            <h1>Services</h1>
            <button class="btn btn-primary" data-bs-toggle="collapse" data-bs-target="#addService">Add</button>
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
                                    <h5 class="card-title"><span></span></h5>
                                    <?php
                                        if(isset($_SESSION["msg"])){
                                            echo $_SESSION["msg"];
                                            unset($_SESSION["msg"]);
                                        }
                                    ?>
                                    <div class="collapse fade" id="addService">
                                        <h3>Add New Service</h3>
                                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                                            <div class="my-3">
                                                <label class="form-label" for="servicetitle">Enter Service Title</label>
                                                <input type="text" name="servicetitle" id="servicetitle" class="form-control" required>
                                            </div>
                                            <div class="my-3">
                                                <label class="form-label" for="servicedesc">Enter Service Description</label>
                                                <textarea name="servicedesc" id="servicedesc" class="form-control" required></textarea>
                                            </div>
                                            <div class="my-3">
                                                <label class="form-label" for="serviceicon">Enter Service Icon</label> | <a href="https://icons.getbootstrap.com/" target="_blank">Find Icons Here</a>
                                                <input type="text" name="serviceicon" id="serviceicon" class="form-control" required>
                                            </div>
                                            <div class="my-3">
                                                <input type="submit" value="Add New Service" class="btn btn-primary" name="addProcess">
                                                <input type="reset" value="Reset" class="btn btn-danger">
                                            </div>
                                        </form>
                                    </div>

                                    <hr>
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Title</th>
                                                <th>Description</th>
                                                <th>Icon</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $result = $services->getAllServices();

                                                while($row = $result->fetch_assoc()){
                                                    if($row["status"] == 1){
                                                        $statusbtn = "<a href='services?status=0&id=$row[id]' class='btn btn-danger'>Disable</a>";
                                                    }else{
                                                        $statusbtn = "<a href='services?status=1&id=$row[id]' class='btn btn-success'>Enable</a>";
                                                    }

                                                    echo "<tr>
                                                        <td>$row[servicetitle]</td>
                                                        <td>$row[servicedesc]</td>
                                                        <td><i class='bi bi-$row[serviceicon]'></i></td>
                                                        <td>$statusbtn</td>
                                                        <td>
                                                            <button class='btn btn-danger' onclick='deleteService($row[id])'><i class='bi bi-trash'></i></button>

                                                            <a href='editservice?id=$row[id]' class='btn btn-primary'><i class='bi bi-pencil'></i></a>
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

<?php
    if(isset($_POST["addProcess"])){
        $servicetitle = $services->filterData($_POST["servicetitle"]);
        $servicedesc = $services->filterData($_POST["servicedesc"]);
        $serviceicon = $services->filterData($_POST["serviceicon"]);

        $services->addNewService($servicetitle, $servicedesc, $serviceicon);
        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : $servicetitle Service Added.
        </div>";


        $services->logWriter($loginuser, "$servicetitle Service Added in Database");
        header("location:services");
    }
?>

<script>
    function deleteService(id){
        if(confirm("Are you sure to delete this Service ?")){
            window.location.assign("services?delete=1&id="+id);
        }
    }
</script>