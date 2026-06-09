<?php

$conn = mysqli_connect(
    "localhost",
    "root",
    "",
    "coffee_db"
);

if (!$conn) {
    die("Koneksi gagal");
}

?>