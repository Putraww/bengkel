<!-- Topbar Start -->
<div style="background-color: red;" class="container-fluid">
    <div class="row py-2 px-lg-5">
        <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
            <div class="d-inline-flex align-items-center text-white ">
                <small><i class="fa fa-phone-alt mr-2"></i>+62 8912-3221-0989</small>
                <small class="px-3">|</small>
                <small><i class="fa fa-envelope mr-2"></i>bengkelmotorhonda@gmail.com</small>
            </div>
        </div>
        <div class="col-lg-6 text-center text-lg-right">
            <div class="d-inline-flex align-items-center">
                <a class="text-white px-2" href="">
                    <i class="fab fa-instagram"></i>
                </a>
                <a class="text-white pl-2" href="">
                    <i class="fab fa-youtube"></i>
                </a>
                <a class="text-white pl-2" href="">
                    <i class="fab fa-facebook-f"></i>
                </a>
            </div>
        </div>
    </div>
</div>
<!-- Topbar End -->
<div class="container-fluid p-0 ">
    <nav class="navbar navbar-expand-lg bg-white navbar-white py-3 py-lg-0 px-lg-5">
        <a href="index.php" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5 text-uppercase ">Bengkel Motor Honda</h1>
        </a>
        <button type="button" class="navbar-toggler " data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0 ">
                <a href="?pg=home" class="nav-item nav-link text-dark">Home</a>
                <a href="?pg=about" class="nav-item nav-link text-dark">About Us</a>
                <a href="?pg=reservasi" class="nav-item nav-link text-dark">Booking Service</a>
                <a href="?pg=saran" class="nav-item nav-link text-dark">Saran Dan Keluhan</a>
                <?php if (isset($_SESSION['nama_lengkap'])) { ?>
                    <a class="btn btn-secondary-outline"><?php echo $_SESSION['nama_lengkap']; ?></a><a
                        class="btn btn-danger ms-3" href="?pg=logout">Logout</a>
                <?php } else { ?>
                    <a class="btn btn-secondary-outline text-dark nav-link " href="?pg=signin">Sign
                        In</a><a class="btn btn-secondary-outline text-dark nav-link" href="?pg=signup">Sign Up</a>
                </div>
            <?php } ?>
        </div>
</div>
</nav>
</div>