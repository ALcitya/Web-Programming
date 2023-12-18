<?php
    function judul(){
        echo "<h2> praktik 3:</h2>";
    }
    judul();
        $matkul = array("Pemograman Web","Desain Analisis Algoritma","Analisis Perancangan Sistem",
                    "Rekayasa Perangkat Lunak","Jaringan Komputer");

                    echo "Nama Mata Kuliah (sebelum diurutkan) : <br>";
                    
                    foreach($matkul as $key => $value){
                        echo " $key : $value"."<br>";
                    }
        sort($matkul);
        echo "Nama Mata Kuliah (setelah diurutkan) : <br>";
        foreach($matkul as $key => $value){
            echo " $key : $value"."<br>";
        }
?>