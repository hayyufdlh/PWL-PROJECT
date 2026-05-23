<?php

include '../config/koneksi.php';

/** @var mysqli $conn */

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

mysqli_query($conn, "INSERT INTO messages VALUES(

    '',
    '$nama',
    '$email',
    '$pesan',
    NOW()

)");

header("location:../contact.php");

?>