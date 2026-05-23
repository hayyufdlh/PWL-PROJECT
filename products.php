<?php
include 'config/koneksi.php';

$data = mysqli_query($conn, "SELECT * FROM produk");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            Coffee Company
        </a>

        <button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="products.php">Products</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about.php">About</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>

            </ul>

        </div>

    </div>

</nav>

<!-- HEADER -->

<section class="hero">

    <div class="container text-center">

        <h1 class="fw-bold">
            Our Coffee Products
        </h1>

        <p class="mt-3">
            Premium coffee beans and ground coffee from Indonesia.
        </p>

    </div>

</section>

<!-- PRODUCT SECTION -->

<section class="product-section">

    <div class="container">

        <div class="row">

            <?php while($d = mysqli_fetch_array($data)) { ?>

            <div class="col-md-4 mb-4">

                <div class="card shadow h-100">

                    <img src="assets/img/<?php echo $d['gambar']; ?>">

                    <div class="card-body">

                        <span class="badge bg-dark mb-2">
                            <?php echo $d['kategori']; ?>
                        </span>

                        <h4 class="fw-bold">
                            <?php echo $d['nama_produk']; ?>
                        </h4>

                        <p>
                            <?php echo $d['deskripsi']; ?>
                        </p>

                        <h5 class="fw-bold mt-3">
                            Rp <?php echo number_format($d['harga']); ?>
                        </h5>

                        <button class="btn btn-coffee mt-3 w-100">
                            Order Now
                        </button>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>

</section>

<!-- FOOTER -->

<div class="footer">

    Coffee Company © 2026

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>