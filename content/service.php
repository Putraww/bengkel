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

<body>

    <div class="container">
        <h2>Isi formulir reservasi</h2>
        <form action="?pg=service-berhasil" method="POST">
            <label for="nama">Nama:</label>
            <input type="text" id="nama" name="nama" required>

            <label for="telepon">Nomor Telepon:</label>
            <input type="tel" id="telepon" name="no_telpon" required>

            <label for="jenismotor">Seri Motor:</label>
            <input type="text" id="jenismotor" name="jenismotor" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="tanggal">Tanggal Reservasi:</label>
            <input type="date" id="tanggal" name="tanggal" required>

            <label for="pesan">Pesan Tambahan:</label>
            <textarea id="pesan" name="pesan" rows="4"></textarea>

            <input type="submit" class="btn btn-primary" name="simpan" value="Kirim">
        </form>
    </div>

</body>

<?php
$queryReservasi = mysqli_query($koneksi, "SELECT * FROM reservasi ORDER BY id DESC LIMIT");

?>