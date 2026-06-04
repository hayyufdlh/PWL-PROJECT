<?php
session_start();

include 'config/koneksi.php';

/* SEARCH */

if(isset($_GET['search'])){

    $search = $_GET['search'];

    $data = mysqli_query($conn,
    "SELECT * FROM produk
    WHERE nama_produk LIKE '%$search%'");

} else {

    $data = mysqli_query($conn,
    "SELECT * FROM produk");

}

/* REVIEW */

$review = mysqli_query($conn,
"SELECT * FROM reviews ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="assets/css/style.css">

    <style>

        .hero-products{

            min-height: 60vh;

            display: flex;

            align-items: center;

            justify-content: center;

            text-align: center;

            color: white;

            background-image:
            linear-gradient(
            rgba(0,0,0,0.6),
            rgba(0,0,0,0.6)
            ),

            url('assets/img/bg.jpeg');

            background-size: cover;

            background-position: center;
        }

        .search-box{

            background-color: white;

            padding: 20px;

            border-radius: 20px;

            box-shadow: 0 5px 15px rgba(0,0,0,0.08);
        }

        .search-input{

            height: 55px;

            border-radius: 12px;
        }

        .product-card{

            border: none;

            border-radius: 25px;

            overflow: hidden;

            transition: 0.4s;

            background-color: white;
        }

        .product-card:hover{

            transform: translateY(-10px);

            box-shadow: 0 10px 25px rgba(0,0,0,0.15);
        }

        .product-img{

            height: 280px;

            object-fit: cover;
        }

        .price{

            color: #6f4e37;
        }

        .modal-content{

            border-radius: 25px;

            overflow: hidden;

            border: none;
        }

        .modal-img{

            height: 420px;

            object-fit: cover;
        }

        .info-section{

            background-color: #f8f5f0;
        }

        .info-box{

            background-color: white;

            padding: 35px;

            border-radius: 20px;

            transition: 0.3s;

            height: 100%;
        }

        .info-box:hover{

            transform: translateY(-5px);
        }

        .review-section{

            background-color: #2b1d16;
        }

        .review-card{

            border: none;

            border-radius: 20px;

            transition: 0.3s;
        }

        .review-card:hover{

            transform: translateY(-5px);
        }

        .star{

            font-size: 20px;
        }

        .payment-box{

            background-color: #f8f5f0;

            border-radius: 15px;

            padding: 15px;

            margin-top: 15px;
        }

        .va-number{

            font-size: 22px;

            font-weight: bold;

            color: #6f4e37;
        }

    </style>

</head>
<body>

<!-- NAVBAR -->

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

    <div class="container">

        <a class="navbar-brand fw-bold" href="#">
            Coffee Company
        </a>

        <li class="nav-item">
            <a class="nav-link" href="cek_pesanan.php">
                Tracking
            </a>
        </li>

        <button class="navbar-toggler"
        data-bs-toggle="collapse"
        data-bs-target="#menu">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="menu">

            <ul class="navbar-nav ms-auto">

                <li class="nav-item">
                    <a class="nav-link" href="index.php">
                        Home
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" href="products.php">
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

<section class="hero-products">

    <div class="container">

        <h1 class="fw-bold">
            Produk Kopi Pilihan
        </h1>

        <p class="mt-3">

            Biji kopi dan bubuk kopi dengan aroma khas
            dan kualitas yang terjaga.

        </p>

    </div>

</section>

<!-- PRODUCT -->

<section class="product-section">

    <div class="container">

        <!-- SEARCH -->

        <div class="row justify-content-center mb-5">

            <div class="col-md-6">

                <div class="search-box">

                    <form method="GET">

                        <input
                        type="text"
                        name="search"
                        class="form-control search-input"
                        placeholder="Cari produk kopi...">

                    </form>

                </div>

            </div>

        </div>

        <!-- PRODUCT -->

        <div class="row">

            <?php while($d = mysqli_fetch_array($data)) { ?>

            <div class="col-md-6 mb-4">

                <div class="card product-card shadow h-100">

                    <img
                    src="assets/img/<?php echo $d['gambar']; ?>"
                    class="product-img">

                    <div class="card-body p-4">

                        <span class="badge bg-dark mb-3">

                            <?php echo $d['kategori']; ?>

                        </span>

                        <h3 class="fw-bold">

                            <?php echo $d['nama_produk']; ?>

                        </h3>

                        <p class="mt-3">

                            <?php echo substr($d['deskripsi'],0,120); ?>...

                        </p>

                        <p class="text-success">
                            Stok :
                            <?php echo $d['stok']; ?>
                        </p>

                        <h4 class="fw-bold mt-4 price">

                            Rp <?php echo number_format($d['harga']); ?>

                        </h4>

                        <button
                        class="btn btn-coffee mt-3"
                        data-bs-toggle="modal"
                        data-bs-target="#modal<?php echo $d['id']; ?>">

                            Lihat Detail

                        </button>

                    </div>

                </div>

            </div>

            <!-- MODAL DETAIL -->

            <div class="modal fade"
            id="modal<?php echo $d['id']; ?>">

                <div class="modal-dialog modal-lg modal-dialog-centered">

                    <div class="modal-content">

                        <img
                        src="assets/img/<?php echo $d['gambar']; ?>"
                        class="modal-img">

                        <div class="modal-body p-4">

                            <span class="badge bg-dark mb-3">

                                <?php echo $d['kategori']; ?>

                            </span>

                            <h2 class="fw-bold">

                                <?php echo $d['nama_produk']; ?>

                            </h2>

                            <p class="mt-3">

                                <?php echo $d['deskripsi']; ?>

                            </p>

                            <h4 class="fw-bold mt-4 price">

                                Rp <?php echo number_format($d['harga']); ?>

                            </h4>

                            <button
                            class="btn btn-coffee mt-3"
                            data-bs-toggle="modal"
                            data-bs-target="#checkout<?php echo $d['id']; ?>">

                                Pesan Sekarang

                            </button>

                        </div>

                    </div>

                </div>

            </div>

            <!-- MODAL CHECKOUT -->

            <div class="modal fade"
            id="checkout<?php echo $d['id']; ?>">

                <div class="modal-dialog modal-dialog-centered">

                    <div class="modal-content p-4">

                        <h3 class="fw-bold mb-4">

                            Checkout Produk

                        </h3>

                        <form
                        action="proses/pesan.php"
                        method="POST">

                            <input
                            type="hidden"
                            name="produk"
                            value="<?php echo $d['nama_produk']; ?>">

                            <input
                            type="hidden"
                            name="harga"
                            value="<?php echo $d['harga']; ?>">


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

                            <div class="mb-3">

                                <label>
                                    Alamat
                                </label>

                                <textarea
                                name="alamat"
                                class="form-control"
                                rows="4"
                                required></textarea>

                            </div>
                            <div class="mb-3">

                            <label>
                            Berat
                            </label>

                            <select
                            name="berat"
                            class="form-control"
                            required>

                            <option value="100">
                            100 Gram
                            </option>

                            <option value="200">
                            200 Gram
                            </option>

                            <option value="500">
                            500 Gram
                            </option>

                            <option value="1000">
                            1000 Gram
                            </option>

                            </select>

                            </div>

                            <div class="mb-3">

                            <label>
                            Jumlah
                            </label>

                            <input
                            type="number"
                            name="qty"
                            class="form-control"
                            value="1"
                            min="1"
                            required>

                            </div>

                            <div class="mb-3">

                                <label>
                                    Metode Pembayaran
                                </label>

                                <select
                                name="payment"
                                class="form-control"
                                onchange="showPayment(this, <?php echo $d['id']; ?>)"
                                required>

                                    <option value="">
                                        Pilih Pembayaran
                                    </option>

                                    <option value="COD">
                                        COD
                                    </option>

                                    <option value="Transfer Bank">
                                        Transfer Bank
                                    </option>

                                    <option value="E-Wallet">
                                        E-Wallet
                                    </option>

                                </select>

                            </div>

                            <!-- PAYMENT INFO -->

                            <div
                            id="paymentInfo<?php echo $d['id']; ?>"
                            style="display:none;">

                                <div class="payment-box">

                                    <h6 class="fw-bold">
                                        Virtual Account
                                    </h6>

                                    <div class="va-number">
                                        8810 2026 1234
                                    </div>

                                    <p class="mt-2 mb-0">

                                        Bank BCA a/n Coffee Company

                                    </p>

                                </div>

                            </div>

                            <button class="btn btn-coffee w-100 mt-4">

                                Buat Pesanan

                            </button>

                        </form>

                    </div>

                </div>

            </div>

            <?php } ?>

        </div>

    </div>

</section>

<!-- INFO -->

<section class="info-section py-5">

    <div class="container">

        <div class="row">

            <div class="col-md-4 mb-4">

                <div class="info-box shadow-sm">

                    <h4 class="fw-bold mb-3">
                        Biji Kopi Pilihan
                    </h4>

                    <p>

                        Menggunakan biji kopi pilihan dengan
                        aroma yang khas dan kualitas yang terjaga.

                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="info-box shadow-sm">

                    <h4 class="fw-bold mb-3">
                        Fresh Roasted
                    </h4>

                    <p>

                        Proses roasting dilakukan dengan
                        menjaga cita rasa dan aroma kopi.

                    </p>

                </div>

            </div>

            <div class="col-md-4 mb-4">

                <div class="info-box shadow-sm">

                    <h4 class="fw-bold mb-3">
                        Kualitas Terjaga
                    </h4>

                    <p>

                        Produk kopi dikemas dengan baik
                        agar kualitas tetap terjaga.

                    </p>

                </div>

            </div>

        </div>

    </div>

</section>

<!-- REVIEW -->

<section class="review-section py-5 text-white">

    <div class="container">

        <div class="text-center mb-5">

            <h2 class="fw-bold">
                Ulasan Pelanggan
            </h2>

            <p>
                Beberapa ulasan dari pelanggan kami.
            </p>

        </div>

        <!-- FORM -->

        <div class="card border-0 shadow p-4 mb-5">

            <form action="proses/tambah_review.php"
            method="POST">

                <div class="mb-3">

                    <label class="text-dark">
                        Nama
                    </label>

                    <input
                    type="text"
                    name="nama"
                    class="form-control"
                    required>

                </div>

                <div class="mb-3">

                    <label class="text-dark">
                        Penilaian
                    </label>

                    <select
                    name="rating"
                    class="form-control">

                        <option value="5">⭐⭐⭐⭐⭐</option>
                        <option value="4">⭐⭐⭐⭐</option>
                        <option value="3">⭐⭐⭐</option>
                        <option value="2">⭐⭐</option>
                        <option value="1">⭐</option>

                    </select>

                </div>

                <div class="mb-4">

                    <label class="text-dark">
                        Komentar
                    </label>

                    <textarea
                    name="komentar"
                    class="form-control"
                    rows="4"
                    required></textarea>

                </div>

                <button class="btn btn-dark">

                    Kirim Ulasan

                </button>

            </form>

        </div>

        <!-- REVIEW LIST -->

        <div class="row">

            <?php while($r = mysqli_fetch_array($review)) { ?>

            <div class="col-md-4 mb-4">

                <div class="card review-card shadow h-100 p-4 text-dark">

                    <h5 class="fw-bold">

                        <?php echo $r['nama']; ?>

                    </h5>

                    <div class="star mb-3">

                        <?php

                        for($i=1; $i <= $r['rating']; $i++){

                            echo "⭐";

                        }

                        ?>

                    </div>

                    <p>

                        "<?php echo $r['komentar']; ?>"

                    </p>

                    <small class="text-muted">

                        <?php echo $r['tanggal']; ?>

                    </small>

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

<script>

function showPayment(select, id){

    let paymentBox =
    document.getElementById(
    "paymentInfo"+id);

    if(
    select.value == "Transfer Bank"
    ||
    select.value == "E-Wallet"
    ){

        paymentBox.style.display = "block";

    } else {

        paymentBox.style.display = "none";

    }

}

</script>

</body>
</html>