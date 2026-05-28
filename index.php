```php
<?php
session_start();
?>

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

                    <a class="nav-link active" href="index.php">
                        Home
                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="products.php">
                        Products
                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="about.php">
                        About
                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="contact.php">
                        Contact
                    </a>

                </li>

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

            </ul>

        </div>

    </div>

</nav>

<!-- HERO -->

<section class="hero">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-7">

                <span class="hero-tag">
                    Indonesian Premium Coffee
                </span>

                <h1 class="hero-title mt-3">

                    Premium Coffee Beans
                    From Indonesia

                </h1>

                <p class="hero-text mt-4">

                    We provide high quality coffee beans,
                    roasted beans, and ground coffee products
                    from selected Indonesian plantations for
                    local and international markets.

                </p>

                <a href="products.php"
                class="btn btn-coffee mt-3">

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

            <!-- CARD 1 -->

            <div class="col-md-4 mb-4">

                <div class="card product-card shadow h-100">

                    <img src="assets/img/gayo.jpg"
                    class="product-img">

                    <div class="card-body">

                        <span class="badge bg-dark mb-2">
                            Arabica
                        </span>

                        <h4 class="fw-bold">
                            Arabica Beans
                        </h4>

                        <p>
                            Premium arabica coffee beans
                            from Aceh Gayo plantations.
                        </p>

                    </div>

                </div>

            </div>

            <!-- CARD 2 -->

            <div class="col-md-4 mb-4">

                <div class="card product-card shadow h-100">

                    <img src="assets/img/robusta.jpg"
                    class="product-img">

                    <div class="card-body">

                        <span class="badge bg-dark mb-2">
                            Robusta
                        </span>

                        <h4 class="fw-bold">
                            Robusta Coffee
                        </h4>

                        <p>
                            Strong flavor robusta coffee
                            with bold Indonesian character.
                        </p>

                    </div>

                </div>

            </div>

            <!-- CARD 3 -->

            <div class="col-md-4 mb-4">

                <div class="card product-card shadow h-100">

                    <img src="assets/img/ground.jpg"
                    class="product-img">

                    <div class="card-body">

                        <span class="badge bg-dark mb-2">
                            Ground Coffee
                        </span>

                        <h4 class="fw-bold">
                            Ground Coffee
                        </h4>

                        <p>
                            Freshly ground coffee with
                            rich aroma and smooth texture.
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
```
