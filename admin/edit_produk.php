<?php

/** @var mysqli $conn */
session_start();

if(!isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("location:../login.php");
    exit;
}

include '../config/koneksi.php';

$id = $_GET['id'];

$data = mysqli_query(
    $conn,
    "SELECT * FROM produk WHERE id='$id'"
);

$d = mysqli_fetch_array($data);

?>

<!DOCTYPE html>

<html>
<head>

<title>Edit Produk</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

```
<div class="card shadow p-4">

    <h2 class="fw-bold mb-4">
        Edit Produk
    </h2>

    <form
    action="../proses/update_produk.php"
    method="POST"
    enctype="multipart/form-data">

        <input
        type="hidden"
        name="id"
        value="<?php echo $d['id']; ?>">

        <div class="mb-3">

            <label>Nama Produk</label>

            <input
            type="text"
            name="nama_produk"
            class="form-control"
            value="<?php echo $d['nama_produk']; ?>">

        </div>

        <div class="mb-3">

            <label>Deskripsi</label>

            <textarea
            name="deskripsi"
            class="form-control"
            rows="5"><?php echo $d['deskripsi']; ?></textarea>

        </div>

        <div class="mb-3">

            <label>Harga</label>

            <input
            type="number"
            name="harga"
            class="form-control"
            value="<?php echo $d['harga']; ?>">

        </div>

        <div class="mb-3">

            <label>Kategori</label>

            <input
            type="text"
            name="kategori"
            class="form-control"
            value="<?php echo $d['kategori']; ?>">

        </div>

        <div class="mb-3">

            <label>Gambar Lama</label>

            <br>

            <img
            src="../assets/img/<?php echo $d['gambar']; ?>"
            width="150">

        </div>

        <div class="mb-3">

            <label>Ganti Gambar</label>

            <input
            type="file"
            name="gambar"
            class="form-control">

        </div>

        <button class="btn btn-primary">

            Update Produk

        </button>

        <a
        href="produk.php"
        class="btn btn-secondary">

            Kembali

        </a>

    </form>

</div>
```

</div>

</body>
</html>
