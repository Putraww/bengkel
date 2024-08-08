<?php
include "admin/koneksi/koneksi.php";
ob_start();
session_start();
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bengkel Motor Honda</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">
    <!-- Favicon -->
    <link class="fa-solid fa-motorcycle fa-spin fa-spin-reverse" href="asset/img/m.svg" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="asset/lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="asset/css/style.css" rel="stylesheet">
    <link href="asset/css/res.css" rel="stylesheet">
</head>

<body>



    <!-- Navbar Start -->
    <?php include 'inc/navbar.php' ?>
    <!-- Navbar End -->





    <!-- home Start -->
    <?php
    if (isset($_GET['pg'])) {
        if (file_exists('content/' . $_GET['pg'] . '.php')) {
            include 'content/' . $_GET['pg'] . '.php';
        }
    } else {
        include 'content/home.php';
    }
    ?>
    <!-- home End -->


    <!-- Footer Start -->
    <?php include 'inc/footer.php' ?>
    <!-- Footer End -->




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="asset/lib/easing/easing.min.js"></script>
    <script src="asset/lib/waypoints/waypoints.min.js"></script>
    <script src="asset/lib/counterup/counterup.min.js"></script>
    <script src="asset/lib/owlcarousel/owl.carousel.min.js"></script>
    <!-- Template Javascript -->
    <script src="asset/js/main.js"></script>

</body>

</html>