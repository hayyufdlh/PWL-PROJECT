<?php
/** @var mysqli $conn */
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("location:../login.php");
    exit;
}

include '../config/koneksi.php';

$data = mysqli_query(
    $conn,
    "SELECT * FROM reviews ORDER BY id DESC"
);

?>

<!DOCTYPE html>
<html>
<head>

<title>Review Pelanggan</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#f5f1ea;
}

.container{
    margin-top:40px;
}

</style>

</head>
<body>

<div class="container">

    <div class="d-flex justify-content-between mb-4">

        <h2 class="fw-bold">
            Review Pelanggan
        </h2>

        <a href="dashboard.php" class="btn btn-dark">
            Dashboard
        </a>

    </div>

    <table class="table table-bordered bg-white">

        <tr class="table-dark">

            <th>ID</th>
            <th>Nama</th>
            <th>Rating</th>
            <th>Komentar</th>
            <th>Tanggal</th>
            <th>Aksi</th>

        </tr>

        <?php while($d = mysqli_fetch_array($data)){ ?>

        <tr>

            <td>
                <?php echo $d['id']; ?>
            </td>

            <td>
                <?php echo $d['nama']; ?>
            </td>

            <td>
                <?php echo $d['rating']; ?> ⭐
            </td>

            <td>
                <?php echo $d['komentar']; ?>
            </td>

            <td>
                <?php echo $d['tanggal']; ?>
            </td>

            <td>

                <a
                href="../proses/hapus_review.php?id=<?php echo $d['id']; ?>"
                class="btn btn-danger btn-sm"
                onclick="return confirm('Hapus review ini?')">

                    Hapus

                </a>

            </td>

        </tr>

        <?php } ?>

    </table>

</div>

</body>
</html>