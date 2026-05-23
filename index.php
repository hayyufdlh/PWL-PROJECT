<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Coffee Company</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<!-- NAVBAR -->

<?php
session_start();
?>

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
                    <a class="nav-link" href="products.php">Products</a>
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

<?php if(isset($_SESSION['role'])) { ?>

    <li class="nav-item">

        <a class="nav-link" href="logout.php">
            Logout
        </a>

    </li>

<?php } else { ?>

    <li class="nav-item">

        <a class="nav-link" href="login.php">
            Login
        </a>

    </li>

<?php } ?>

<!-- HERO -->

<section class="hero">

    <div class="container">

        <div class="row">

            <div class="col-md-7">

                <h1>
                    Premium Coffee Beans <br>
                    From Indonesia
                </h1>

                <p>
                    We provide high quality coffee beans, ground coffee,
                    and selected Indonesian coffee products for local
                    and international markets.
                </p>

                <a href="products.php" class="btn btn-coffee mt-3">
                    Explore Products
                </a>

            </div>

        </div>

    </div>

</section>

<!-- PRODUCT PREVIEW -->

<section class="product-section">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Our Coffee Products
            </h2>

            <p>
                Premium beans and ground coffee with authentic taste.
            </p>

        </div>

        <div class="row">

            <div class="col-md-4 mb-4">

                <div class="card shadow">

                    <img src="assets/img/gayo.jpg">

                    <div class="card-body">

                        <h4>
                            Arabica Beans
                        </h4>

                        <p>
                            Premium arabica coffee beans from Aceh Gayo.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="card shadow">

                    <img src="assets/img/robusta.jpg">

                    <div class="card-body">

                        <h4>
                            Robusta Coffee
                        </h4>

                        <p>
                            Strong flavor robusta coffee from Indonesia.
                        </p>

                    </div>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="card shadow">

                    <img src="assets/img/ground.jpg">

                    <div class="card-body">

                        <h4>
                            Ground Coffee
                        </h4>

                        <p>
                            Freshly ground coffee with rich aroma.
                        </p>

                    </div>

                </div>

            </div>

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