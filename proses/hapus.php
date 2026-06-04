<?php

include '../config/koneksi.php';


/** @var mysqli $conn */
$id = $_GET['id'];

mysqli_query($conn, "DELETE FROM produk WHERE id='$id'");

header("location:../admin/produk.php");

?>
