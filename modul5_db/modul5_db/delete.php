<?php
 require "koneksi.php";
echo "<br>";
$sql = "DELETE FROM biodata WHERE age<21";
if(mysqli_query($conn, $sql)){
    echo "database berhasil dihapus";
}else{
    echo"database gagal dihapus";
}
?>