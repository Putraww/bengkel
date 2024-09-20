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

// proses login
if (isset($_POST['submit'])) {
  $email = anti_inject($_POST['email']);
  $password = anti_inject($_POST['password']);

  // cek apakah email dan password cocok
  $query = "SELECT * FROM user WHERE email = '$email' AND password = '$password'";
  $result = mysqli_query($conn, $query);
  if (mysqli_num_rows($result) > 0) {
    $member = mysqli_fetch_assoc($result);
    session_start();
    $_SESSION['nama_lengkap'] = $member['nama_lengkap'];
    $_SESSION['email'] = $member['email'];
    echo "<script>alert('Login berhasil!');</script>";
    header("Location: index.php");
    exit;
  } else {
    echo "<script>alert('Email atau password salah!');</script>";
  }
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Login User</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"> -->
</head>

<body>
    <div class="container"><br><br>
        <h2>Login User</h2><br><br>
        <form action="" method="post">
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
            <button type="submit" class="py-1 btn btn-danger" name="submit">Login</button><br><br><br><br>
        </form>
    </div>
</body>

</html>