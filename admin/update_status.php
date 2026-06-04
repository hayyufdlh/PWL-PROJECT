<?php

/** @var mysqli $conn */

include '../config/koneksi.php';

$id = $_POST['id'];

$status = $_POST['status'];

mysqli_query(

$conn,

"UPDATE pesanan
SET status_pesanan='$status'
WHERE id='$id'"

);

header("location:admin_pesanan.php");