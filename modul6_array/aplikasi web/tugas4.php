<?php
$matriks = array(
    array(9,8,7),
    array(6,5,4),
    array(3,2,1)
);
echo "<table>";
echo "<b> Menampilkan matriks : </b><br>";
echo "Matriks B: ";
for($i=0; $i<count($matriks); $i++){
    echo "<tr>";
    for($j=0; $j<count($matriks[$i]); $j++){
        echo "<td>";
        $hasil = 2*$matriks[$i][$j];
        echo $hasil;
        echo "<td>";
    }
    echo "<tr>";
}
?>