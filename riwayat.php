<?php

include 'config/koneksi.php';

$data = null;

if(isset($_GET['email'])){

    $email = $_GET['email'];

    $data = mysqli_query($conn,

    "SELECT * FROM pesanan
    WHERE email='$email'
    ORDER BY id DESC"

    );

}

?>

<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width,
    initial-scale=1.0">

    <title>Riwayat Pesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <link rel="stylesheet" href="assets/css/style.css">
    
</head>
<body>

<div class="container py-5">

    <h1 class="fw-bold mb-4 text-center">

        Riwayat Pesanan

    </h1>

    <div class="box shadow p-4 mb-5">

        <form method="GET">

            <label class="mb-2">

                Masukkan Email

            </label>

            <input
            type="email"
            name="email"
            class="form-control mb-3"
            required>

            <button class="btn btn-dark">

                Lihat Pesanan

            </button>

        </form>

    </div>

    <?php if($data != null){ ?>

        <?php while($d = mysqli_fetch_array($data)){ ?>

            <div class="box shadow p-4 mb-4">

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
                    <b>
                    <?php echo $d['status_pesanan']; ?>
                    </b>

                </p>

                <p>

                    Tanggal:
                    <?php echo $d['tanggal']; ?>

                </p>

            </div>

        <?php } ?>

    <?php } ?>

</div>

</body>
</html>