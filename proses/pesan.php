<?php

/** @var mysqli $conn */

include '../config/koneksi.php';

require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

/* DATA */

$nama = $_POST['nama'];
$email = $_POST['email'];
$alamat = $_POST['alamat'];
$produk = $_POST['produk'];
$harga = $_POST['harga'];
$payment = $_POST['payment'];

$status = "Menunggu Pembayaran";

/* SIMPAN DATABASE */

mysqli_query($conn,

"INSERT INTO pesanan
(nama,email,alamat,produk,harga,payment,status_pesanan)

VALUES

('$nama','$email','$alamat',
'$produk','$harga','$payment','$status')"

);

/* EMAIL */

$mail = new PHPMailer(true);

try{

    $mail->isSMTP();

    $mail->Host = 'smtp.gmail.com';

    $mail->SMTPAuth = true;

    $mail->Username = 'companycoffee.order@gmail.com';

    $mail->Password = 'tnbd zwvq ohnc njng';

    $mail->SMTPSecure = 'tls';

    $mail->Port = 587;

    $mail->setFrom(
    'companycoffee.order@gmail.com',
    'Coffee Company'
    );

    $mail->addAddress($email, $nama);

    $mail->isHTML(true);

    $mail->Subject =
    'Pesanan Coffee Company';

    if(
    $payment == "Transfer Bank"
    ||
    $payment == "E-Wallet"
    ){

        $paymentText = "

        <h3>Pembayaran Non COD</h3>

        <p>
        Silakan transfer ke:
        </p>

        <h2>
        881020261234
        </h2>

        <p>
        Bank BCA a/n Coffee Company
        </p>

        ";

    } else {

        $paymentText = "

        <h3>
        Pembayaran COD
        </h3>

        <p>
        Pembayaran dilakukan saat
        barang sampai.
        </p>

        ";

    }

    $mail->Body = "

    <h2>Pesanan Berhasil</h2>

    <p>
    Halo <b>$nama</b>,
    pesanan kamu berhasil dibuat.
    </p>

    <hr>

    <p>
    <b>Produk:</b> $produk
    </p>

    <p>
    <b>Total:</b>
    Rp ".number_format($harga)."
    </p>

    <p>
    <b>Status:</b>
    $status
    </p>

    <p>
    <b>Metode Pembayaran:</b>
    $payment
    </p>

    $paymentText

    <hr>

    <p>
    Terima kasih telah memesan
    di Coffee Company ☕
    </p>

    ";

    $mail->send();

} catch (Exception $e){

    echo "Email gagal dikirim";

}

?>

<!DOCTYPE html>
<html lang="id">
<head>

    <meta charset="UTF-8">

    <meta name="viewport"
    content="width=device-width,
    initial-scale=1.0">

    <title>Pesanan Berhasil</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>

        body{

            background-color: #f5f1ea;
        }

        .success-box{

            min-height: 100vh;

            display: flex;

            justify-content: center;

            align-items: center;
        }

        .card{

            border: none;

            border-radius: 25px;
        }

        .btn-coffee{

            background-color: #6f4e37;

            color: white;

            border: none;

            padding: 12px 25px;

            border-radius: 12px;
        }

    </style>

</head>
<body>

<div class="container success-box">

    <div class="card shadow p-5 text-center">

        <h1 class="fw-bold mb-4">

            Pesanan Berhasil ☕

        </h1>

        <p>

            Detail pesanan dan pembayaran
            sudah dikirim ke email kamu.

        </p>

        <a href="../products.php"
        class="btn btn-coffee mt-3">

            Kembali

        </a>

    </div>

</div>

</body>
</html>