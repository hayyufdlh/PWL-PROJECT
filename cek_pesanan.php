<?php

include 'config/koneksi.php';

$data = null;

if(isset($_POST['email'])){

    $email = $_POST['email'];

    $data = mysqli_query($conn,

    "SELECT * FROM pesanan
    WHERE email='$email'
    ORDER BY id DESC");

}

?>

<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width,
    initial-scale=1.0">

    <title>Cek Pesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{

            background-color: #f5f1ea;
        }

        .container{

            margin-top: 60px;
        }

    </style>

</head>
<body>

<div class="container">

    <h1 class="fw-bold mb-4">

        Cek Status Pesanan

    </h1>

    <form method="POST"
    class="mb-5">

        <input
        type="email"
        name="email"
        class="form-control mb-3"
        placeholder="Masukkan email"
        required>

        <button class="btn btn-dark">

            Cek Pesanan

        </button>

    </form>

    <?php
    if($data){
    while($d = mysqli_fetch_array($data)){
    ?>

    <div class="card shadow p-4 mb-4">

        <h4 class="fw-bold">

            <?php echo $d['produk']; ?>

        </h4>

        <p>

            Total:
            Rp <?php echo number_format($d['harga']); ?>

        </p>

        <p>

            Pembayaran:
            <?php echo $d['payment']; ?>

        </p>

        <p>

            Status:
            <b><?php echo $d['status_pesanan']; ?></b>

        </p>

    </div>

    <?php }} ?>

</div>

</body>
</html>