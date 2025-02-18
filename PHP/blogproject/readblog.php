<?php
session_start();
ob_start();

require_once("classes/Client.class.php");

if (isset($_POST["logoutProcess"])) {
    unset($_SESSION["validuser"]);
    header("location:index");
}

if (isset($_GET["id"])) {
    $id = $client->filterData($_GET["id"]);

    $blogResult = $client->getBlog($id);

    if ($blogResult->num_rows > 0) {
        extract($row = $blogResult->fetch_assoc());
    } else {
        header("location:index");
    }
} else {
    header("location:index");
}

// signup
if (isset($_POST["signupProcess"])) {
    $name = $client->filterData($_POST["name"]);
    $email = $client->filterData($_POST["email"]);
    $password = $client->filterData($_POST["password"]);
    $cpassword = $client->filterData($_POST["cpassword"]);
    $gender = $client->filterData($_POST["gender"]);
    $phone = $client->filterData($_POST["phone"]);
    $profilephoto = $_FILES["profilephoto"];

    if ($password == $cpassword) {
        $validType = ["image/jpg", "image/jpeg"];

        if (in_array($profilephoto["type"], $validType)) {
            // check for email is available or not
            if (!$client->checkUserExist($email)) {
                $source = $profilephoto["tmp_name"];
                $random = rand(9999, 99999);
                $date = date("dmYHisa");
                $photoname = $profilephoto["name"];
                $destination = "userimages/$random $date $email $photoname";

                move_uploaded_file($source, "admin/" . $destination);

                $password = password_hash($password, PASSWORD_DEFAULT);
                $client->createNewUser($name, $email, $password, $gender, $phone, $destination);

                $_SESSION["msg1"] = "<div class='alert alert-success alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Success</strong> : $email user Created in database
                </div>";
            } else {
                $_SESSION["msg1"] = "<div class='alert alert-danger alert-dismissible'>
                <button class='btn-close' data-bs-dismiss='alert'></button>
                <strong>Error</strong> : $email user is already in database
                </div>";
            }
        } else {
            $_SESSION["msg1"] = "<div class='alert alert-danger alert-dismissible'>
            <button class='btn-close' data-bs-dismiss='alert'></button>
            <strong>Error</strong> : Must Select .JPG or .JPEG photo
            </div>";
        }
    } else {
        $_SESSION["msg1"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Error</strong> : Confirm Password does not match.
        </div>";
    }

    header("location:index");
}

// Login Code
if (isset($_POST["loginProcess"])) {
    $email = $client->filterData($_POST["email"]);
    $password = $client->filterData($_POST["password"]);

    if ($client->loginUser($email, $password)) {
        $_SESSION["validuser"] = $email;
        $_SESSION["msg1"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : Login Successfully
        </div>";
    } else {
        $_SESSION["msg1"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Error</strong> : email or password is incorrect
        </div>";
    }
    header("location:index");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <?php require_once("commons/title.php"); ?>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-WP8DKDSP');
    </script>
    <!-- End Google Tag Manager -->
</head>

<body class="index-page">
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WP8DKDSP"
            height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <header id="header" class="header d-flex align-items-center sticky-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="index" class="logo d-flex align-items-center me-auto">
                <h1 class="sitename">My Blogs</h1>
            </a>

            <?php require_once("commons/blogmenu.php"); ?>
        </div>
    </header>

    <main class="main">
        <?php
        if (isset($_SESSION["msg1"])) {
            echo $_SESSION["msg1"];
            //unset($_SESSION["msg1"]);
        }
        ?>
        <!-- Hero Section -->
        <section id="hero" class="section">
            <img src="<?= "admin/" . $blogimagepath; ?>" class="img-fluid">

            <section>
                <h1 class="px-5"><?= $blogtitle; ?> <span class="badge bg-secondary"><?= $categoryname; ?></span></h1>
                <p class="my-3 px-5"><b>Posted at : <?= $created_at; ?></b></p>
                <p class="my-3 px-5"><?= $blogcontent; ?></p>
            </section>


            <?php
            if ($blogcomment == 1) {
                if (isset($_SESSION["validuser"])) {
                    echo "<form action='' method=''>
                    <div class='my-3 px-5'>
                        <h3>Comments :</h3>
                        <textarea name='comment' id='comment' class='form-control' required placeholder='Write Your Comment Here..' ></textarea>

                        <input type='submit' value='Post Comment' class='btn btn-primary my-2' name='commentProcess'>
                    </div>
                    </form>";
                }else{
                    echo "<p class='my-3 px-5 lead text-danger'>Please Login for Comment</p>";    
                }
            } else {
                echo "<p class='my-3 px-5 lead text-danger'>Comment are Disabled on this Post</p>";
            }
            ?>
        </section><!-- /Hero Section -->

    </main>

    <?php
    require_once("commons/footer.php");
    ?>
    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/purecounter/purecounter_vanilla.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/imagesloaded/imagesloaded.pkgd.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>

    <!-- Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>

<?php
require_once("commons/models.php");
?>