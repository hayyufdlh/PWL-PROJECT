<?php

include 'config/koneksi.php';

$data = null;

if(isset($_POST['email'])){

    $email = $_POST['email'];

    $data = mysqli_query(

    $conn,

    "SELECT * FROM pesanan
    WHERE email='$email'
    ORDER BY id DESC"

    );
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Cek Pesanan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">

</head>
<body style="background:#f5f1ea;">

<div class="container mt-5">

    <div class="card shadow border-0 p-4">

        <h2 class="fw-bold mb-4">

            Cek Status Pesanan

        </h2>

        <form method="POST">

            <div class="mb-3">

                <label>Email</label>

                <input
                type="email"
                name="email"
                class="form-control"
                required>

            </div>

            <button class="btn btn-dark">

                Cari Pesanan

            </button>

        </form>

    </div>

    <?php if($data){ ?>

    <div class="card shadow border-0 mt-4 p-4">

        <table class="table">

            <tr>

                <th>ID</th>
                <th>Produk</th>
                <th>Total</th>
                <th>Status</th>

            </tr>

            <?php while($d=mysqli_fetch_array($data)){ ?>

            <tr>

                <td>
                    <?php echo $d['id']; ?>
                </td>

                <td>
                    <?php echo $d['produk']; ?>
                </td>

                <td>
                    Rp <?php echo number_format($d['harga']); ?>
                </td>

                <td>

                    <span class="badge bg-success">

                        <?php echo $d['status_pesanan']; ?>

                    </span>

                </td>

            </tr>

            <?php } ?>

        </table>

    </div>

    <?php } ?>

</div>

</body>
</html>