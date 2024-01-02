<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Output</title>
</head>
<body>
    <?php
    function hitungGaji($gajiPokok){
        $pph = (21/100)*$gajiPokok;
        $gajiBersih=$gajiPokok-$pph;

        // ? Mengembalikan array yang berisi PPH dan Gaji Bersih
        return ['pph' => $pph, 'gajiBersih' => $gajiBersih];
    }
    $jabatan = $_POST["jabatan"];
    switch ($jabatan){
        case "manager":
            $gajiPokok = 5000000;
        break;
        case "sekretaris":
            $gajiPokok = 2000000;
        break;
        case "staf":
            $gajiPokok = 1500000;
        break;
    }
    // todo- memanggil fungsi hitung gaji
    $hasilPerhitungan = hitungGaji($gajiPokok);

    // todo - menyimpan nilai pph dan gaji bersih
    $pph = $hasilPerhitungan["pph"];
    $gajiBersih = $hasilPerhitungan["gajiBersih"];
    ?>
    <table border="1">
        <tr>
            <td colspan=3><b>Slip Gaji CV Maju Bersama</b></td>
        </tr>
        <tr>
            <td>NIP</td>
            <td>:</td>
            <td>
                <?= $_POST["nip"];?>
            </td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?= $_POST["nama"];?></td>
        </tr>
        <tr>
            <td>Jabatan</td>
            <td>:</td>
            <td><?= $_POST["jabatan"];?></td>
        </tr>
        <tr>
            <td>Status</td>
            <td>:</td>
            <td><?= $_POST["status"];?></td>
        </tr>
        <tr>
            <td>Gaji Pokok</td>
            <td>:</td>
            <td><?= "Rp".$gajiPokok; ?></td>
        </tr>
        <tr>
            <td>PPH</td>
            <td>:</td>
            <td><?= "Rp".$pph; ?></td>
        </tr>
        <tr>
            <td>Gaji Bersih</td>
            <td>:</td>
            <td><?="Rp".$gajiBersih; ?></td>
        </tr>
        <tr>
            <td colspan="3"><a href="input.php">Back to input</a></td>
        </tr>
    </table>
</body>
</html>