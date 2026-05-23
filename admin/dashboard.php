<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>

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

        .topbar{
            background-color: white;
            padding: 20px;
            border-radius: 15px;
            margin-bottom: 30px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }

        /* CARD */

        .dashboard-card{
            border: none;
            border-radius: 20px;
            padding: 30px;
            color: white;
            transition: 0.3s;
        }

        .dashboard-card:hover{
            transform: translateY(-5px);
        }

        .brown{
            background-color: #6f4e37;
        }

        .dark{
            background-color: #3e2723;
        }

        .coffee{
            background-color: #8b5e3c;
        }

    </style>

</head>
<body>


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

?>
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

    <a href="#">
        Logout
    </a>

</div>

<!-- CONTENT -->

<div class="content">

    <!-- TOPBAR -->

    <div class="topbar">

        <h3 class="fw-bold">
            Dashboard
        </h3>

        <p>
            Welcome back, Admin.
        </p>

    </div>

    <!-- CARD -->

    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="dashboard-card brown">

                <h5>
                    Total Products
                </h5>

                <h1 class="fw-bold">
                    12
                </h1>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="dashboard-card dark">

                <h5>
                    Coffee Categories
                </h5>

                <h1 class="fw-bold">
                    5
                </h1>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="dashboard-card coffee">

                <h5>
                    Messages
                </h5>

                <h1 class="fw-bold">
                    8
                </h1>

            </div>

        </div>

    </div>

    <!-- TABLE -->

    <div class="card border-0 shadow rounded-4 p-4">

        <div class="d-flex justify-content-between align-items-center mb-4">

            <h4 class="fw-bold">
                Product Management
            </h4>

            <a href="tambah_produk.php" class="btn btn-dark">
                + Add Product
            </a>

        </div>

        <p>
            Manage coffee beans, roasted beans, and ground coffee products.
        </p>

    </div>

</div>

</body>
</html>