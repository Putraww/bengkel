<?php
$queryReservasi = mysqli_query($koneksi, "SELECT * FROM reservasi ORDER BY id DESC");

echo "<h2>Reservasi Anda berhasil dikirim!</h2>";
echo "<p>Terima kasih atas reservasi Anda. Tim kami akan segera menghubungi Anda.</p>";
?>

<body>
    <?php while ($row = mysqli_fetch_assoc($queryReservasi)): ?>
        <div class="container">
            <h2>Isi formulir reservasi</h2>
            <form action="?pg=service-berhasil" method="post">
                <label for="nama">Nama:</label>
                <input type="text" value="<? echo $row['nama'] ?>" name="nama" required>

                <label for="telepon">Nomor Telepon:</label>
                <input type="number" value="<? echo $row['no_telpon'] ?>" name="telepon" required>

            </form>
        </div>
    <?php endwhile ?>
</body>