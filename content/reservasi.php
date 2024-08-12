<?php

$querry = mysqli_query($koneksi, "SELECT reservasi.*, kendaraan.nama_kendaraan FROM reservasi JOIN kendaraan ON reservasi.id_kendaraan = kendaraan.id ORDER BY reservasi.id DESC");
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM reservasi WHERE id ='$id'");
    header('location:?pg=reservasi&hapus=berhasil');
}



include "admin/koneksi/koneksi.php";
// $querry = mysqli_query($koneksi, "SELECT reservasi.*, kendaraan.nama_kendaraan FROM reservasi JOIN kendaraan ON reservasi.id_kendaraan = kendaraan.id ORDER BY reservasi.id DESC");
// if (isset($_GET['delete'])) {
//     $id = $_GET['delete'];
//     $delete = mysqli_query($koneksi, "DELETE FROM reservasi WHERE id ='$id'");
//     header('location:?pg=reservasi&hapus=berhasil');
// }
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $tanggal = $_POST['tanggal'];
    $no_telpon = $_POST['no_telpon'];
    $id_kendaraan = $_POST['id_kendaraan'];

    //MASUKKAN KE DALAM TABEL reservasi (FIELD YANG AKAN DI MASUKKAN)
    //VALUE (INPUTAN MASING-MASING KOLOM)

    $insert = mysqli_query($koneksi, "INSERT INTO reservasi (nama, id_kendaraan, email, pesan, tanggal, no_telpon) VALUES ('$nama',$id_kendaraan,'$email','$pesan','$tanggal','$no_telpon')");

    header("location:?pg=home&pesan=tambah-berhasil");

}


?>
<div class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="" method="post">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                <label for="name">Nama Lengkap :</label>
                                <input type="text" name="name" required class="form-control"
                                    placeholder="Masukkan Nama Lengkap">
                            </div>
                            <div class="form-group">
                                <label for="email">Email :</label>
                                <input type="text" name="email" required class="form-control"
                                    placeholder="Masukkan Email">
                            </div>
                            <div class="form-group">
                                <label for="alamat">Alamat :</label>
                                <input type="text" name="alamat" required class="form-control"
                                    placeholder="Alamat Lengkap">
                            </div>
                            <div class=" form-group">
                                <label for="phone">Nomor Telepon:</label>
                                <input type="tel" id="phone" name="phone" required class="form-control"
                                    placeholder="08XXXXXXXXXX">
                            </div>
                        </div>

                        <div class="col-6">
                            <div class="mb-1 py-4">
                                <?php
                                $queryOpt = mysqli_query($koneksi, "SELECT * FROM kendaraan");

                                // var_dump($row); untuk mengecek
                                ?>
                                <select class="form-control" name="id_kendaraan" id="id_kendaraan">
                                    <option value="">Pilih kendaraan</option>
                                    <?php
                                    while ($row = mysqli_fetch_assoc($queryOpt)):
                                        ?>
                                        <option value="<?= $row['id'] ?>">Jenis kendaraan :
                                            <?= $row['nama_kendaraan'] ?> |
                                            Harga :
                                            <?= $row['harga'] ?>
                                        </option>
                                    <?php endwhile; ?>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="date">Tanggal :</label>
                                <input type="date" id="date" name="date" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="time">Waktu :</label>
                                <input type="time" id="time" name="time" required class="form-control">
                            </div>

                            <div class="form-group">
                                <label for="description">Deskripsi Masalah Motor :</label>
                                <textarea id="description" name="description" rows="4" required
                                    class="form-control"></textarea>
                            </div>
                        </div>
                    </div>


                    <div align="center"> <button type="submit" style="background-color: red">Kirim</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>