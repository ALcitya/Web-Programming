<?php
require "koneksi.php";
echo "<br>";
$sql = "CREATE DATABASE web";
if(mysqli_query($conn, $sql)){
    echo "database berhasil dibuat";
}else{
    echo"database gagal dibuat";
}
?>