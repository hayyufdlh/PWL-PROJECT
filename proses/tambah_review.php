```php
<?php

include '../config/koneksi.php';

/** @var mysqli $conn */


$nama = $_POST['nama'];
$rating = $_POST['rating'];
$komentar = $_POST['komentar'];

mysqli_query($conn, "INSERT INTO reviews
(nama, rating, komentar)

VALUES

(
    '$nama',
    '$rating',
    '$komentar'
)");

header("location:../products.php");

?>
```
