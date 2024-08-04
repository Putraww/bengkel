<?php
$querry = mysqli_query($koneksi, "SELECT * FROM contact ORDER BY id DESC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM contact WHERE id ='$id'");
    header('location:?pg=contact&hapus=berhasil');
    // (*) untuk mengambil semua data yg ada pada database
}
?>
<div align="right" class="mb-3">
    <a href="?pg=tambah-contact" class="btn btn-primary">Tambah Contact</a>
</div>
<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Pesan</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1;
        while ($row = mysqli_fetch_assoc($querry)) : ?>
        <tr>
            <td><?php echo $no++ ?></td>
            <td><?php echo $row['nama_lengkap'] ?></td>
            <td><?php echo $row['email'] ?></td>
            <td><?php echo $row['pesan'] ?></td>
            <td><a href="?pg=tambah-contact&edit=<?php echo $row['id']; ?>" class="btn btn-xs btn-success">Edit</a> |
                <a onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"
                    href="?pg=contact&delete=<?php echo $row['id']; ?>" class="btn btn-xs btn-danger">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>