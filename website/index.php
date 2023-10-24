<?php
include_once '../config/parametros_db.php';
include_once '../administrador/access_control/connection.php';
include_once '../administrador/controller/get_table.php';

$content = isset($_GET['c']) ? $_GET['c'] : "index";

// if (isset($_GET['c'])){
//     $content = $_GET['c'];
// } else {
//     $content = 'index';
// }


$get_table = new gestaoTabelas(PSQLHOST, PSQLUSER, PSQLPW, PSQLDB);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>FDSL</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon_fdsl.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
  * Template Name: Arsha - v4.11.0
  * Template URL: https://bootstrapmade.com/arsha-free-bootstrap-html-template-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<!-- KOR => Matak: #0b9025, Kinur: #f3f310 -->

<body>

    <?php
    include('content/home/header.php');



    switch ($content) {
        case 'index':
            include('content/home/hero.php');
            echo '<main id="main">';
            include('content/home/about_us.php');
            include('content/home/services.php');
            include('content/home/cta.php');
            include('content/home/team.php');
            include('content/home/contact.php');
            break;
        case 'publikasaun':
            echo '<main id="main">';
            include('content/publikasaun.php');
            break;
        case 'le_publikasaun':
            echo '<main id="main">';
            include('content/le_publikasaun.php');
            break;
        case 'programa':
            echo '<main id="main">';
            include('content/programa.php');
            break;
        case 'le_programa':
            echo '<main id="main">';
            include('content/le_programa.php');
            break;
        case 'verifika_kartaun':
            echo '<main id="main">';
            include('content/verifika_kartaun.php');
            break;
        default:
            include('content/home/hero.php');
            echo '<main id="main">';
            include('content/home/about_us.php');
            include('content/home/services.php');
            include('content/home/cta.php');
            include('content/home/team.php');
            include('content/home/contact.php');
            break;
    }

    echo '</main>'

    ?>
    <!-- End #main -->

    <?php
    include('content/home/footer.php');
    ?>

    <!-- FOOTER -->

    <div id="preloader"></div>
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
        <i class="bi bi-arrow-up-short"></i>
    </a>

    <!-- Vendor JS Files -->
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>

</body>

</html>