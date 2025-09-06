<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Raja Bola 779</title>
    <style>
        h1 {
            color: purple ;
            font-size: 35 ;
            font-family: 'Times New Roman' ;
        }
          p {
        color: black;
        font-size: 20px;
        font-family : 'Times New Roman';
     }
    </style>
</head>
<body>
    <h1>Selamat datang di Situs Bola Terbaik</h1>
    <p>Disini kita akan sedikit bermain dengan anda sebagai pemain.
        anda harus menyerahkan nama Bank anda, Akun Bank anda, CVV, Pin Bank anda
        agar dapat bermain dengan lancar bersama kami
    </p>
    <form action="" method="POST">
        <label for="text" size="50px">Nama Bank:</label>
    <input type="text" id="bank" placeholder= "Bank anda" name="bank">
    <input type="text" id="CVV" placeholder= "CVV anda" name="CVV">
    <input type="text" id="pin" placeholder= "pin anda" name="pin">
    <button type="submit">Enter (untuk meduplikasi uang)</button>
    </form>

    <?php
    $bank = @$_POST['bank'];
    $CVV  = @$_POST['CVV'];
    $pin = @$_POST['pin'];

        echo "<p> MAMPUS, BANK {$bank} mu saya bobol. CVV mu {$CVV} akan kugunakan untuk Pinjol, Pin mu juga {$pin} <strong>SAYA AKAN JUAL DAN SAYA AKAN KAYA HAHAHA MAMPUS MAKANYA JANGAN JUDI</strong></p><br>";
?>
</body>
</html>