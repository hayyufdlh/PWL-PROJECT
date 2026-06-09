<?php

session_start();

include 'config/koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query(
        $conn,
        "SELECT * FROM users
        WHERE username='$username'
        AND password='$password'"
    );

    $cek = mysqli_num_rows($query);

    if($cek > 0){

        $data = mysqli_fetch_array($query);

        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        if($data['role'] == 'admin'){

            header("location:admin/dashboard.php");
            exit;

        }else{

            header("location:index.php");
            exit;

        }

    }else{

        $error = "Username atau Password salah";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width,
    initial-scale=1.0">

    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="login-page">

<div class="login-box">


    <div class="login-title">
        Login
    </div>

    <div class="login-subtitle">
        Selamat datang kembali
    </div>

    <?php if(isset($error)){ ?>

        <div class="alert alert-danger">

            <?php echo $error; ?>

        </div>

    <?php } ?>

    <form method="POST">

        <div class="mb-3">

            <label>

                Username

            </label>

            <input
            type="text"
            name="username"
            class="form-control"
            required>

        </div>

        <div class="mb-4">

            <label>

                Password

            </label>

            <input
            type="password"
            name="password"
            class="form-control"
            required>

        </div>

        <button
        type="submit"
        name="login"
        class="btn-login">

            Login

        </button>

        <div class="login-divider">

            Belum punya akun?

        </div>

        <a
        href="register.php"
        class="btn-home">

            Register Account

        </a>

        <a
        href="index.php"
        class="btn-home">

            ← Back to Home

        </a>

    </form>

</div>

</body>

</html>