<?php

include '../config/koneksi.php';

/** @var mysqli $conn */

$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];

$gambar = $_FILES['gambar']['name'];

$tmp = $_FILES['gambar']['tmp_name'];

move_uploaded_file($tmp, '../assets/img/' . $gambar);

mysqli_query($conn, "INSERT INTO produk VALUES(

    '',
    '$nama_produk',
    '$deskripsi',
    '$harga',
    '$kategori',
    '$gambar'

)");

header("location:../admin/produk.php");

?>