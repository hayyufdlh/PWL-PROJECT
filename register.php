<?php

include 'config/koneksi.php';

if(isset($_POST['register'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $cek = mysqli_query(
        $conn,
        "SELECT * FROM users
        WHERE username='$username'"
    );

    if(mysqli_num_rows($cek) > 0){

        $error = "Username sudah digunakan";

    }else{

        mysqli_query(

            $conn,

            "INSERT INTO users
            (
            username,
            password,
            role
            )

            VALUES
            (
            '$username',
            '$password',
            'customer'
            )"

        );

        echo "

        <script>

        alert('Register berhasil');

        window.location='login.php';

        </script>

        ";

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

<title>Register</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="assets/css/style.css">

</head>

<body class="login-page">

<div class="login-box">

    <div class="login-title">
        Register
    </div>

    <div class="login-subtitle">
        Buat akun Coffee Company
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
        name="register"
        class="btn-login">

            Register

        </button>

        <div class="login-divider">

            Sudah punya akun?

        </div>

        <a
        href="login.php"
        class="btn-home">

            Login Sekarang

        </a>

        <a
        href="index.php"
        class="btn-home">

            ← Kembali ke Home

        </a>

    </form>

</div>

</body>
</html>