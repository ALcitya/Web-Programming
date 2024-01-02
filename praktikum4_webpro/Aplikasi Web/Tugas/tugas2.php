<?php
// Definisikan matriks A dan B
$matriksA = array(
    array(1, 2),
    array(3, 4)
);
$matriksB = array(
    array(5, 6),
    array(7, 8)
);

// Hitung perkalian matriks A dan B
$perkalianMatriks = array(
    array(0, 0),
    array(0, 0)
);
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        for ($k = 0; $k < 2; $k++) {
            $perkalianMatriks[$i][$j] += $matriksA[$i][$k] * $matriksB[$k][$j];
        }
    }
}

// Tampilkan hasil perkalian matriks
echo "Hasil perkalian matriks A dan B adalah:\n";
for ($i = 0; $i < 2; $i++) {
    for ($j = 0; $j < 2; $j++) {
        echo $perkalianMatriks[$i][$j] . " ";
    }
    echo "\n";
}

// Hitung determinan matriks A
$determinan = $matriksA[0][0] * $matriksA[1][1] - $matriksA[0][1] * $matriksA[1][0];

// Tampilkan hasil determinan matriks A
echo "Determinan matriks A adalah: " . $determinan . "\n";
?>
