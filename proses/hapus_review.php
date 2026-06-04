
<?php
/** @var mysqli $conn */
include '../config/koneksi.php';

$id = $_GET['id'];

mysqli_query(
    $conn,
    "DELETE FROM reviews WHERE id='$id'"
);

header("location:../admin/review.php");

?>