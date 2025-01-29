<?php
require_once("commons/session.php");
require_once("classes/FAQ.class.php");

if(isset($_GET["status"])){
    $id = $_GET["id"];
    $status = $_GET["status"];

    $faq->changeFAQStatus($id, $status);
    header("location:faq");
}

if(isset($_GET["delete"])){
    $id = $_GET["id"];
    
    $faq->deleteFAQ($id);
    header("location:faq");
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
            <h1>Add / Update FAQ</h1>
            <button class="btn btn-primary" type="button" data-bs-toggle="modal" data-bs-target="#addquestion">Add</button>
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
                                    <!-- Table with stripped rows -->
                                    <table class="table datatable">
                                        <thead>
                                            <tr>
                                                <th>Question</th>
                                                <th>Answer</th>
                                                <th>Status</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                           <?php
                                            $result = $faq->getAllFAQ();

                                            while($row = $result->fetch_assoc()){
                                                if($row["status"] == 1){
                                                    $statusbtn = "<a href='faq?id=$row[id]&status=0' class='btn btn-danger'>Disable</a>";
                                                }else{
                                                    $statusbtn = "<a href='faq?id=$row[id]&status=1' class='btn btn-success'>Enable</a>";
                                                }

                                                $answer = substr($row["answer"], 0, 40)."...";

                                                echo "<tr>
                                                    <td>$row[question]</td>
                                                    <td title='$row[answer]'>$answer</td>
                                                    <td>$statusbtn</td>
                                                    <td>
                                                        <button type='button' class='btn btn-danger' onclick='confirmDelete($row[id])'><i class='bi bi-trash'></i></button>
                                                        <a href='editfaq?id=$row[id]' class='btn btn-primary'>
                                                        <i class='bi bi-pencil'></i>
                                                        </a>
                                                    </td>
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

<!-- Add Question Modal -->
<div class="modal fade" id="addquestion" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="staticBackdropLabel">Add New FAQ</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="my-3">
                        <label for="question" class="form-label">Enter Question</label>
                        <input type="text" name="question" id="question" class="form-control" required autofocus>
                    </div>
                    <div class="my-3">
                        <label for="answer" class="form-label">Enter Answer</label>
                        <textarea name="answer" id="answer" class="form-control"></textarea>
                    </div>
                    <div class="my-3">
                        <input type="submit" value="Add New FAQ" class="btn btn-primary" name="addProcess">
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
        $question = $faq->filterData($_POST["question"]);
        $answer = $faq->filterData($_POST["answer"]);

        $faq->addNewFAQ($question, $answer);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : $question FAQ Added in Database
        </div>";
        $faq->logWriter($loginuser, "New FAQ $question Added");
        header("location:faq");
    }
?>

<script>
    function confirmDelete(id){
        if(confirm("Are you sure to delete this FAQ ?")){
            window.location.assign("faq?delete=1&id="+id);
        }
    }
</script>