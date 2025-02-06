<?php
require_once("commons/session.php");
require_once("classes/Blogs.class.php");

if (isset($_GET["id"])) {
    $id = $_GET["id"];

    $result = $blogs->getOneBlog($id);

    if ($result->num_rows > 0) {
        extract($result->fetch_assoc());
    } else {
        header("location:viewblogs");
    }
} else {
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
            <h1>Edit Blog</h1>
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
                                    <?php
                                    if (isset($_SESSION["msg"])) {
                                        echo $_SESSION["msg"];
                                        unset($_SESSION["msg"]);
                                    }
                                    ?>
                                    <img src="<?= $blogimagepath; ?>" class="img-thumbnail img-fluid w-100 h-50">
                                   
                                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])."?id=$id"; ?>" method="post" enctype="multipart/form-data">
                                        <div class="my-3">
                                            <label for="blogtitle" class="form-label">Enter Blog Title</label>
                                            <input type="text" name="blogtitle" id="blogtitle" required class="form-control" value="<?= $blogtitle; ?>">
                                        </div>

                                        <div class="my-3">
                                            <label for="blogcategory" class="form-label">Select Blog Category</label>
                                            <select required class="form-select" id="blogcategory" name="blogcategory">
                                                <?php
                                                $result = $blogs->getAllCategory();

                                                while ($row = $result->fetch_assoc()) {
                                                    if($row["id"] == $blogcategory){
                                                        echo "<option value='$row[id]' selected>$row[categoryname]</option>";
                                                    }else{
                                                        echo "<option value='$row[id]'>$row[categoryname]</option>";
                                                    }
                                                    
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="my-3">
                                            <label for="blogcontent" class="form-label">Enter Blog Content</label>
                                            <textarea name="blogcontent" id="blogcontent" required class="form-control" rows="10"><?= $blogcontent; ?></textarea>
                                        </div>
                                        <div class="my-3">
                                            <label for="blogimage" class="form-label">Select Blog Image</label>
                                            <input type="file" name="blogimage" id="blogimage"  class="form-control" accept=".jpg,.jpeg">
                                        </div>
                                        <div class="my-3">
                                            <label for="blogcomment" class="form-label">Select Comment on Blog</label>
                                            <select name="blogcomment" id="blogcomment" required class="form-select">
                                                <option value="1" <?= $blogcomment == 1 ? "selected" : "" ?>>Enable</option>
                                                <option value="0" <?= $blogcomment == 0 ? "selected" : "" ?>>Disable</option>
                                            </select>
                                        </div>

                                        <div class="my-3">
                                            <input type="submit" value="Update Blog" class="btn btn-primary" name="updateProcess">
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
        $blogtitle = $blogs->filterData($_POST["blogtitle"]);
        $blogcategory = $blogs->filterData($_POST["blogcategory"]);
        $blogcontent = $blogs->filterData($_POST["blogcontent"]);
        $blogimage = $_FILES["blogimage"];
        $blogcomment = $blogs->filterData($_POST["blogcomment"]);

        $destination = null;

        if($blogimage["name"] != ""){
            $type = $blogimage["type"];
            $validtypes = ["image/jpg", "image/jpeg"];

            if(in_array($type, $validtypes)){
                $date = date("dmYhisa");
                $random = rand(9999, 99999);

                $source = $blogimage["tmp_name"];
                $imagename = $blogimage["name"];
                $destination = "blogimages/$date $random $imagename";

                move_uploaded_file($source, $destination);
            }
        }

        $blogs->updateBlog($id, $blogtitle, $blogcategory, $blogcontent, $destination, $blogcomment);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : $blogtitle Blog Updated in Database
        </div>";

        header("location:editblog?id=$id");
    }
?>