<?php

session_start();

if(!isset($_SESSION['role'])){

    header("location:../login.php");

    exit;

}

if($_SESSION['role'] != 'admin'){

    header("location:../index.php");

    exit;

}

include '../config/koneksi.php';

/** @var mysqli $conn */

$data = mysqli_query($conn, "SELECT * FROM messages ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Messages</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            margin: 0;
            font-family: Arial;
            background-color: #f5f1ea;
        }

        /* SIDEBAR */

        .sidebar{
            width: 250px;
            height: 100vh;
            background-color: #2b1d16;
            position: fixed;
            padding-top: 30px;
        }

        .sidebar h2{
            color: white;
            text-align: center;
            margin-bottom: 40px;
        }

        .sidebar a{
            display: block;
            color: white;
            text-decoration: none;
            padding: 15px 30px;
            transition: 0.3s;
        }

        .sidebar a:hover{
            background-color: #6f4e37;
        }

        /* CONTENT */

        .content{
            margin-left: 250px;
            padding: 40px;
        }

        /* CARD */

        .message-card{
            background-color: white;
            border-radius: 20px;
            padding: 25px;
            margin-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

    </style>

</head>
<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <h2>
        Coffee Admin
    </h2>

    <a href="dashboard.php">
        Dashboard
    </a>

    <a href="produk.php">
        Products
    </a>

    <a href="messages.php">
        Messages
    </a>

    <a href="../logout.php">
        Logout
    </a>

</div>

<!-- CONTENT -->

<div class="content">

    <h2 class="fw-bold mb-4">
        Customer Messages
    </h2>

    <?php while($d = mysqli_fetch_array($data)) { ?>

    <div class="message-card">

        <h5 class="fw-bold">

            <?php echo $d['nama']; ?>

        </h5>

        <small>

            <?php echo $d['email']; ?>

        </small>

        <p class="mt-3">

            <?php echo $d['pesan']; ?>

        </p>

        <small class="text-muted">

            <?php echo $d['tanggal']; ?>

        </small>

    </div>

    <?php } ?>

</div>

</body>
</html>