<?php
if (isset($_POST['simpan'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $id_kendaraan = $_POST['id_kendaraan'];

    //MASUKKAN KE DALAM TABEL USER (FIELD YANG AKAN DI MASUKKAN)
    //VALUE (INPUTAN MASING-MASING KOLOM)

    $insert = mysqli_query($koneksi, "INSERT INTO user (nama, id_kendaraan, email, alamat,no_telpon) VALUES ('$nama',$id_kendaraan,'$email','$alamat','$no_telpon')");
    if (!$insert) {
        header("location:?pg=tambah-user&pesan=tambah-gagal");
    } else {
        header("location:?pg=user&pesan=tambah-berhasil");
    }
}


if (isset($_GET['edit'])) {
    $id = $_GET['edit'];

    $edit = mysqli_query($koneksi, "SELECT * FROM user WHERE id = '$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}

if (isset($_POST['edit'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $id_kendaraan = $_POST['id_kendaraan'];
    $id = $_GET['edit'];

    $update = mysqli_query($koneksi, "UPDATE user SET 
    nama='$nama', id_kendaraan='$id_kendaraan', 
    email='$email', alamat='$alamat',no_telpon='$no_telpon' WHERE id='$id'");
    header("location:?pg=user&update=berhasi");
}


?>

<form action="" method="post">
    <div class="mb-3">
        <label for="">Nama Lengkap</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['nama'] : '' ?>" type="text" class="form-control"
            placeholder="Masukkan Nama Lengkap Anda" name="nama">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>" type="email" class="form-control"
            placeholder="Masukkan Email Anda" name="email">
    </div>
    <div class="mb-3">
        <label for="">Password</label>
        <input value="" type="password" class="form-control" placeholder="Masukkan Password Anda" name="password">
    </div>
    <div class="mb-3">
        <?php
        $queryOpt = mysqli_query($koneksi, "SELECT * FROM level");

        // var_dump($row); untuk mengecek
        ?>
        <select class="form-control" name="id_level" id="id_level">
            <option value="">-- pilih level --</option>
            <?php
            while ($row = mysqli_fetch_assoc($queryOpt)):
                ?>
                <option value="<?= $row['id'] ?>"><?= $row['nama_level'] ?></option>
            <?php endwhile; ?>
        </select>
    </div>

    <div class="mb-3">
        <input type="submit" class="btn btn-primary" value="Simpan"
            name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>">
    </div>
</form>