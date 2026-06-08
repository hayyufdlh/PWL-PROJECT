<?php

/** @var mysqli $conn */


include '../config/koneksi.php';

$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];

$harga_100 = $_POST['harga_100'];
$harga_200 = $_POST['harga_200'];
$harga_500 = $_POST['harga_500'];
$harga_1000 = $_POST['harga_1000'];

$kategori = $_POST['kategori'];
$stok = $_POST['stok'];

$gambar = $_FILES['gambar']['name'];
$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file(
    $tmp,
    '../assets/img/'.$gambar
);

mysqli_query($conn,

"INSERT INTO produk(

nama_produk,
deskripsi,
harga,
kategori,
gambar,
stok

)

VALUES(

'$nama_produk',
'$deskripsi',
'$harga',
'$kategori',
'$gambar',
'$stok'

)"

);

header("Location: ../admin/produk.php");

?>