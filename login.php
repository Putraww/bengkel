<?php
session_start();
include "koneksi/koneksi.php";
if (isset($_POST['login'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = sha1($_POST['password']);

    $query = mysqli_query($koneksi, "SELECT * FROM member WHERE user.email = '$email'");
    if (mysqli_num_rows($query) > 0) {
        $dataUser = mysqli_fetch_assoc($query);
        if ($dataUser['password'] == $password) {
            $_SESSION['nama'] = $dataUser['nama'];
            $_SESSION['email'] = $dataUser['email'];
            $_SESSION['id_level'] = $dataUser['id_level'];
            header('location:?pg=home');
            exit;
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f0f0f0;
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh;
        margin: 0;
    }

    .login-container {
        background-color: #fff;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        width: 300px;
    }

    form {
        display: flex;
        flex-direction: column;
    }

    h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .input-group {
        margin-bottom: 10px;
    }

    label {
        margin-bottom: 5px;
    }

    input {
        padding: 5px;
        width: 96%;
        border: 1px solid #ccc;
        border-radius: 3px;
        font-size: 14px;
    }

    button {
        width: 100%;
        padding: 10px;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 3px;
        cursor: pointer;
        font-size: 14px;
    }

    button:hover {
        background-color: #0056b3;
    }
    </style>
    <div class="login-container">
        <form id="login-form" action="" method="post">
            <h2>Login</h2>

            <div class="input-group">
                <label for="email">Email</label>
                <input type="text" id="email" name="email" required>
            </div>
            <div class="input-group">
                <label for="password">Password</label>
                <input type="password" id="password" name="password" required>
            </div>

            <button type="submit">Login</button>
        </form>
    </div>
</body>

</html>