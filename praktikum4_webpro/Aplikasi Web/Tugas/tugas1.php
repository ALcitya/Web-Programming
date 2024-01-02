<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Selamat datang di Toko Emas Berkah</h3>
    <h5>Berikut paket pembelian yang tersedian</h5>
    <ul type="square" >
        <li>Emas < 0,5 gram mendapatkan chashback Rp.100.000,-</li>
        <li>Emas 0,5 - 1 gram mendapatkan chashback Rp.150.000,-</li>
        <li>Emas 1 - 5 gram mendapatkan chashback Rp.200.000,-</li>
        <li>Emas > 5 gram mendapatkan chashback Rp.250.000,-</li>
    </ul>
    <form method="post">
        <Label>Masukkan jumlah pembelian</Label>
        <input type="number" name="jumlah">
        <input type="submit" value="kirim">
    </form>
    <br>
    <?php
    $jumlah = $_POST['jumlah'];
    switch ($jumlah){
        case ($jumlah <= 0.5):
            echo "Jumlah pembelian anda adalah $jumlah gram dan mendapatkan chashback Rp.100.000";
            break;
        case ($jumlah > 0.5 && $jumlah <= 1):
            echo "Jumlah pembelian anda adalah $jumlah gram dan mendapatkan chashback Rp.150.000";
            break;
        case ($jumlah > 1 && $jumlah <= 5):
            echo "Jumlah pembelian anda adalah $jumlah gram dan mendapatkan chashback Rp.200.000";
            break;
        case ($jumlah > 5):
            echo "Jumlah pembelian anda adalah $jumlah gram dan mendapatkan chashback Rp.250.000";
            break;
    }
    ?>
</body>
</html>