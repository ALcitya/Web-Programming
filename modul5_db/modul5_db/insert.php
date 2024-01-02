<?php
 require "koneksi.php";
echo "<br>";
 $sql = "INSERT INTO biodata(id, nama, age)
        VALUES (1001,'budi',20)";
if(mysqli_query($conn, $sql)){
    echo "data berhasil ditambahkan";
}else{
    echo"data gagal ditambahkan";
}
?>