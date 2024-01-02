<?php
$batas = 3;
echo "<table>";
echo "<b> Menampilkan matriks : </b><br>";
echo "Matriks A: ";
for($i=1; $i<=$batas; $i++){
    echo "<tr>";
    for($j=1; $j<=$batas; $j++){
        echo "<td>";
        echo $j." ".$i;
        echo "<td>";
    }
    echo "<tr>";
}
?>