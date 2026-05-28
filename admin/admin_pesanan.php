<?php

include '../config/koneksi.php';

/** @var mysqli $conn */

$data = mysqli_query($conn,
"SELECT * FROM pesanan ORDER BY id DESC");

?>

<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width,
    initial-scale=1.0">

    <title>Admin Pesanan</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{

            background-color: #f5f1ea;
        }

        .container{

            margin-top: 50px;
        }

        .table{

            background-color: white;
        }

        .btn-status{

            background-color: #6f4e37;

            color: white;

            border: none;
        }

    </style>

</head>
<body>

<div class="container">

    <h1 class="fw-bold mb-4">

        Data Pesanan

    </h1>

    <table class="table table-bordered shadow">

        <tr class="table-dark">

            <th>No</th>
            <th>Nama</th>
            <th>Produk</th>
            <th>Harga</th>
            <th>Pembayaran</th>
            <th>Status</th>
            <th>Aksi</th>

        </tr>

        <?php
        $no = 1;

        while($d = mysqli_fetch_array($data)){
        ?>

        <tr>

            <td><?php echo $no++; ?></td>

            <td>
                <?php echo $d['nama']; ?>
            </td>

            <td>
                <?php echo $d['produk']; ?>
            </td>

            <td>
                Rp <?php echo number_format($d['harga']); ?>
            </td>

            <td>
                <?php echo $d['payment']; ?>
            </td>

            <td>

                <?php echo $d['status_pesanan']; ?>

            </td>

            <td>

                <form
                action="update_status.php"
                method="POST">

                    <input
                    type="hidden"
                    name="id"
                    value="<?php echo $d['id']; ?>">

                    <select
                    name="status"
                    class="form-select mb-2">

                        <option>
                            Menunggu Pembayaran
                        </option>

                        <option>
                            Diproses
                        </option>

                        <option>
                            Dikirim
                        </option>

                        <option>
                            Selesai
                        </option>

                    </select>

                    <button class="btn btn-status">

                        Update

                    </button>

                </form>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>