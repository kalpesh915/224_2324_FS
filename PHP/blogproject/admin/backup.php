<?php
    use Ifsnop\Mysqldump\Mysqldump;
    if(isset($_GET["delete"])){
        $filepath = $_GET["filepath"];
        unlink($filepath);
        header("location:backup");
    }
  require_once("commons/session.php");
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
   <?php  require_once("commons/sidebar.php"); ?>
  <!-- End Sidebar-->

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>Get Database Backup</h1>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">
      <?php // require_once("commons/data.php"); ?>
        <!-- Left side columns -->
        <div class="col-lg-12">
          <div class="row">
            <!-- Customers Card -->
            <div class="col-xxl-12 col-xl-12">

              <div class="card info-card customers-card">
                <div class="card-body">
                <h5 class="card-title"><span></span></h5>
                <?php 
                    if(isset($_SESSION["msg"])){
                        echo $_SESSION["msg"];
                        unset($_SESSION["msg"]);
                    }
                ?>
                <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"])?>" method="post">
                    <div class="d-grid">
                    <input type="submit" value="Get New Database Backup" name="backupProcess" class="btn btn-primary btn-block">
                    </div>
                </form>

                <!-- Table with stripped rows -->
                <h5 class="card-title"><span>Download Backup File</span></h5>
              <table class="table datatable">
                <thead>
                  <tr>
                    <th>File Name</th>
                    <th>Download</th>
                    <th>Delete</th>
                  </tr>
                </thead>
                <tbody>
                    <?php
                        $backupfiles = scandir("dbbackups/");
                        $count = count($backupfiles);

                        for($i=2; $i<$count; $i++){
                            echo "<tr>
                                <td>$backupfiles[$i]</td>
                                <td><a href='dbbackups/$backupfiles[$i]' download class='btn btn-primary'>Download</a></td>
                                <td><button type='button' class='btn btn-danger' 
                                onclick='confirmDelete(`$backupfiles[$i]`)'>Delete</button></td>
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

<?php
    if(isset($_POST["backupProcess"])){
        $fileName = "dbbackups/Database Backup on ".date("dmY-His").".sql";
        require_once("Mysqldump/Mysqldump.php");
        require_once("classes/AdminUsers.class.php");

        $dbinfo = $adminusers->getDatabaseInfo();
        $dump = new Mysqldump("mysql:host=$dbinfo[hostname];dbname=$dbinfo[database]", $dbinfo["username"], $dbinfo["password"]);
        $dump->start($fileName);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : Database Backup Created as $fileName
        </div>";

        header("location:backup");
    }
?>

<script>
    function confirmDelete(filepath){
        //alert(filename);
        if(confirm("Are you sure to Delete "+filepath+" Backup File ??")){
            window.location.assign("backup?delete=1&filepath=dbbackups/"+filepath);
        }
    }
</script>