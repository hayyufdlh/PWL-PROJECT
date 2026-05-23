<?php

session_start();

include 'config/koneksi.php';

if(isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($conn, "SELECT * FROM users
    WHERE username='$username'
    AND password='$password'");

    $cek = mysqli_num_rows($query);

    if($cek > 0){

        $data = mysqli_fetch_array($query);

        $_SESSION['username'] = $data['username'];
        $_SESSION['role'] = $data['role'];

        // ROLE ADMIN

        if($data['role'] == 'admin'){

            header("location:admin/dashboard.php");

        }

        // ROLE CUSTOMER

        else{

            header("location:index.php");

        }

    } else {

        $error = "Username atau Password salah";

    }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            margin: 0;
            font-family: Arial;

            background:
            linear-gradient(rgba(0,0,0,0.7),
            rgba(0,0,0,0.7)),
            url('assets/img/bg.jpg');

            background-size: cover;
            background-position: center;

            height: 100vh;

            display: flex;
            justify-content: center;
            align-items: center;
        }

        .login-box{

            width: 400px;

            background: rgba(255,255,255,0.1);

            backdrop-filter: blur(10px);

            padding: 40px;

            border-radius: 20px;

            color: white;
        }

        .form-control{

            height: 50px;

            border-radius: 10px;
        }

        .btn-login{

            width: 100%;

            height: 50px;

            border: none;

            border-radius: 10px;

            background-color: #6f4e37;

            color: white;
        }

        .btn-login:hover{

            background-color: #8b5e3c;
        }

    </style>

</head>
<body>

<div class="login-box">

    <h2 class="text-center fw-bold mb-4">
        Login System
    </h2>

    <?php if(isset($error)) { ?>

        <div class="alert alert-danger">

            <?php echo $error; ?>

        </div>

    <?php } ?>

    <form method="POST">

        <div class="mb-3">

            <label>Username</label>

            <input type="text"
            name="username"
            class="form-control"
            required>

        </div>

        <div class="mb-4">

            <label>Password</label>

            <input type="password"
            name="password"
            class="form-control"
            required>

        </div>

        <button type="submit"
        name="login"
        class="btn-login">

            Login

        </button>

    </form>

</div>

</body>
</html>