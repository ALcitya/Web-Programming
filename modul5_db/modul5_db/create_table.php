<?php
require "koneksi.php";
echo "<br>";
$sql = "CREATE TABLE biodata(
    id INT NOT NULL,
    nama VARCHAR(30),
    age INT,
    PRIMARY KEY(id))";
if(mysqli_query($conn, $sql)){
    echo "Tabel berhasil dibuat";
}else{
    echo"Tabel gagal dibuat";
}
?>