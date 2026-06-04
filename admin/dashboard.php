<?php
session_start();

/** @var mysqli $conn */
if(!isset($_SESSION['role'])){
    header("location:../login.php");
    exit;
}

if($_SESSION['role'] != 'admin'){
    header("location:../index.php");
    exit;
}

include '../config/koneksi.php';

/* HITUNG DATA */

$totalProduk = mysqli_num_rows(
    mysqli_query($conn,"SELECT * FROM produk")
);

$totalPesanan = mysqli_num_rows(
    mysqli_query($conn,"SELECT * FROM pesanan")
);

$totalReview = mysqli_num_rows(
    mysqli_query($conn,"SELECT * FROM reviews")
);

/* PESANAN TERBARU */

$pesanan = mysqli_query(
    $conn,
    "SELECT * FROM pesanan
    ORDER BY id DESC
    LIMIT 5"
);
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f1ea;
    margin:0;
}

.sidebar{
    width:250px;
    height:100vh;
    position:fixed;
    background:#2b1d16;
}

.logo{
    color:white;
    text-align:center;
    padding:30px 0;
    font-weight:bold;
    font-size:24px;
}

.sidebar a{
    display:block;
    color:white;
    text-decoration:none;
    padding:15px 25px;
}

.sidebar a:hover{
    background:#6f4e37;
}

.content{
    margin-left:250px;
    padding:40px;
}

.card-dashboard{
    border:none;
    border-radius:20px;
    color:white;
    padding:30px;
}

.c1{
    background:#6f4e37;
}

.c2{
    background:#3e2723;
}

.c3{
    background:#8b5e3c;
}

.table-card{
    background:white;
    border-radius:20px;
    padding:25px;
}

</style>
</head>
<body>

<div class="sidebar">

    <div class="logo">
        Coffee Admin
    </div>

    <a href="dashboard.php">
        Dashboard
    </a>

    <a href="produk.php">
        Products
    </a>

    <a href="admin_pesanan.php">
        Orders
    </a>

    <a href="../logout.php">
        Logout
    </a>

</div>

<div class="content">

    <h2 class="fw-bold mb-4">
        Dashboard
    </h2>

    <div class="row">

        <div class="col-md-4 mb-4">

            <div class="card-dashboard c1">

                <h5>Total Produk</h5>

                <h1>
                    <?php echo $totalProduk; ?>
                </h1>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card-dashboard c2">

                <h5>Total Pesanan</h5>

                <h1>
                    <?php echo $totalPesanan; ?>
                </h1>

            </div>

        </div>

        <div class="col-md-4 mb-4">

            <div class="card-dashboard c3">

                <h5>Total Review</h5>

                <h1>
                    <?php echo $totalReview; ?>
                </h1>

            </div>

        </div>

    </div>

    <div class="table-card shadow">

        <h4 class="fw-bold mb-4">
            Pesanan Terbaru
        </h4>

        <table class="table">

            <tr>

                <th>Nama</th>
                <th>Produk</th>
                <th>Pembayaran</th>
                <th>Status</th>

            </tr>

            <?php while($p = mysqli_fetch_array($pesanan)){ ?>

            <tr>

                <td>
                    <?php echo $p['nama']; ?>
                </td>

                <td>
                    <?php echo $p['produk']; ?>
                </td>

                <td>
                    <?php echo $p['payment']; ?>
                </td>

                <td>

                    <span class="badge bg-warning text-dark">

                        <?php echo $p['status_pesanan']; ?>

                    </span>

                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

</div>

</body>
</html>