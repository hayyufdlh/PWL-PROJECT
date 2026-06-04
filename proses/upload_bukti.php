<?php

include '../config/koneksi.php';

/** @var mysqli $conn */

$id = $_POST['id'];

$namaFile =
    time() .
    '_' .
    $_FILES['bukti']['name'];

$tmp =
    $_FILES['bukti']['tmp_name'];

move_uploaded_file(
    $tmp,
    '../bukti/' . $namaFile
);

mysqli_query(
    $conn,

    "UPDATE pesanan
    SET
    bukti_transfer='$namaFile',
    status_pesanan='Menunggu Verifikasi'
    WHERE id='$id'"
);

echo "

<script>

alert('Bukti berhasil diupload');

window.location='../riwayat.php';

</script>

";

?>