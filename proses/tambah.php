<?php

/** @var mysqli $conn */

include '../config/koneksi.php';

$nama_produk = mysqli_real_escape_string($conn, $_POST['nama_produk']);
$deskripsi = mysqli_real_escape_string($conn, $_POST['deskripsi']);

$harga_100 = (int)$_POST['harga_100'];
$harga_200 = (int)$_POST['harga_200'];
$harga_500 = (int)$_POST['harga_500'];
$harga_1000 = (int)$_POST['harga_1000'];

$kategori = mysqli_real_escape_string($conn, $_POST['kategori']);
$stok = (int)$_POST['stok'];

/*
|--------------------------------------------------------------------------
| Hitung Harga Per Gram Otomatis
|--------------------------------------------------------------------------
| Prioritas menggunakan harga 1000 gram,
| jika kosong gunakan 500 gram,
| jika kosong gunakan 200 gram,
| jika kosong gunakan 100 gram.
|
*/

if ($harga_1000 > 0) {
    $harga_pergram = $harga_1000 / 1000;
} elseif ($harga_500 > 0) {
    $harga_pergram = $harga_500 / 500;
} elseif ($harga_200 > 0) {
    $harga_pergram = $harga_200 / 200;
} elseif ($harga_100 > 0) {
    $harga_pergram = $harga_100 / 100;
} else {
    $harga_pergram = 0;
}

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file(
    $tmp,
    '../assets/img/' . $gambar
);

$query = "INSERT INTO produk (

    nama_produk,
    deskripsi,
    harga_pergram,
    harga_100,
    harga_200,
    harga_500,
    harga_1000,
    kategori,
    gambar,
    stok

) VALUES (

    '$nama_produk',
    '$deskripsi',
    '$harga_pergram',
    '$harga_100',
    '$harga_200',
    '$harga_500',
    '$harga_1000',
    '$kategori',
    '$gambar',
    '$stok'

)";

mysqli_query($conn, $query);

header("Location: ../admin/produk.php");
exit;