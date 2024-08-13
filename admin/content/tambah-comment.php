<?php
if (isset($_POST['simpan'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $pesan = $_POST['pesan'];

    $insert = mysqli_query($koneksi, "INSERT INTO comment (nama_lengkap, email, pesan, alamat, no_telpon) VALUES ('$nama_lengkap', '$email', '$pesan','$no_telpon','$alamat')");
    header("location:?pg=comment&insert=berhasil");
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = mysqli_query($koneksi, "SELECT * FROM comment WHERE id='$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}
if (isset($_POST['edit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $no_telpon = $_POST['no_telpon'];
    $pesan = $_POST['pesan'];

    $update = mysqli_query($koneksi, "UPDATE comment SET nama_lengkap='$nama_lengkap', email='$email', pesan='$pesan', alamat='$alamat', no_telpon='$no_telpon' WHERE id='$id'");
    header("location:?pg=comment&update=berhasil");
    // sebelum where tidak boleh ada tanda koma
}
?>

<form action="" method="post">
    <div class="mb-3">
        <label for="">Nama Lengkap</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_lengkap'] : '' ?>" type="text"
            class="form-control" name="nama_lengkap" placeholder="Masukkan Comment">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?>" type="text" class="form-control"
            name="email" placeholder="Masukkan Comment">
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['alamat'] : '' ?>" type="text" class="form-control"
            name="alamat" placeholder="Masukkan Alamat">
    </div>
    <div class="mb-3">
        <label for="">No Telpon</label>
        <textarea type="text" class="form-control" name="no_telpon"
            placeholder="08XXXXXXXXXX"><?php echo isset($_GET['edit']) ? $rowEdit['no_telpon'] : '' ?></textarea>
    </div>
    <div class="mb-3">
        <label for="">Comment</label>
        <textarea type="text" class="form-control" name="pesan"
            placeholder="Masukkan Pesan"><?php echo isset($_GET['edit']) ? $rowEdit['pesan'] : '' ?></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" value="Simpan"
            class="btn btn-primary">
        <a href="?pg=comment">Kembali</a>
    </div>
</form>

<!-- (?) diartikan dalam penggunaan short cut artinya adalah maka -->
<!-- (value) yg muncul kepada comment -->
<!-- action short cut berguna untuk menggunakan 2 actio dalam 1 syntax dmn ketika action pertama tidak terpenuhi maka action kedua akan terpenuhi -->