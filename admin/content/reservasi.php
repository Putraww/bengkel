<?php
$querry = mysqli_query($koneksi, "SELECT reservasi.*, kendaraan.nama_kendaraan, kendaraan.harga FROM reservasi JOIN kendaraan ON reservasi.id_kendaraan = kendaraan.id ORDER BY reservasi.id DESC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM reservasi WHERE id ='$id'");
    header('location:?pg=reservasi&hapus=berhasil');
}
?>
<div class="card shadow">
    <div class="card-header ">
        <h6 class="m-0 font-weight-bold text-primary">Reservasi DataTables</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <div class="py-2 " align="right">
                <a href="?pg=tambah-reservasi" class="btn btn-primary">Tambah Reservasi</a>
            </div>
            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
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
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1;
                    while ($row = mysqli_fetch_assoc($querry)): ?>
                        <!-- mysqli_fetch_assoc($querry) digunakan untuk mengambil atau memunculkan data -->
                        <tr>
                            <td><?php echo $no++ ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['email'] ?></td>
                            <td><?php echo $row['alamat'] ?></td>
                            <td><?php echo $row['telp'] ?></td>
                            <td><?php echo $row['tanggal'] ?></td>
                            <td><?php echo $row['waktu'] ?></td>
                            <td><?php echo $row['nama_kendaraan'] ?></td>
                            <td><?php echo $row['harga'] ?></td>
                            <td><?php echo $row['deskripsi'] ?></td>
                            <td><a href="?pg=tambah-reservasi&edit=<?php echo $row['id']; ?>"
                                    class="btn btn-xs btn-success">Edit</a><a
                                    onclick="return confirm('apakah anda yakin untuk menghapus data ini?')"
                                    href="?pg=reservasi&delete=<?php echo $row['id'] ?>"
                                    class="btn btn-xs btn-danger">Delete</a>
                            </td>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<!-- -------------tbody--------------------------------------------------------------------------------------------------------- -->