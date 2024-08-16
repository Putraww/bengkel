<?php
require_once 'dbcontroller.php';

// Membuat instance dari DBController
$db = new DBController();

header("Content-type: application/vnd-ms-excel");
header("Content-Disposition: attachment; filename=Reservasi.xls");

$sql = "SELECT reservasi.*, kendaraan.nama_kendaraan, kendaraan.harga FROM reservasi JOIN kendaraan ON reservasi.id_kendaraan = kendaraan.id ORDER BY reservasi.id DESC LIMIT 1";
$row = $db->getAll($sql);
$no = 1;
?>

<body>
    <table border="1" cellpadding="5" cellspacing="0">
        <thead>
            <tr bgcolor="cyan">
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>No Telpon</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Jenis Kendaraan</th>
                <th>Harga</th>
                <th>Deskripsi Masalah</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($row as $r): ?>
                <tr align="center" bgcolor="burlywood">
                    <td><?php echo $no++ ?></td>
                    <td><?php echo $r['nama'] ?></td>
                    <td><?php echo $r['email'] ?></td>
                    <td><?php echo $r['alamat'] ?></td>
                    <td><?php echo $r['telp'] ?></td>
                    <td><?php echo $r['tanggal'] ?></td>
                    <td><?php echo $r['waktu'] ?></td>
                    <td><?php echo $r['nama_kendaraan'] ?></td>
                    <td><?php echo $r['harga'] ?></td>
                    <td><?php echo $r['deskripsi'] ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>table