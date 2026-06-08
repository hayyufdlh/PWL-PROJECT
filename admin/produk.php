<?php
include '../config/koneksi.php';

/** @var mysqli $conn */

$data = mysqli_query($conn, "SELECT * FROM produk");
?>

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

$data = mysqli_query($conn, "SELECT * FROM produk");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{
            margin: 0;
            font-family: Arial;
            background-color: #f5f1ea;
        }

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
        }

        .sidebar a:hover{
            background-color: #6f4e37;
        }

        .content{
            margin-left: 250px;
            padding: 40px;
        }

        table{
            background-color: white;
            border-radius: 20px;
            overflow: hidden;
        }

        img{
            border-radius: 10px;
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

</div>

<!-- CONTENT -->

<div class="content">

    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold">
            Product Management
        </h2>

        <a href="tambah_produk.php" class="btn btn-dark">
            + Add Product
        </a>

    </div>

    <table class="table table-bordered align-middle shadow">

        <tr class="table-dark">

            <th>No</th>
            <th>Image</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            <th>Stok</th>
            <th>Action</th>

        </tr>

        <?php
        $no = 1;

        while($d = mysqli_fetch_array($data)){
        ?>

        <tr>

            <td><?php echo $no++; ?></td>

            <td>

                <img src="../assets/img/<?php echo $d['gambar']; ?>" width="100">

            </td>

            <td>

                <b><?php echo $d['nama_produk']; ?></b>

            </td>

            <td>

                <?php echo $d['kategori']; ?>

            </td>

            <td>

                Rp <?php echo number_format($d['harga']); ?>

            </td>

            <td>
                <?php echo $d['stok']; ?>
            </td>

            <td>

            <a
            href="edit_produk.php?id=<?php echo $d['id']; ?>"
            class="btn btn-warning btn-sm">

                Edit

            </a>

            <a
            href="../proses/hapus.php?id=<?php echo $d['id']; ?>"
            class="btn btn-danger btn-sm"
            onclick="return confirm('Hapus produk ini?')">

                Delete

            </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>