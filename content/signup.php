<?php
// koneksi database
$conn = mysqli_connect("localhost:3307", "root", "", "bengkel");

// cek koneksi
if (!$conn) {
  die("Koneksi gagal: " . mysqli_connect_error());
}

// fungsi untuk menghindari injeksi SQL
function anti_inject($data)
{
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// proses registrasi
if (isset($_POST['submit'])) {
  $nama_lengkap = anti_inject($_POST['nama_lengkap']);
  $email = anti_inject($_POST['email']);
  $password = anti_inject($_POST['password']);
  $alamat = anti_inject($_POST['alamat']);


  // cek apakah email sudah digunakan
  $query = "SELECT * FROM user WHERE email = '$email'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
    echo "<script>alert('Email sudah digunakan!');</script>";
  } else {
    // simpan data ke database
    $query = "INSERT INTO user (nama_lengkap, email, password) VALUES ('$nama_lengkap', '$email', '$password')";
    mysqli_query($conn, $query);
    header('location:?pg=signin');
  }
}
echo `<script>alert('Registrasi berhasil!');</script>`;
?>

<!DOCTYPE html>
<html>

<head>
    <title>Registrasi User</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
</head>

<body>
    <div class="container"><br><br>
        <h2>Registrasi User</h2><br><br>
        <form action="" method="post">
            <div class="form-group">
                <label for="nama_lengkap">Nama Lengkap :</label>
                <input type="text" class="form-control" id="nama_lengkap" name="nama_lengkap" required
                    placeholder="Silahkan Masukkan Nama Lengkap">
            </div>
            <div class="form-group">
                <label for="email">Email :</label>
                <input type="email" class="form-control" id="email" name="email" required
                    placeholder="Silahkan Masukkan Email Anda">
            </div>
            <div class="form-group">
                <label for="password">Password :</label>
                <input type="password" class="form-control" id="password" name="password" required
                    placeholder="Silahkan Masukkan Password Anda">
            </div>
            <div class="form-group">
                <label for="alamat">Alamat :</label>
                <input type="text" class="form-control" id="alamat" name="alamat" required
                    placeholder="Silahkan Masukkan Alamat Lengkap">
            </div>
            <button type="submit" class="py-1 btn btn-danger" name="submit">Registrasi</button><br><br>
        </form>
    </div>
</body>

</html>