<?php
 require "koneksi.php";
echo "<br>";
$sql = "UPDATE biodata SET age=19 WHERE id=2147483647";
if(mysqli_query($conn, $sql)){
    echo "database berhasil diubah";
}else{
    echo"database gagal diubah";
}
?>