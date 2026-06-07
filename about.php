```php id="uwt6pz"
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

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

        <button class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">

                    <a class="nav-link"
                    href="index.php">

                        Home

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link"
                    href="products.php">

                        Products

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link active"
                    href="about.php">

                        About

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link"
                    href="contact.php">

                        Contact

                    </a>

                </li>

                <?php if(isset($_SESSION['role'])) { ?>

                    <li class="nav-item">

                        <a class="nav-link"
                        href="logout.php">

                            Logout

                        </a>

                    </li>

                <?php } else { ?>

                    <li class="nav-item">

                        <a class="nav-link"
                        href="login.php">

                            Login

                        </a>

                    </li>

                <?php } ?>

            </ul>

        </div>

    </div>

</nav>

<!-- HERO -->

<section class="about-hero">

    <div class="container">

        <h1 class="fw-bold">
            Tentang Kami
        </h1>

        <p class="mt-3">

            Menyediakan produk kopi dengan kualitas
            yang terjaga dan cita rasa yang khas.

        </p>

    </div>

</section>

<!-- ABOUT -->

<section class="product-section">

    <div class="container">

        <div class="row align-items-center">

            <div class="col-md-6 mb-4">

                <img
                src="assets/img/bg.jpeg"
                class="img-fluid shadow about-img">

            </div>

            <div class="col-md-6">

                <span class="hero-tag">
                    Coffee Supplier
                </span>

                <h2 class="fw-bold mt-4 mb-4">

                    Tentang Coffee Company

                </h2>

                <p>

                    Coffee Company menyediakan produk kopi
                    berupa biji kopi dan bubuk kopi dengan
                    kualitas yang terjaga dan aroma khas.

                </p>

                <p>

                    Kami fokus menghadirkan produk kopi yang
                    cocok dinikmati sehari-hari dengan proses
                    pengolahan yang baik dan bahan pilihan.

                </p>

                <p>

                    Produk kami dapat digunakan untuk kebutuhan
                    pribadi, cafe, maupun usaha kopi lainnya.

                </p>

            </div>

        </div>

    </div>

</section>

<!-- STATISTIC -->

<section class="pb-5">

    <div class="container">

        <div class="row text-center">

            <div class="col-md-4 mb-4">

                <div class="number-box shadow">

                    <h1 class="fw-bold">
                        100+
                    </h1>

                    <p class="mb-0">
                        Pelanggan
                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="number-box shadow">

                    <h1 class="fw-bold">
                        2
                    </h1>

                    <p class="mb-0">
                        Produk Utama
                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="number-box shadow">

                    <h1 class="fw-bold">
                        100%
                    </h1>

                    <p class="mb-0">
                        Biji Kopi Pilihan
                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- VISI MISI -->

<section class="vision-section py-5 text-white">

    <div class="container">

        <div class="row">

            <div class="col-md-6 mb-4">

                <div class="vision-box">

                    <h3 class="fw-bold mb-4">

                        Visi

                    </h3>

                    <p>

                        Menjadi penyedia produk kopi yang
                        dipercaya dengan kualitas yang baik
                        dan pelayanan yang maksimal.

                    </p>

                </div>

            </div>

            <div class="col-md-6 mb-4">

                <div class="vision-box">

                    <h3 class="fw-bold mb-4">

                        Misi

                    </h3>

                    <ul>

                        <li>
                            Menyediakan produk kopi berkualitas.
                        </li>

                        <li>
                            Menjaga kualitas produk dan pelayanan.
                        </li>

                        <li>
                            Menghadirkan aroma dan rasa kopi terbaik.
                        </li>

                        <li>
                            Memberikan pengalaman menikmati kopi yang nyaman.
                        </li>

                    </ul>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- WHY CHOOSE -->

<section class="product-section">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">

                Kenapa Memilih Kami

            </h2>

            <p>

                Produk kopi dengan kualitas dan aroma yang terjaga.

            </p>

        </div>

        <div class="row">

            <div class="col-md-4 mb-4">

                <div class="card why-card shadow p-4 h-100">

                    <h4 class="fw-bold mb-3">

                        Bahan Pilihan

                    </h4>

                    <p>

                        Menggunakan biji kopi pilihan dengan
                        kualitas yang baik.

                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="card why-card shadow p-4 h-100">

                    <h4 class="fw-bold mb-3">

                        Aroma Khas

                    </h4>

                    <p>

                        Memiliki aroma kopi yang khas
                        dan nyaman dinikmati.

                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="card why-card shadow p-4 h-100">

                    <h4 class="fw-bold mb-3">

                        Kualitas Terjaga

                    </h4>

                    <p>

                        Produk dikemas dengan baik agar
                        kualitas tetap terjaga.

                    </p>

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
