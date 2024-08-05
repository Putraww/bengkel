<?php
session_start(); // Memulai sesi

include 'admin/koneksi/koneksi.php'; // Menghubungkan ke database

if (isset($_POST['login'])) {
    // Mengambil data dari form
    $username = mysqli_real_escape_string($koneksi, $_POST['username']);
    $password = mysqli_real_escape_string($koneksi, $_POST['password']);

    // Query untuk mengecek username dan password
    $query = "SELECT * FROM user WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);

    // Mengecek apakah username dan password cocok
    if (mysqli_num_rows($result) == 1) {
        // Menyimpan data pengguna di session
        $_SESSION['username'] = $username;
        // Redirect ke halaman yang diinginkan setelah login
        header('Location: index.php');
    } else {
        $error = "Username atau Password salah!";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login/signup page</title>
    <link rel="stylesheet" href="asset/css/andre.css">

</head>

<body>
    <!-- partial:index.partial.html -->
    !<div class="cont">
        <div class="form sign-in">
            <h2>Welcome back!</h2>
            <label>
                <span>Email</span>
                <input type="email" />
            </label>
            <label>
                <span>Password</span>
                <input type="password" />
            </label>

            <button type="button" class="submit">Sign In</button>

        </div>
        <div class="sub-cont">
            <div class="img">
                <div class="img__text m--up">
                    <h2>New here?</h2>
                    <p>Sign up and get started!</p>
                </div>
                <div class="img__text m--in">
                    <h2>One of us?</h2>
                    <p>If you already have an account, just sign in. We've missed you!</p>
                </div>
                <div class="img__btn">
                    <span class="m--up">Sign Up</span>
                    <span class="m--in">Sign In</span>
                </div>
            </div>
            <div class="form sign-up">
                <h2>Time to feel like home!</h2>
                <label>
                    <span>Name</span>
                    <input type="text" />
                </label>
                <label>
                    <span>Email</span>
                    <input type="email" />
                </label>
                <label>
                    <span>Password</span>
                    <input type="password" />
                </label>
                <button type="button" class="submit">Sign Up</button>
                <button type="button" class="fb-btn">Join with <span>Google</span></button>
            </div>
        </div>
    </div>
    <!-- partial -->
    <script src="asset/js/andre.js"></script>

</body>

</html>