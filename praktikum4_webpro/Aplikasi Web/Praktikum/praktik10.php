<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktik 4</title>
</head>
<body>
    <table border="1">
        <tr>
            <td>Nama</td>
            <td>Jurusan</td>
            <td>Jenis Kelamin</td>
            <td>Umur</td>
        </tr>
        <?php
        $mahasiswa = array(
            array("Fitri", "Teknik Informatika", "Perempuan", 20),
            array("Nizam", "Sistem Komputer", "Laki-laki", 20),
            array("Vina", "Bahasa Inggris", "Perempuan", 24),
            array("Ma'ruf", "Agribisnis", "Laki-laki",20),
            array("Nia", "Manajemen", "Perempuan",24),
        );

        for($row =0; $row <5; $row++){
            echo "<tr>";
            for($col =0; $col <4; $col++){
                echo "<td>" .$mahasiswa[$row][$col]. "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>