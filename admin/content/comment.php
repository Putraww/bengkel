<?php
$querry = mysqli_query($koneksi, "SELECT * FROM comment ORDER BY id DESC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM comment WHERE id ='$id'");
    header('location:?pg=comment&hapus=berhasil');
    // (*) untuk mengambil semua data yg ada pada database
}
?>
<div align="right" class="mb-3">
    <a href="?pg=tambah-comment" class="btn btn-primary">Tambah Comment</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Email</th>
            <th>Pesan</th>
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
            <td><?= $row['pesan'] ?></td>
            <td><a href="?pg=tambah-comment&edit=<?= $row['id']; ?>" class="btn btn-xs btn-success">Edit</a> |
                <a onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"
                    href="?pg=comment&delete=<?= $row['id']; ?>" class="btn btn-xs btn-danger">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>