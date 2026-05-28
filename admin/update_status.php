<?php

include '../config/koneksi.php';

/** @var mysqli $conn */

$id = $_POST['id'];

$status = $_POST['status'];

mysqli_query($conn,

"UPDATE pesanan
SET status_pesanan='$status'
WHERE id='$id'"

);

header("Location: admin_pesanan.php");

?>