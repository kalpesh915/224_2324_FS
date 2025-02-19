<?php
    require_once("commons/session.php");
    require_once("classes/Team.class.php");

    if(isset($_GET["status"])){
        $id = $team->filterData($_GET["id"]);
        $status = $team->filterData($_GET["status"]);

        $team->changeTeamMemberStatus($id, $status);

        header("location:teams");
    }

    if(isset($_GET["delete"])){
        $id = $team->filterData($_GET["id"]);

        $team->deleteTeamMember($id);

        header("location:teams");
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
                <h1>Add Manage Team Member</h1>
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
                                                $result = $team->getAllTeamMembers();

                                                while($row = $result->fetch_assoc()){
                                                    if($row["status"] == 1){
                                                        $statusBtn = "<a href='teams?id=$row[id]&status=0' class='btn btn-danger'>Disable</a>";
                                                    }else{
                                                        $statusBtn = "<a href='teams?id=$row[id]&status=1' class='btn btn-success'>Enable</a>";
                                                    }

                                                    echo "<tr>
                                                        <td>$row[name]</td>
                                                        <td>$row[designation]</td>
                                                        <td><img src='$row[photopath]' style='width:100px;'></td>
                                                        <td>$statusBtn</td>
                                                        <td><button class='btn btn-danger' onclick='confirmDelete($row[id])'><i class='bi bi-trash'></i></button>
                                                        <a href='editteam?id=$row[id]' class='btn btn-primary'><i class='bi bi-pencil'></i></a>
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
                <h5 class="modal-title" id="staticBackdropLabel">Add New Team Member</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" enctype="multipart/form-data">
                    <div class="my-2 form-floating">
                        <input type="text" name="name" id="name" class="form-control" required placeholder="Enter Team Member Name">
                        <label class="form-label" for="name">Enter Team Member Name</label>
                    </div>

                    <div class="my-2 form-floating">
                        <input type="text" name="designation" id="designation" class="form-control" required placeholder="Enter Team Member Designation">
                        <label class="form-label" for="designation">Enter Team Member Designation</label>
                    </div>

                    <div class="my-2 form-floating">
                        <input type="url" name="twitter" id="twitter" class="form-control" placeholder="Enter Team Member Twitter Link">
                        <label class="form-label" for="twitter">Enter Team Member Twitter Link</label>
                    </div>

                    <div class="my-2 form-floating">
                        <input type="url" name="facebook" id="facebook" class="form-control" placeholder="Enter Team Member Facebook Link">
                        <label class="form-label" for="facebook">Enter Team Member Facebook Link</label>
                    </div>

                    <div class="my-2 form-floating">
                        <input type="url" name="instagram" id="instagram" class="form-control" placeholder="Enter Team Member Instagram Link">
                        <label class="form-label" for="instagram">Enter Team Member Instagram Link</label>
                    </div>

                    <div class="my-2 form-floating">
                        <input type="url" name="linkedin" id="linkedin" class="form-control" placeholder="Enter Team Member Linkedin Link">
                        <label class="form-label" for="linkedin">Enter Team Member Linkedin Link</label>
                    </div>

                    <div class="my-2 form-floating">
                        <input type="file" name="teamphoto" id="teamphoto" class="form-control" placeholder="Enter Team Member Photo" required accept=".jpg, .jpeg">
                        <label class="form-label" for="teamphoto">Enter Team Member Photo</label>
                    </div>

                    <div class="my-2">
                        <input type="submit" value="Create new Member" class="btn btn-primary" name="addProcess">
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
        $name = $team->filterData($_POST["name"]);
        $designation = $team->filterData($_POST["designation"]);
        $twitter = $team->filterData($_POST["twitter"]);
        $instagram = $team->filterData($_POST["instagram"]);
        $facebook = $team->filterData($_POST["facebook"]);  
        $linkedin = $team->filterData($_POST["linkedin"]);

        $teamphoto = $_FILES["teamphoto"];

        $validtypes = ["image/jpg", "image/jpeg"];
        
        if(in_array($teamphoto["type"], $validtypes)){
            $teamname = $teamphoto["name"];
            $date = date("dmYhisa");
            $random = rand(9999, 99999);

            $source = $teamphoto["tmp_name"];
            $destination = "teamimages/$date $random $name $teamname";

            $team->addNewTeamMember($name, $designation, $twitter, $instagram, $facebook, $linkedin, $destination);

            move_uploaded_file($source, $destination);

            $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Success</strong> : $name Member added in Team Section
            </div>";
        
            $team->logWriter($loginuser, "$name Member added in Team Section");
        }else{
            $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Error</strong> : Must Select Valid File
            </div>";        
        }

        header("location:teams");
    }
?>

<script>
    function confirmDelete(id){
        if(confirm("Are you sure to delete this team member ??")){
            window. location.assign("teams?delete=1&id="+id);
        }
    }
</script>