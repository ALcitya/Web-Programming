<?php
$a = 5;
$b = 3;
$c = $a * kali2($b);

    echo "Hasil menggunakan fungsi menggunakan output nilai";
    echo "<br>\ $c=$c";
    echo "<p>Hasil menggunakan fungsi output hasil oprasi:";
    
    outputPerkalian($a, $b);

    function kali2($x){
        return $x*2;
    }
    function outputPerkalian($x, $y){
        $c = $x*2*$y;
        echo "<br>\ $c=$c";
    }
?>