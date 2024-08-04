<?php
$queryContact = mysqli_query($koneksi, "SELECT * FROM contact LIMIT 5");
$rowContact = mysqli_fetch_assoc($queryContact);

?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak Kami</title>
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



    <section class="container">
        <h2 align="center">Kontak Kami</h2>
        <form>
            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input value="<?= $rowContact['nama_lengkap'] ?>" type="text" id="name" name="name" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input value="<?= $rowContact['email'] ?>" type="email" id="email" name="email" required>
            </div>
            <div class="form-group">
                <label for="pesan">Pesan</label>
                <textarea value="<?= $rowContact['pesan'] ?>" id="pesan" name="pesan" rows="8" required></textarea>
            </div>
            <div class="form-group">
                <button type="submit">Kirim</button>
            </div>
        </form>
    </section>
</body>

</html>