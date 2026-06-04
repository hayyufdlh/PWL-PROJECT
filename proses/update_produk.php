<?php

include '../config/koneksi.php';

/** @var mysqli $conn */

$id = $_POST['id'];

$nama_produk = $_POST['nama_produk'];
$deskripsi = $_POST['deskripsi'];
$harga = $_POST['harga'];
$kategori = $_POST['kategori'];

/* CEK ADA GAMBAR BARU ATAU TIDAK */

if($_FILES['gambar']['name'] != ''){

    $gambar = $_FILES['gambar']['name'];

    $tmp = $_FILES['gambar']['tmp_name'];

    move_uploaded_file(
        $tmp,
        '../assets/img/' . $gambar
    );

    mysqli_query(
        $conn,

        "UPDATE produk SET

        nama_produk='$nama_produk',
        deskripsi='$deskripsi',
        harga='$harga',
        kategori='$kategori',
        gambar='$gambar'

        WHERE id='$id'"
    );

}else{

    mysqli_query(
        $conn,

        "UPDATE produk SET

        nama_produk='$nama_produk',
        deskripsi='$deskripsi',
        harga='$harga',
        kategori='$kategori'

        WHERE id='$id'"
    );

}

header("Location: ../admin/produk.php");
exit;

?>
