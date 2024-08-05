<div class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-lg-5">
        <a href="index.php" class="navbar-brand ml-lg-3">
            <h1 class="m-0 display-5 text-uppercase text-primary">Bengkel Motor Honda</h1>
        </a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
            <div class="navbar-nav m-auto py-0">
                <a href="?pg=home" class="nav-item nav-link">Home</a>
                <a href="?pg=about" class="nav-item nav-link">About Us</a>
                <a href="?pg=reservasi" class="nav-item nav-link">Reservasi</a>
                <a href="?pg=testimoni" class="nav-item nav-link">Testimoni</a>
                <a href="?pg=contact" class="nav-item nav-link">Contact</a>
                <a href="login.php" class="nav-item nav-link">
                    <img src="asset/img/file-person.svg" width="30px"><?= isset($data['nama']) ? $data['nama'] : '' ?>
                </a>
            </div>
        </div>
    </nav>
</div>