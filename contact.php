<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
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
                    <a class="nav-link active" href="contact.php">Contact</a>
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

    <div class="container text-center">

        <h1 class="fw-bold">
            Contact Us
        </h1>

        <p class="mt-3">
            Get in touch with us for coffee inquiries and partnerships.
        </p>

    </div>

</section>

<!-- CONTACT SECTION -->

<section class="product-section">

    <div class="container">

        <div class="row">

            <!-- FORM -->

            <div class="col-md-7 mb-4">

                <div class="card shadow p-4">

                    <h3 class="fw-bold mb-4">
                        Send Message
                    </h3>

                    <form action="proses/kirim_pesan.php" method="POST">

                        <div class="mb-3">

                            <label>Name</label>

                            <input
                            type="text"
                            name="nama"
                            class="form-control"
                            required>

                        </div>

                        <div class="mb-3">

                            <label>Email</label>

                            <input
                            type="email"
                            name="email"
                            class="form-control"
                            required>

                        </div>

                        <div class="mb-3">

                            <label>Message</label>

                            <textarea
                            name="pesan"
                            class="form-control"
                            rows="5"
                            required></textarea>

                        </div>

                        <button class="btn btn-coffee">
                            Send Message
                        </button>

                    </form>

                </div>

            </div>

            <!-- INFO -->

            <div class="col-md-5">

                <div class="card shadow p-4 mb-4">

                    <h4 class="fw-bold mb-3">
                        Contact Information
                    </h4>

                    <p>
                        📍 Jakarta, Indonesia
                    </p>

                    <p>
                        📞 +62 812 3456 7890
                    </p>

                    <p>
                        ✉️ coffeecompany@gmail.com
                    </p>

                </div>

                <div class="card shadow overflow-hidden">

                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d126920.74303601944!2d106.718927!3d-6.229728!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f3e5f0d0f1bb%3A0xb1f8d28b383e1287!2sJakarta!5e0!3m2!1sen!2sid!4v1710000000000!5m2!1sen!2sid"
                        width="100%"
                        height="300"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy">
                    </iframe>

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