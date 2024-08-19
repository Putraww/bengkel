<?php
include "koneksi/koneksi.php";
if (isset($_POST['simpan'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = sha1($_POST['password']);
    $insert = mysqli_query($koneksi, "INSERT INTO user (nama_lengkap, email, password, alamat) VALUES ('$nama_lengkap', '$email', '$password', '$alamat')");

    if (!$insert) {
        header("location:?pg=tambah-user&pesan=tambah-gagal");
    } else {
        header("location:?pg=user&pesan=tambah-berhasil");
    }
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}
if (isset($_POST['edit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $alamat = $_POST['alamat'];
    $password = sha1($_POST['password']);
    $update = mysqli_query($koneksi, "UPDATE user SET nama_lengkap='$nama_lengkap', email='$email', password='$password',  alamat='$alamat' WHERE id='$id'");

    header("location:?pg=user&update=berhasil");
    // sebelum where tidak boleh ada tanda koma
}
?>

<form action="" method="post">
    <div class="mb-3">
        <label for="">Nama Lengkap</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_lengkap'] : '' ?>" type="text"
            class="form-control" name="nama_lengkap" placeholder="Masukkan Nama Lengkap">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <textarea type="text" class="form-control" name="email"
            placeholder="Masukkan email"><?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?></textarea>
    </div>
    <div class="mb-3">
        <label for="">Alamat</label>
        <textarea type="text" class="form-control" name="alamat"
            placeholder="Masukkan Alamat"><?php echo isset($_GET['edit']) ? $rowEdit['alamat'] : '' ?></textarea>
    </div>
    <div class="mb-3">
        <label for="">Password</label>
        <textarea type="text" class="form-control" name="pasword"
            placeholder="Masukkan Password"><?php echo isset($_GET['edit']) ? $rowEdit['password'] : '' ?></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" value="Simpan"
            class="btn btn-primary">
        <a href="?pg=user">Kembali</a>
    </div>
</form>

<!-- (?) diartikan dalam penggunaan short cut artinya adalah maka -->
<!-- (value) yg muncul kepada user -->
<!-- action short cut berguna untuk menggunakan 2 actio dalam 1 syntax dmn ketika action pertama tidak terpenuhi maka action kedua akan terpenuhi -->