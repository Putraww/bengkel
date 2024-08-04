<?php
if (isset($_POST['simpan'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $insert = mysqli_query($koneksi, "INSERT INTO contact (nama_lengkap,email,pesan) VALUES ('$nama_lengkap', '$email', '$pesan')");
    header("location:?pg=contact&insert=berhasil");
}
if (isset($_GET['edit'])) {
    $id = $_GET['edit'];
    $edit = mysqli_query($koneksi, "SELECT * FROM contact WHERE id='$id'");
    $rowEdit = mysqli_fetch_assoc($edit);
}
if (isset($_POST['edit'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];
    $update = mysqli_query($koneksi, "UPDATE contact SET nama_lengkap='$nama_lengkap', email='$email', pesan='$pesan' WHERE id='$id'");
    header("location:?pg=contact&update=berhasil");
    // sebelum where tidak boleh ada tanda koma
}
?>

<form action="" method="post">
    <div class="mb-3">
        <label for="">Nama Lengkap</label>
        <input value="<?php echo isset($_GET['edit']) ? $rowEdit['nama_lengkap'] : '' ?>" type="text" class="form-control" name="nama_lengkap" placeholder="Masukkan Nama_Lengkap">
    </div>
    <div class="mb-3">
        <label for="">email</label>
        <textarea type="text" class="form-control" name="email" placeholder="Masukkan Email"><?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?></textarea>
    </div>
    <div class="mb-3">
        <label for="">Pesan</label>
        <textarea type="text" class="form-control" name="pesan" placeholder="Masukkan Pesan"><?php echo isset($_GET['edit']) ? $rowEdit['pesan'] : '' ?></textarea>
    </div>
    <div class="mb-3">
        <input type="submit" name="<?php echo isset($_GET['edit']) ? 'edit' : 'simpan' ?>" value="Simpan" class="btn btn-primary">
        <a href="?pg=contact">Kembali</a>
    </div>
</form>

<!-- (?) diartikan dalam penggunaan short cut artinya adalah maka -->
<!-- (value) yg muncul kepada user -->
<!-- action short cut berguna untuk menggunakan 2 actio dalam 1 syntax dmn ketika action pertama tidak terpenuhi maka action kedua akan terpenuhi -->