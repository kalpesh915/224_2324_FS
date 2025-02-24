<?php
session_start();
ob_start();

require_once("classes/Client.class.php");

if (!isset($_SESSION["validuser"])) {
    header("location:index");
}

if (isset($_POST["logoutProcess"])) {
    unset($_SESSION["validuser"]);
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
        <h3 class="p-5">Your Recent Activity</h3>

        <div class="p-5">
            <?php
            $result = $client->viewUserActivity($_SESSION["validuser"]);

            while ($row = $result->fetch_array()) {
                if($row["adminstatus"] == 0){
                    $adminstatus = "<span class='text-bg-secondary p-2'>Pending</span>";
                }else if($row["adminstatus"] == 1){
                    $adminstatus = "<span class='text-bg-success p-2'>Approved</span>";
                }else if($row["adminstatus"] == 2){
                    $adminstatus = "<span class='text-bg-danger p-2'>Rejected</span>";
                }

                echo "<div class='card my-2'>
                <div class='card-body'>
                <h5 class='card-title'>$row[blogtitle] on <b>$row[commentdate]</b> Status : $adminstatus</h5> 
                <p class='card-text'>$row[commenttext]</p>
                </div></div>";
            }
            ?>
        </div>
        <!-- Hero Section -->
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