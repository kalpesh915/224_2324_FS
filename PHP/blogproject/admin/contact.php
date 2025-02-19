<?php
  require_once("commons/session.php");
  require_once("classes/Contact.class.php");
  $result = $contact->getContactDetails();
  extract($result->fetch_assoc());
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
      <h1>Manage Contact Details</h1>
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

                    <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                        <div class="my-3">
                            <label for="contactperson" class="form-lable">Enter Contact Person Name</label>
                            <input type="text" name="contactperson" id="contactperson" class="form-control" required value="<?= $contactperson; ?>">
                        </div>

                        <div class="my-3">
                            <label for="phonenumber" class="form-lable">Enter Phone Number</label>
                            <input type="text" name="phonenumber" id="phonenumber" class="form-control" required value="<?= $phonenumber; ?>">
                        </div>

                        <div class="my-3">
                            <label for="emailaddress" class="form-lable">Enter Email Address</label>
                            <input type="text" name="emailaddress" id="emailaddress" class="form-control" required value="<?= $emailaddress; ?>">
                        </div>

                        <div class="my-3">
                            <label for="address" class="form-lable">Enter Address</label>
                            <textarea name="address" id="address" class="form-control" required rows="5"><?= $address; ?></textarea>
                        </div>

                        <div class="my-3">
                            <label for="googlemap" class="form-lable">Enter GoogleMap Link</label> 
                            <button class="btn btn-primary mx-2" type="button" data-bs-toggle="modal" data-bs-target="#viewmodel">View</button>
                            <button class="btn btn-primary mx-2" type="button" data-bs-toggle="modal" data-bs-target="#stepsmodel">Steps</button>
                            <textarea name="googlemap" id="googlemap" class="form-control" required rows="10"><?= $googlemap; ?></textarea>
                        </div>

                        <div class="my-3">
                            <input type="submit" value="Update Contact Details" class="btn btn-primary" name="updateProcess">
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
<div class="modal fade" id="viewmodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">Current Map</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <iframe src="<?= $googlemap; ?>" style="border:0; width:100%; height:300px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="stepsmodel" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="staticBackdropLabel">How to Add Google Map</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
            <ol>
                <li>Open Google Maps <a href="https://www.google.com/maps" target="_blank">Click Here</a></li>
                <li>Find Location In Google Maps</li>
                <li>Click On Location</li>
                <li>Click On Share</li>
                <li>Select Embed a Map Option</li>
                <li>From Iframe Select Value of SRC between ""</li>
                <li>Copy It From Src</li>
                <li>Paste in Admin Panel Google Map Link Box</li>
            </ol>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<?php
    if(isset($_POST["updateProcess"])){
        $contactperson = $contact->filterData($_POST["contactperson"]);
        $phonenumber = $contact->filterData($_POST["phonenumber"]);
        $emailaddress = $contact->filterData($_POST["emailaddress"]);
        $address = $contact->filterData($_POST["address"]);
        $googlemap = $contact->filterData($_POST["googlemap"]);

        $contact->updateContactDetails($contactperson, $phonenumber, $emailaddress, $address, $googlemap);

        $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : Contact Detais are Updated
        </div>";
    
        header("location:contact");
    }
?>