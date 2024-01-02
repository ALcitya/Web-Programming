<?php
 require "koneksi.php";
echo "<br>";

$id = $_POST["id"];
$nama = $_POST["nama"];
$age = $_POST["age"];

 $sql = "INSERT INTO biodata(id, nama, age)
        VALUES ('$id','$nama','$age')";
if(mysqli_query($conn, $sql)){
    echo "data berhasil ditambahkan";
}else{
    echo"data gagal ditambahkan";
}
?>