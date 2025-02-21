<?php
session_start();
ob_start();

require_once("classes/Client.class.php");

if (isset($_POST["logoutProcess"])) {
    unset($_SESSION["validuser"]);
    header("location:index");
}

if (isset($_POST["msgProcess"])) {
    $senderemail = $client->filterData($_POST["senderemail"]);
    $subject = $client->filterData($_POST["subject"]);
    $content = $client->filterData($_POST["content"]);

    $client->storeNewMessage($senderemail, $subject, $content);

    $_SESSION["msg"] = "<div class='alert alert-success alert-dismissible'>
    <button class='btn-close' data-bs-dismiss='alert'></button>
    <strong>Success</strong> : Thnaks for your message, we will reach you soon.
    </div>";

    header("location:index#contact");
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

    $status = $client->loginUser($email, $password);
    if ($status == 1) {
        $_SESSION["validuser"] = $email;
        $_SESSION["msg1"] = "<div class='alert alert-success alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Success</strong> : Login Successfully
        </div>";
    }else if($status == 2){
        $_SESSION["msg1"] = "<div class='alert alert-danger alert-dismissible'>
        <button class='btn-close' data-bs-dismiss='alert'></button>
        <strong>Error</strong> : Your Account is Disbled please Contact Admin
        </div>";
    } else if($status == 0){
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
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-WP8DKDSP');</script>
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

            <?php require_once("commons/menu.php"); ?>
        </div>
    </header>
    <?php
        if (isset($_SESSION["msg1"])) {
            echo $_SESSION["msg1"];
            //unset($_SESSION["msg1"]);
        }
        ?>
    <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <?php
                $sliderResult = $client->getSliderImages();
                $slidercount = 1;
                for ($i = 1; $i <= $sliderResult->num_rows; $i++) {
                    if ($slidercount == 1) {
                            echo "<button type='button' data-bs-target='carouselExampleCaptions' data-bs-slide-to='$i' class='active' aria-current='true' aria-label='Slide $i'></button>";
                        $slidercount++;
                    } else {
                        echo " <button type='button' data-bs-target='#carouselExampleCaptions' data-bs-slide-to='1' aria-label='Slide $i'></button>";
                    }
                }
                ?>
                
               

            </div>
            <div class="carousel-inner">
                <?php


                $slidercount = 1;
                while ($sliderRow = $sliderResult->fetch_assoc()) {
                    if ($slidercount == 1) {
                        echo "<div class='carousel-item active'>
                    <img src='admin/$sliderRow[photopath]' class='d-block w-100' alt='$sliderRow[slidertitle]'>
                    <div class='carousel-caption d-none d-md-block'>
                        <h5>$sliderRow[slidertitle]</h5>
                        <p>$sliderRow[description]</p>
                    </div>
                </div>";
                        $slidercount++;
                    } else {
                        echo "<div class='carousel-item'>
                    <img src='admin/$sliderRow[photopath]' class='d-block w-100' alt='$sliderRow[slidertitle]'>
                    <div class='carousel-caption d-none d-md-block'>
                        <h5>$sliderRow[slidertitle]</h5>
                        <p>$sliderRow[description]</p>
                    </div>
                </div>";
                    }
                }
                ?>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
        </div>
    <main class="main">
       
        <!-- Hero Section -->
        <section id="hero" class="hero section">

            <img src="assets/img/hero-bg-abstract.jpg" alt="" data-aos="fade-in" class="">

            <div class="container">

            
                <div class="row justify-content-center" data-aos="zoom-out">
                    <div class="col-xl-7 col-lg-9 text-center">
                        <h1>Welcome to My Blogs</h1>
                        <p>We are Writing Blogs on Technology, Food, Places, Life Style and many more...</p>
                    </div>
                </div>
                <div class="text-center" data-aos="zoom-out" data-aos-delay="100">
                    <a href="#about" class="btn-get-started">Get Started</a>
                </div>

                <div class="row gy-4 mt-5">
                    <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="100">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-easel"></i></div>
                            <h4 class="title"><a href="">Lorem Ipsum</a></h4>
                            <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="200">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-gem"></i></div>
                            <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
                            <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="300">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-geo-alt"></i></div>
                            <h4 class="title"><a href="">Magni Dolores</a></h4>
                            <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
                        </div>
                    </div><!--End Icon Box -->

                    <div class="col-md-6 col-lg-3" data-aos="zoom-out" data-aos-delay="400">
                        <div class="icon-box">
                            <div class="icon"><i class="bi bi-command"></i></div>
                            <h4 class="title"><a href="">Nemo Enim</a></h4>
                            <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
                        </div>
                    </div><!--End Icon Box -->

                </div>
            </div>

        </section><!-- /Hero Section -->

      

        <!-- About Section -->
        <section id="about" class="about section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>About Us<br></h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <div class="col-lg-6 content" data-aos="fade-up" data-aos-delay="100">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.

                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
                            magna aliqua.
                        </p>
                    </div>

                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
                        <p>Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>

                    </div>

                </div>

            </div>

        </section><!-- /About Section -->

        <!-- Stats Section -->
        <section id="stats" class="stats section light-background">

            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="row gy-4">

                    <div class="col-lg-4 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="<?= $client->countBlogs();?>" data-purecounter-duration="3" class="purecounter"></span>
                            <p>Blogs</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="<?= $client->countUsers();?>" data-purecounter-duration="3" class="purecounter"></span>
                            <p>Users</p>
                        </div>
                    </div><!-- End Stats Item -->

                    <div class="col-lg-4 col-md-6">
                        <div class="stats-item text-center w-100 h-100">
                            <span data-purecounter-start="0" data-purecounter-end="<?= $client->countComments(); ?>" data-purecounter-duration="3" class="purecounter"></span>
                            <p>Comments</p>
                        </div>
                    </div><!-- End Stats Item -->

                </div>

            </div>

        </section><!-- /Stats Section -->


        <!-- Services Section -->
        <section id="services" class="services section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Services</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">

                    <?php
                    $serviceResult = $client->getAllServices();

                    while ($serviceRow = $serviceResult->fetch_assoc()) {
                        echo " <div class='col-lg-4 col-md-6' data-aos='fade-up' data-aos-delay='100'>
                        <div class='service-item item-cyan position-relative'>
                            <div class='icon'>
                                <svg width='100' height='100' viewBox='0 0 600 600' xmlns='http://www.w3.org/2000/svg'>
                                    <path stroke='none' stroke-width='0' fill='#f5f5f5' d='M300,521.0016835830174C376.1290562159157,517.8887921683347,466.0731472004068,529.7835943286574,510.70327084640275,468.03025145048787C554.3714126377745,407.6079735673963,508.03601936045806,328.9844924480964,491.2728898941984,256.3432110539036C474.5976632858925,184.082847569629,479.9380746630129,96.60480741107993,416.23090153303,58.64404602377083C348.86323505073057,18.502131276798302,261.93793281208167,40.57373210992963,193.5410806939664,78.93577620505333C130.42746243093433,114.334589627462,98.30271207620316,179.96522072025542,76.75703585869454,249.04625023123273C51.97151888228291,328.5150500222984,13.704378332031375,421.85034740162234,66.52175969318436,486.19268352777647C119.04800174914682,550.1803526380478,217.28368757567262,524.383925680826,300,521.0016835830174'></path>
                                </svg>
                                <i class='bi bi-$serviceRow[serviceicon]'></i>
                            </div>
                            <a href='#' class='stretched-link'>
                                <h3>$serviceRow[servicetitle]</h3>
                            </a>
                            <p>$serviceRow[servicedesc]</p>
                        </div>
                    </div>";
                    }
                    ?>

                </div>

            </div>

        </section><!-- /Services Section -->

        <!-- Call To Action Section -->
        <section id="call-to-action" class="call-to-action section accent-background">

            <div class="container">
                <div class="row justify-content-center" data-aos="zoom-in" data-aos-delay="100">
                    <div class="col-xl-10">
                        <div class="text-center">
                            <h3>Call To Action</h3>
                            <p>Read our Latest Blogs on Different Topics and give your Comments.</p>
                            <a class="cta-btn" href="#login">Call To Action</a>
                        </div>
                    </div>
                </div>
            </div>

        </section><!-- /Call To Action Section -->

        <!-- Portfolio Section -->
        <section id="blogs" class="portfolio section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Blogs</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

                    <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
                        <li data-filter="*" class="filter-active">All</li>
                        <?php
                            $categroyResult = $client->getAllCategory();

                            while($categroyRow = $categroyResult->fetch_assoc()){
                                echo "<li data-filter='.filter-$categroyRow[categoryclass]'>$categroyRow[categoryname]</li>";
                            }
                        ?>
                    </ul><!-- End Portfolio Filters -->

                    <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">

                        <?php
                            $blogsResult = $client->getBlogs();

                            while($blogRow = $blogsResult->fetch_assoc()){
                                echo "<a href='readblog?id=$blogRow[id]' >
                                <div class='col-lg-4 col-md-6 portfolio-item isotope-item filter-$blogRow[categoryclass]'>
                            <img src='admin/$blogRow[blogimagepath]' class='img-fluid' alt=''>
                            <div class='portfolio-info'>
                                <h4>$blogRow[blogtitle]</h4>
                                <p>$blogRow[created_at]</p>
                                <a href='admin/$blogRow[blogimagepath]' title='$blogRow[blogtitle]' data-gallery='portfolio-gallery-app' class='glightbox preview-link'><i class='bi bi-zoom-in'></i></a>
                                <a href='readblog?id=$blogRow[id]' title='More Details' class='details-link'><i class='bi bi-link-45deg'></i></a>
                            </div>
                        </div></a>";
                            }
                        ?>

                      <!-- End Portfolio Item -->

                    </div><!-- End Portfolio Container -->

                </div>

            </div>

        </section><!-- /Portfolio Section -->

        <!-- Team Section -->
        <section id="team" class="team section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Team</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row gy-4">
                    <?php
                    $teamResult = $client->getAllTeamMembers();

                    while ($teamRow = $teamResult->fetch_assoc()) {
                        echo "<div class='col-lg-3 col-md-6 d-flex align-items-stretch' data-aos='fade-up' data-aos-delay='100'>
                        <div class='team-member'>
                            <div class='member-img'>
                                <img src='admin/$teamRow[photopath]' class='img-fluid' alt=''>
                                <div class='social'>";
                        if ($teamRow["teamtwitter"] != "") {
                            echo "<a href='$teamRow[teamtwitter]'><i class='bi bi-twitter-x'></i></a>";
                        }

                        if ($teamRow["teamfacebook"] != "") {
                            echo "<a href='$teamRow[teamfacebook]'><i class='bi bi-facebook'></i></a>";
                        }

                        if ($teamRow["teaminstagram"] != "") {
                            echo "<a href='$teamRow[teaminstagram]'><i class='bi bi-instagram'></i></a>";
                        }

                        if ($teamRow["teamlinkedin"] != "") {
                            echo "<a href='$teamRow[teamlinkedin]'><i class='bi bi-linkedin'></i></a>";
                        }
                        echo "</div>
                            </div>
                            <div class='member-info'>
                                <h4>$teamRow[name]</h4>
                                <span>$teamRow[designation]</span>
                            </div>
                        </div>
                    </div>";
                    }
                    ?>


                </div>

            </div>

        </section><!-- /Team Section -->

        <!-- Faq Section -->
        <section id="faq" class="faq section light-background">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Frequently Asked Questions</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->

            <div class="container">

                <div class="row justify-content-center">

                    <div class="col-lg-10" data-aos="fade-up" data-aos-delay="100">

                        <div class="faq-container">

                            <?php
                            $faqresult = $client->getAllFAQ();

                            $count = 1;
                            while ($faqrow = $faqresult->fetch_assoc()) {
                                if ($count == 1) {
                                    echo "<div class='faq-item faq-active'>
                                    <h3>$faqrow[question]</h3>
                                    <div class='faq-content'>
                                        <p>$faqrow[answer]</p>
                                    </div>
                                    <i class='faq-toggle bi bi-chevron-right'></i>
                                </div>";
                                    $count++;
                                } else {
                                    echo "<div class='faq-item'>
                                <h3>$faqrow[question]</h3>
                                <div class='faq-content'>
                                    <p>$faqrow[answer]</p>
                                </div>
                                <i class='faq-toggle bi bi-chevron-right'></i>
                            </div>";
                                }
                            }
                            ?>
                        </div>
                    </div><!-- End Faq Column-->
                </div>
            </div>

        </section><!-- /Faq Section -->

        <!-- Contact Section -->
        <section id="contact" class="contact section">

            <!-- Section Title -->
            <div class="container section-title" data-aos="fade-up">
                <h2>Contact</h2>
                <p>Necessitatibus eius consequatur ex aliquid fuga eum quidem sint consectetur velit</p>
            </div><!-- End Section Title -->
            <?php
            $contactresult = $client->getContactInfo();
            extract($contactresult->fetch_assoc());
            ?>
            <div class="container" data-aos="fade-up" data-aos-delay="100">

                <div class="mb-4" data-aos="fade-up" data-aos-delay="200">
                    <iframe style="border:0; width: 100%; height: 270px;" src="<?= $googlemap; ?>" frameborder="0" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div><!-- End Google Maps -->

                <div class="row gy-4">

                    <div class="col-lg-4">
                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-person flex-shrink-0"></i>
                            <div>
                                <h3>Contact Person</h3>
                                <p><?= $contactperson; ?></p>
                            </div>
                        </div>

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="300">
                            <i class="bi bi-geo-alt flex-shrink-0"></i>
                            <div>
                                <h3>Address</h3>
                                <p><?= $address; ?></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="400">
                            <i class="bi bi-telephone flex-shrink-0"></i>
                            <div>
                                <h3>Call Us</h3>
                                <p><a href="tel:<?= $phonenumber; ?>"><?= $phonenumber; ?></a></p>
                            </div>
                        </div><!-- End Info Item -->

                        <div class="info-item d-flex" data-aos="fade-up" data-aos-delay="500">
                            <i class="bi bi-envelope flex-shrink-0"></i>
                            <div>
                                <h3>Email Us</h3>
                                <p><a href="mailto:<?= $emailaddress; ?>"><?= $emailaddress; ?></a></p>
                            </div>
                        </div><!-- End Info Item -->

                    </div>

                    <div class="col-lg-8">
                        <form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post" class="" data-aos="fade-up" data-aos-delay="200">
                            <div class="row gy-4">
                                <?php
                                if (isset($_SESSION["msg"])) {
                                    echo $_SESSION["msg"];
                                    //unset($_SESSION["msg"]);
                                }
                                ?>
                                <div class="col-md-12 ">
                                    <input type="email" class="form-control" name="senderemail" placeholder="Your Email" required="">
                                </div>

                                <div class="col-md-12">
                                    <input type="text" class="form-control" name="subject" placeholder="Subject" required="">
                                </div>

                                <div class="col-md-12">
                                    <textarea class="form-control" name="content" rows="6" placeholder="Message" required=""></textarea>
                                </div>

                                <div class="col-md-12 text-center">
                                    <input type="submit" class="btn btn-primary" value="Send Message" name="msgProcess">
                                </div>

                            </div>
                        </form>
                    </div><!-- End Contact Form -->

                </div>

            </div>

        </section><!-- /Contact Section -->

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