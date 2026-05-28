<?php

/** @var mysqli $conn */

include '../config/koneksi.php';

$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];

mysqli_query($conn, "INSERT INTO messages
(nama, email, pesan)

VALUES

(
    '$nama',
    '$email',
    '$pesan'
)");

header("location:../contact.php");

?>