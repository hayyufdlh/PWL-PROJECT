<?php

include 'config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM pesanan WHERE id='$id'"
);

$d = mysqli_fetch_array($data);

?>

<!DOCTYPE html>
<html>
<head>

<title>Upload Bukti Transfer</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="assets/css/style.css">
</head>
<body>

<div class="container mt-5">

    <div class="card p-4 shadow">

        <h2 class="fw-bold mb-4">
            Upload Bukti Transfer
        </h2>

        <p>
            Produk :
            <b><?php echo $d['produk']; ?></b>
        </p>

        <p>
            Total :
            <b>Rp <?php echo number_format($d['harga']); ?></b>
        </p>

        <form
        action="proses/upload_bukti.php"
        method="POST"
        enctype="multipart/form-data">

            <input
            type="hidden"
            name="id"
            value="<?php echo $d['id']; ?>">

            <div class="mb-3">

                <label>Bukti Transfer</label>

                <input
                type="file"
                name="bukti"
                class="form-control"
                required>

            </div>

            <button class="btn btn-success">

                Upload Bukti

            </button>

        </form>

    </div>

</div>

</body>
</html>