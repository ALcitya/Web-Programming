<?php
 require "koneksi.php";
echo "<br>";
$sql = "SELECT * FROM biodata";
$data = mysqli_query($conn, $sql);

while($show = mysqli_fetch_array($data)){
    echo "<table>";
    echo "<tr>";
    echo "<td>". $show["id"]."<br>"."</td>";
    echo "<td>". $show["nama"]."<br>"."</td>";
    echo "<td>". $show["age"]."<br>"."</td>";
    echo "</tr>";
    echo "</table>";
}
?>