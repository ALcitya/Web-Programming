<?php
$servername = "localhost";
$username = "root";
$password = "";

$conn = mysqli_connect($servername, $username, $password);

if(!$conn){
    die("Koneksi gagal".mysqli_connect_error());
}
echo "koneksi berhasil";
echo "<br>";
// mengecek pembacaan database

$db = mysqli_select_db($conn, "web");

if(!$db){
    die("gagal membaca databasae");
}
echo "berhasil membaca database";
?>