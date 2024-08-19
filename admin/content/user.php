<?php
$querry = mysqli_query($koneksi, "SELECT * FROM user ORDER BY id DESC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM user WHERE id ='$id'");
    header('location:?pg=user&hapus=berhasil');
    // (*) untuk mengambil semua data yg ada pada database
}
?>
<div class="card shadow">
    <div class="card-header ">
        <h6 class="m-0 font-weight-bold text-primary">User DataTables</h6>
    </div>
    <div align="right" class="mb-3 py-4 px-4">
        <a href="?pg=tambah-user" class="btn btn-primary">Tambah Pengguna</a>
    </div>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama Lengkap</th>
                <th>Email</th>
                <th>Alamat</th>
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
                <td><?= $row['alamat'] ?></td>
                <td><a href="?pg=tambah-user&edit=<?= $row['id']; ?>" class="btn btn-xs btn-success">Edit</a> |
                    <a onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"
                        href="?pg=user&delete=<?= $row['id']; ?>" class="btn btn-xs btn-danger">Delete</a>
                </td>
            </tr>
            <?php endwhile; ?>
        </tbody>
    </table>
</div>