<?php
  session_start();
  ob_start();
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

  <main>
    <div class="container-fluid">

      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/img/logo.png" alt="">
                  <span class="d-none d-lg-block">My Blogs</span>
                </a>
              </div><!-- End Logo -->

              <div class="card mb-3">

                <div class="card-body">

                  <div class="pt-4 pb-2">
                    <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                    <p class="text-center small">Enter your username & password to login</p>
                  </div>

                  <form class="row g-3" action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        
                        <input type="text" name="email" class="form-control" id="yourUsername" required>
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>


                    <div class="col-12">
                      <button class="btn btn-primary w-100" type="submit" name="loginProcess">Login</button>
                    </div>
                    <div class="col-12">
                      <?php
                        if(isset($_SESSION["msg"])){
                          echo $_SESSION["msg"];
                          unset($_SESSION["msg"]);
                        }
                      ?>
                    </div>
                    <div class="col-12 text-center">
                      <p class="small mb-0"><a href="forgotpassword">Forgot Password</a></p>
                    </div>
                  </form>

                </div>
              </div>
            </div>
          </div>
        </div>

      </section>

    </div>
  </main><!-- End #main -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>

<?php
// Code for Login
if (isset($_POST["loginProcess"])) {
  require_once("classes/AdminUsers.class.php");

  $email = $adminusers->filterData($_POST["email"]);
  $password = $adminusers->filterData($_POST["password"]);

  if($adminusers->adminLogin($email, $password)){
    $adminusers->logWriter($email, "Login Successfully");
    // login session before load homepage
    $_SESSION["loginuser"] = $email;
    header("location:home");
  }else{
    $adminusers->logWriter($email, "Invalid Attempt of Login");
    
    $_SESSION["msg"] = "<div class='alert alert-danger alert-dismissible'>
    <button class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Error</strong> : Invalid Username or Password
    </div>";

    header("location:index");
  }
}
?>