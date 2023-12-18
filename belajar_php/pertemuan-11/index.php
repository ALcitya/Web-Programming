<?php 
$conn = mysqli_connect("localhost", "root", "", "restoran");

$sql = "SELECT * FROM customer";

$result = mysqli_query($conn,$sql);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <main>
        <div class="container">
            <h1>Table customer</h1>
            <div class="perintah">
                <div class="search">
                    <input type="text">
                    <button type="button">Cari</button>
                </div>
            </div>
            <table>
                <tr>
                    <td>id</td>
                    <td>nama</td>
                    <td>payment</td>
                    <td>refound</td>
                    <td>aksi</td>
                </tr>
            <?php
            while ($fetch=mysqli_fetch_assoc($result)):
            ?>
                <tr>
                    <td>
                        <?php echo $fetch["id_customer"] ?>
                    </td>
                    <td>
                        <?php echo $fetch["nama"] ?>
                    </td>
                    <td>
                        <?php echo $fetch["payment"] ?>
                    </td>
                    <td>
                        <?php echo $fetch["refound"] ?>
                    </td>
                    <td>
                        <button href="">Ubah</button> ||
                        <button href="">Hapus</button>
                    </td>
                </tr>
            <?php endwhile ?>
            </table>
        </div>
    </main>
</body>
</html>