```php id="m7q4ns"
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>

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

                    <a class="nav-link"
                    href="about.php">

                        About

                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link active"
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

<section class="contact-hero">

    <div class="container">

        <h1 class="fw-bold">
            Hubungi Kami
        </h1>

        <p class="mt-3">

            Hubungi kami untuk informasi produk,
            kerja sama, atau pertanyaan lainnya.

        </p>

    </div>

</section>

<!-- CONTACT -->

<section class="product-section">

    <div class="container">

        <div class="row">

            <!-- FORM -->

            <div class="col-md-7 mb-4">

                <div class="card contact-card shadow p-4">

                    <h3 class="fw-bold mb-4">

                        Kirim Pesan

                    </h3>

                    <form action="proses/kirim_pesan.php"
                    method="POST">

                        <div class="mb-3">

                            <label>
                                Nama
                            </label>

                            <input
                            type="text"
                            name="nama"
                            class="form-control"
                            required>

                        </div>

                        <div class="mb-3">

                            <label>
                                Email
                            </label>

                            <input
                            type="email"
                            name="email"
                            class="form-control"
                            required>

                        </div>

                        <div class="mb-4">

                            <label>
                                Pesan
                            </label>

                            <textarea
                            name="pesan"
                            class="form-control"
                            rows="5"
                            required></textarea>

                        </div>

                        <button class="btn btn-coffee">

                            Kirim Pesan

                        </button>

                    </form>

                </div>

            </div>

            <!-- INFO -->

            <div class="col-md-5">

                <div class="contact-info shadow p-4 mb-4">

                    <h4 class="fw-bold mb-4">

                        Informasi Kontak

                    </h4>

                    <p>
                        📍 Soreang, Kabupaten Bandung
                    </p>

                    <p>
                        📞 +62 823 3304 4461
                    </p>

                    <p>
                        ✉️ coffeecompany@gmail.com
                    </p>

                    <p>
                        ⏰ 08.00 - 20.00 WIB
                    </p>

                </div>

                <!-- MAP -->

                <div class="maps shadow">

                    <iframe
                    src="https://www.google.com/maps?q=Soreang%20Bandung&output=embed"
                    width="100%"
                    height="320"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy">

                    </iframe>

                </div>

            </div>

        </div>

    </div>

</section>

<section class="cta">

<div class="container">

<h2>
Ready To Enjoy Premium Coffee?
</h2>

<p class="mt-3 mb-4">
Nikmati kopi pilihan terbaik dengan kualitas premium.
</p>

<a href="products.php" class="btn btn-coffee">
Shop Now
</a>

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
