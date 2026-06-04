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
$berat = $_POST['berat'];
$qty = $_POST['qty'];

$payment = $_POST['payment'];

$status = "Menunggu Pembayaran";

/* AMBIL HARGA BERDASARKAN BERAT */

$produkData = mysqli_fetch_array(

mysqli_query(
$conn,
"SELECT * FROM produk
WHERE nama_produk='$produk'"

)

);

if($berat == 100){

    $harga = $produkData['harga_100'];

}
elseif($berat == 200){

    $harga = $produkData['harga_200'];

}
elseif($berat == 500){

    $harga = $produkData['harga_500'];

}
else{

    $harga = $produkData['harga_1000'];

}

$total = $harga * $qty;

/* SIMPAN DATABASE */

mysqli_query($conn,

"INSERT INTO pesanan
(
nama,
email,
alamat,
produk,
harga,
payment,
status_pesanan
)

VALUES
(
'$nama',
'$email',
'$alamat',
'$produk ($berat Gram x $qty)',
'$total',
'$payment',
'$status'
)"

);

$id_pesanan = mysqli_insert_id($conn);

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
    <b>Berat:</b> $berat Gram
    </p>

    <p>
    <b>Jumlah:</b> $qty
    </p>

    <p>
    <b>Total:</b>
    Rp ".number_format($total)."
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

}

/* TAMPILAN */

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
    background-color:#f5f1ea;
}

.success-box{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
}

.card{
    border:none;
    border-radius:25px;
}

.btn-coffee{
    background:#6f4e37;
    color:white;
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
Pesanan berhasil dibuat.
</p>

<p>
<b>Total Pembayaran:</b><br>
Rp <?php echo number_format($total); ?>
</p>

<?php if(
$payment == "Transfer Bank"
||
$payment == "E-Wallet"
){ ?>

<a
href="../upload_bukti.php?id=<?php echo $id_pesanan; ?>"
class="btn btn-success mt-3">

Upload Bukti Transfer

</a>

<?php } else { ?>

<a
href="../products.php"
class="btn btn-coffee mt-3">

Kembali Belanja

</a>

<?php } ?>

</div>

</div>

</body>
</html>
