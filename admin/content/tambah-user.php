<?php
if (isset($_POST['simpan'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $insert = mysqli_query($koneksi, "INSERT INTO user (username, email) VALUES ('$username', '$email')");
    header("location:?pg=user&insert=berhasil");
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = mysqli_query($koneksi, "SELECT * FROM user WHERE id='$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}
if (isset($_POST['edit'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $update = mysqli_query($koneksi, "UPDATE user SET username='$username', email='$email' WHERE id='$id'");
    header("location:?pg=user&update=berhasil");
    // sebelum where tidak boleh ada tanda koma
}
?>

<form action="" method="post">
    <div class="mb-3">
        <label for="">Nama Lengkap</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['username'] : '' ?>" type="text" class="form-control"
            name="username" placeholder="Masukkan Nama user">
    </div>
    <div class="mb-3">
        <label for="">Email</label>
        <textarea type="text" class="form-control" name="email"
            placeholder="Masukkan email"><?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?></textarea>
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