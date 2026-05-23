<!DOCTYPE html>
<html>
<head>

    <title>Tambah Produk</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

    <h2>Tambah Produk</h2>

    <form action="../proses/tambah.php" method="POST" enctype="multipart/form-data">

        <div class="mb-3">

            <label>Nama Produk</label>

            <input type="text" name="nama_produk" class="form-control">

        </div>

        <div class="mb-3">

            <label>Deskripsi</label>

            <textarea name="deskripsi" class="form-control"></textarea>

        </div>

        <div class="mb-3">

            <label>Harga</label>

            <input type="number" name="harga" class="form-control">

        </div>

        <div class="mb-3">

            <label>Kategori</label>

            <input type="text" name="kategori" class="form-control">

        </div>

        <div class="mb-3">

            <label>Gambar</label>

            <input type="file" name="gambar" class="form-control">

        </div>

        <button class="btn btn-dark">
            Simpan
        </button>

    </form>

</div>

</body>
</html>