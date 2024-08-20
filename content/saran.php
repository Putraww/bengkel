<?php
if (isset($_POST['simpan'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $no_telpon = $_POST['no_telpon'];
    $alamat = $_POST['alamat'];


    $insert = mysqli_query($koneksi, "INSERT INTO comment (nama_lengkap, email, pesan, no_telpon, alamat) VALUES ('$nama_lengkap','$email','$pesan','$no_telpon','$alamat')");
    if (!$insert) {
        header("location:?pg=home&pesan=pesan-gagal-terkirim");
    } else {
        header("location:?pg=saran&pesan=pesan-terkirim");
    }
}

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saran Dan Keluhan</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        margin: 0;
        padding: 0;
    }

    .container {
        width: 80%;
        margin: auto;
        overflow: hidden;
    }

    header {
        background: #50b3a2;
        color: #ffffff;
        padding-top: 30px;
        min-height: 70px;
        border-bottom: #e8491d 3px solid;
    }

    header a {
        color: #ffffff;
        text-decoration: none;
        text-transform: uppercase;
        font-size: 16px;
    }

    header ul {
        padding: 0;
        list-style: none;
    }

    header li {
        float: right;
        display: inline;
        padding: 0 20px 0 20px;
    }

    header #branding {
        float: left;
    }

    header #branding h1 {
        margin: 0;
    }

    section {
        padding: 20px;
        margin: 20px 0;
        background: #ffffff;
        border-radius: 8px;
    }

    footer {
        background: orangered;
        color: #ffffff;
        text-align: center;
        padding: 10px;
        margin-top: 20px;
    }

    .form-group {
        margin-bottom: 15px;
    }

    .form-group label {
        display: block;
        margin-bottom: 5px;
    }

    .form-group input,
    .form-group textarea {
        width: 100%;
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 5px;
    }

    .form-group button {
        background: orangered;
        color: #fff;
        border: 0;
        padding: 10px 15px;
        cursor: pointer;
        border-radius: 5px;
    }
    </style>
</head>

<body>
    <div class="py-5">
        <section class="container py-5">
            <h2 align="center" style="color:red;">SARAN DAN KELUHAN</h2>

            <form action="" method="post">
                <div class="form-group mb-3">
                    <label for="">Nama Lengkap :</label>
                    <input type="text" class="form-control" placeholder="Masukkan Nama Lengkap Anda"
                        name="nama_lengkap">
                </div>
                <div class="form-group mb-3">
                    <label for="">Email :</label>
                    <input type="email" class="form-control" placeholder="Masukkan Email Anda" name="email">
                </div>
                <div class="form-group mb-3">
                    <label for="">No Telpon :</label>
                    <input type="no_telpon" class="form-control" placeholder="08XXXXXXXXXX" name="no_telpon">
                </div>
                <div class="form-group mb-3">
                    <label for="">Alamat :</label>
                    <input type="alamat" class="form-control" placeholder="Masukkan Alamat Anda" name="alamat">
                </div>
                <div class="form-group mb-3">
                    <label for="">Tulis Pesan :</label>
                    <textarea type="pesan" class="form-control" placeholder="Tulis Pesan Anda" name="pesan"></textarea>
                </div>
                <div class="form-group mb-3">
                    <input type="submit" style="background-color: red" value="Simpan" name="simpan">
                </div>
            </form>
        </section>
    </div>

</body>

</html>