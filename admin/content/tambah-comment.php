<?php
if (isset($_POST['simpan'])) {
    $nama_lengkap = $_POST['nama_lengkap'];
    $email = $_POST['email'];
    $pesan = $_POST['pesan'];

    $insert = mysqli_query($koneksi, "INSERT INTO comment (nama_lengkap, email, pesan) VALUES ('$nama_lengkap', '$email', '$pesan')");
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
    $pesan = $_POST['pesan'];

    $update = mysqli_query($koneksi, "UPDATE comment SET nama_lengkap='$nama_lengkap', email='$email' WHERE id='$id'");
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
        <textarea type="text" class="form-control" name="email"
            placeholder="Masukkan email"><?php echo isset($_GET['edit']) ? $rowEdit['email'] : '' ?></textarea>
    </div>
    <div class="mb-3">
        <label for="">Pesan</label>
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