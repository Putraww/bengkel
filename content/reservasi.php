<?php
include "admin/koneksi/koneksi.php";

$querry = mysqli_query($koneksi, "SELECT reservasi.*, kendaraan.nama_kendaraan FROM reservasi JOIN kendaraan ON reservasi.id_kendaraan = kendaraan.id ORDER BY reservasi.id DESC");

if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = mysqli_query($koneksi, "DELETE FROM reservasi WHERE id ='$id'");
    header('location:?pg=reservasi&hapus=berhasil');

}

if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $telp = $_POST['telp'];
    $id_kendaraan = $_POST['id_kendaraan'];
    $tanggal = $_POST['tanggal'];
    $waktu = $_POST['waktu'];
    $deskripsi = $_POST['deskripsi'];
    //MASUKKAN KE DALAM TABEL reservasi (FIELD YANG AKAN DI MASUKKAN)
    //VALUE (INPUTAN MASING-MASING KOLOM)

    $insert = mysqli_query($koneksi, "INSERT INTO reservasi (nama, email, alamat, telp, id_kendaraan, tanggal, waktu, deskripsi ) VALUES ('$nama','$email','$alamat','$telp','$id_kendaraan','$tanggal','$waktu','$deskripsi')");

    header('Location: ?pg=done-reservasi&pesan=tambah-berhasil');

}
$queryReservasi = mysqli_query($koneksi, "SELECT * FROM reservasi ORDER BY id DESC")

    ?>
<div class="py-5">
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="" method="post" id="reservasi">
                    <h2 align="center" style="color:red">Data Diri & Booking Service</h2><br><br>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <label for="">Nama Lengkap :</label>
                                    <input type="text" name="nama" required class="form-control"
                                        placeholder="Masukkan Nama Lengkap">
                                </div>
                                <div class="form-group">
                                    <label for="">Email :</label>
                                    <input type="text" name="email" required class="form-control"
                                        placeholder="Masukkan Email">
                                </div>
                                <div class="form-group">
                                    <label for="">Alamat :</label>
                                    <input type="text" name="alamat" required class="form-control"
                                        placeholder="Alamat Lengkap">
                                </div>
                                <div class=" form-group">
                                    <label for="">Nomor Telepon:</label>
                                    <input type="tel" name="telp" required class="form-control"
                                        placeholder="08XXXXXXXXXX">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="mb-1 py-2">
                                    <?php
                                    $queryOpt = mysqli_query($koneksi, "SELECT * FROM kendaraan");
                                    // var_dump($row); untuk mengecek
                                    ?>
                                    <option>Jenis Kendaraan :</option>
                                    <select class="form-control" name="id_kendaraan" id="id_kendaraan">
                                        <option value="">--- Pilih Jenis Kendaraan ---</option>
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
                                    <label for="">Tanggal :</label>
                                    <input type="date" name="tanggal" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Waktu :</label>
                                    <input type="time" name="waktu" required class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="">Deskripsi Masalah Motor :</label>
                                    <textarea id="deskripsi" name="deskripsi" rows="1" required
                                        class="form-control"></textarea>
                                </div>
                            </div>
                        </div>

                        <div align="center" class="py-4">
                            <button type="submit" name="simpan" class="btn btn-danger form-control">Kirim
                            </button>
                        </div>
                </form>


            </div>
        </div>
    </div>
</div>