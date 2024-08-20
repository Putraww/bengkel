<?php
include "koneksi/koneksi.php";
$querry = mysqli_query($koneksi, "SELECT * FROM comment ORDER BY id DESC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM comment WHERE id ='$id'");
    header('location:?pg=comment&hapus=berhasil');
    // (*) untuk mengambil semua data yg ada pada database
}
?>
<div class="card shadow">
    <div class="card-header ">
        <h6 class="m-0 font-weight-bold text-primary">Saran Dan Keluhan DataTables</h6>
    </div>
    <div align="right" class="mb-3 px-2 py-3">
        <a href="?pg=tambah-comment" class="btn btn-primary">Tambah Saran Dan Keluhan</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>No Telpon</th>
                <th>Alamat</th>
                <th>Comment</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php $no = 1;
            while ($row = mysqli_fetch_assoc($querry)): ?>
                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $row['nama_lengkap'] ?></td>
                    <td><?= $row['email'] ?></td>
                    <td><?= $row['no_telpon'] ?></td>
                    <td><?= $row['alamat'] ?></td>
                    <td><?= $row['pesan'] ?></td>
                    <td><a href="?pg=tambah-comment&edit=<?= $row['id']; ?>" class="btn btn-xs btn-success">Edit</a> |
                        <a onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"
                            href="?pg=comment&delete=<?= $row['id']; ?>" class="btn btn-xs btn-danger">Delete</a>
                    </td>
                </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>