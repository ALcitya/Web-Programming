<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
        <?php 
            $nama = $_POST["nama"];
            echo "<b> SELAMAT DATANG, $nama! </b>"; echo "<hr>\n";
            echo "Hari ini tanggal ".date("d F Y");
        ?>
</body>
</html>