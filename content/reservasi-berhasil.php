<?php
include "admin/koneksi/koneksi.php";
$queryReservasi = mysqli_query($koneksi, "SELECT * FROM reservasi ORDER BY id");
$rowReservasi = mysqli_fetch_assoc($queryReservasi);
?>


<body>
    <div class="container">
        <h2>Isi formulir reservasi</h2>
        <form action="?pg=reservasi-berhasil" method="post">

            <div class="mb-3">
                <label for="nama">Nama:</label>
                <input value="<?= $rowReservasi['nama'] ?>" type="text" id="nama" name="nama" required>
            </div>
            <div class="mb-3">
                <label for="telepon">Nomor Telepon:</label>
                <input value="<?= $rowReservasi['no_telpon'] ?>" type="tel" id="telepon" name="no_telpon" required>
            </div>
            <div class="mb-3">
                <label for="jenismotor">Seri Motor:</label>
                <select value="" id="jenismotor" name="jenismotor" required>
                    <option value="<?= $rowReservasi['jenismotor'] ?>">Pilih Seri Motor</option>
                    <option value="Honda Beat">Honda Beat</option>
                    <option value="Honda Vario">Honda Vario</option>
                    <option value="Honda Scoopy">Honda Scoopy</option>
                    <option value="Honda PCX">Honda PCX</option>
                    <option value="Honda CBR">Honda CBR</option>
                    <option value="Honda CB">Honda CB</option>
                </select>
            </div>
            <div class="mb-3">
                <label for="email">Email:</label>
                <input value="<?= $rowReservasi['email'] ?>" type="email" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="tanggal">Tanggal Reservasi:</label>
                <input value="<?= $rowReservasi['tanggal'] ?>" type="date" id="tanggal" name="tanggal" required>
            </div>
            <div class="mb-3">
                <label for="pesan">Pesan Tambahan:</label>
                <input value="<?= $rowReservasi['pesan'] ?>" id="pesan" name="pesan" rows="4">
            </div>
            <div class="mb-3">
                <input type="submit" class="btn btn-primary" name="simpan" value="Kirim">
            </div>

        </form>
    </div>
</body>
<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        margin: 0;
        padding: 0;
    }

    header,
    footer {
        background-color: #333;
        color: white;
        text-align: center;
        padding: 10px 0;
    }

    .container {
        max-width: 800px;
        margin: 20px auto;
        background-color: #fff;
        padding: 20px;
        border-radius: 8px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    form {
        display: grid;
        gap: 10px;
    }

    label {
        font-weight: bold;
    }

    input,
    textarea {
        width: 100%;
        padding: 8px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    button {
        background-color: #333;
        color: white;
        border: none;
        padding: 10px 20px;
        cursor: pointer;
        border-radius: 4px;
    }

    button:hover {
        background-color: #555;
    }
</style>