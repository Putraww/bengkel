<?php
include "admin/koneksi/koneksi.php";
if (isset($_POST['simpan'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $insert = mysqli_query($koneksi, "INSERT INTO contact (nama_lengkap,email,pesan) VALUES ('$nama_lengkap', '$email', '$pesan')");
    header("location:?pg=contact&insert=berhasil");
}
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
    <link href="asset/img/bicycle.svg" rel="icon">

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
</head>

<body>
    <!-- Header Start -->
    <div class="jumbotron jumbotron-fluid mb-5">
        <div class="container text-center py-5">
            <h1 class="text-primary mb-4">Safe & Faster</h1>
            <h1 class="text-white display-3 mb-5">Bengkel Motor Honda</h1>
            <div class="mx-auto" style="width: 100%; max-width: 600px;"></div>
        </div>
    </div>
    </div>
    <!-- Header End -->

    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="asset/img/servis.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">Bengkel Motor Honda</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Tentang Kami</h6>
                    <h1 class="mb-4">Trusted & Faster Service</h1>
                    <p class="mb-4">Sepeda motor kini bukan hanya menjadi sarana transportasi produktif bagi masyarakat
                        Indonesia. Sepeda motor sudah
                        menjadi bagian dari hobi dan gaya hidup, bahkan bisa mengantarkan pada prestasi tertentu yang
                        membanggakan. Untuk
                        menemani masyarakat beraktivitas dan menggapai beragam mimpinya, Bengkel Motor Honda
                        menghadirkan solusi mobilitas bagi
                        masyarakat dengan produk dan layanan terbaik. Sejak pertama kali hadir di Indonesia, sepeda
                        motor selalu dicintai
                        dan dipercaya menjadi partner berkendara masyarakat. Berbekal kepercayaan ini, Bengkel Motor
                        Honda konsisten
                        melakukan inovasi pada produk dan teknologinya.</p>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 pb-4 pb-lg-0">
                    <img class="img-fluid w-100" src="asset/img/hon.jpg" alt="">
                    <div class="bg-primary text-dark text-center p-4">
                        <h3 class="m-0">Bengkel Motor Honda</h3>
                    </div>
                </div>
                <div class="col-lg-7">
                    <h6 class="text-primary text-uppercase font-weight-bold">Tentang Kami</h6>
                    <h1 class="mb-4">History</h1>
                    <p class="mb-4">Honda didirikan oleh Soichiro Honda pada tahun 1948 di Jepang. Awalnya perusahaan
                        ini
                        memproduksi motor guncangan sepeda. Pada tahun 1959, Honda memproduksi mobil kecil pertama
                        mereka,
                        Honda S500. Honda berhasil memperluas kehadirannya secara global pada tahun 1960-an, terutama di
                        Amerika Serikat. Mereka dikenal dengan inovasi teknologi mesin seperti VTEC. Honda juga aktif
                        dalam
                        motorsport dan telah mengembangkan berbagai jenis produk termasuk mobil, sepeda motor, dan
                        teknologi
                        energi alternatif. Perusahaan terus berkomitmen pada inovasi dan keberlanjutan dalam industri
                        otomotif global.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


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