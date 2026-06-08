<?php

/** @var mysqli $conn */

session_start();

if(!isset($_SESSION['role'])){
    header("location:../login.php");
    exit;
}

if($_SESSION['role'] != 'admin'){
    header("location:../index.php");
    exit;
}

include '../config/koneksi.php';

$data = mysqli_query(
    $conn,
    "SELECT * FROM pesanan ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Data Pesanan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f1ea;
}

.container{
    margin-top:40px;
}

img{
    border-radius:10px;
}

</style>

</head>
<body>

<div class="container">

    <div class="d-flex justify-content-between mb-4">

        <h2 class="fw-bold">
            Data Pesanan
        </h2>

        <a href="dashboard.php" class="btn btn-dark">
            Dashboard
        </a>

    </div>

    <table class="table table-bordered bg-white">

        <tr class="table-dark">

            <th>ID</th>
            <th>Nama</th>
            <th>Produk</th>
            <th>Total</th>
            <th>Pembayaran</th>
            <th>Bukti</th>
            <th>Status</th>
            <th>Aksi</th>

        </tr>

        <?php while($d = mysqli_fetch_array($data)){ ?>

        <tr>

            <td><?php echo $d['id']; ?></td>

            <td><?php echo $d['nama']; ?></td>

            <td><?php echo $d['produk']; ?></td>

            <td>
                Rp <?php echo number_format($d['harga']); ?>
            </td>

            <td>
                <?php echo $d['payment']; ?>
            </td>

            <td>

                <?php if($d['bukti_transfer'] != ''){ ?>

                    <a
                    href="../bukti/<?php echo $d['bukti_transfer']; ?>"
                    target="_blank"
                    class="btn btn-success btn-sm">

                        Lihat

                    </a>

                <?php } else { ?>

                    Belum Upload

                <?php } ?>

            </td>

            <td>

            <?php

            $status = $d['status_pesanan'];

            if($status == "Menunggu Pembayaran"){

            echo "<span class='badge bg-warning text-dark'>$status</span>";

            }

            elseif($status == "Menunggu Verifikasi"){

            echo "<span class='badge bg-info'>$status</span>";

            }

            elseif($status == "Diproses"){

            echo "<span class='badge bg-primary'>$status</span>";

            }

            elseif($status == "Dikirim"){

            echo "<span class='badge bg-secondary'>$status</span>";

            }

            else{

            echo "<span class='badge bg-success'>$status</span>";

            }

            ?>

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
                    class="form-control mb-2">

                        <option>
                            Menunggu Pembayaran
                        </option>

                        <option>
                            Menunggu Verifikasi
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

                    <button class="btn btn-primary btn-sm">

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