<?php
$querry = mysqli_query($koneksi, "SELECT reservasi.*, kendaraan.nama_kendaraan FROM reservasi JOIN kendaraan ON reservasi.id_kendaraan = kendaraan.id ORDER BY reservasi.id DESC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM reservasi WHERE id ='$id'");
    header('location:?pg=reservasi&hapus=berhasil');
}
?>
<div class="mb-3" align="right">
    <a href="?pg=tambah-reservasi" class="btn btn-primary">Tambah Pengguna</a>
</div>
<table class="table table-border">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>kendaraan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        while ($row = mysqli_fetch_assoc($querry)): ?>
        <!-- mysqli_fetch_assoc($querry) digunakan untuk mengambil atau memunculkan data -->
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nama_lengkap'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['nama_kendaraan'] ?></td>
            <td><a href="?pg=tambah-reservasi&edit=<?php echo $row['id']; ?>" class="btn btn-xs btn-success">Edit</a>|<a
                    onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"
                    href="?pg=reservasi&delete=<?php echo $row['id'] ?>" class="btn btn-xs btn-danger">Delete</a>
            </td>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>

<!-- WHERE MENGAMBIL SELURUH ROW -->