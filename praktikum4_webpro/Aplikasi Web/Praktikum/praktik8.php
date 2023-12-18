<?php
    function judul(){
        echo "<h2> praktik 2:</h2>";
    }
    judul();
        $mataKuliah = array("Pemograman Web","Desain Analisis Algoritma","Analisis Perancangan Sistem",
                    "Rekayasa Perangkat Lunak","Jaringan Komputer");

                    echo "Nama Mata Kuliah Teknik Informatika";

                    for($i=0; $i < sizeof($mataKuliah); $i++){
                        echo $mataKuliah[$i]. "<br>";
                    }
                    echo "<br>";
        $Dosen = array("Pemograman Web" => "Abdi Pandu Kusuma", "Desain Analisis Algoritma" => "Sri Lestanti"
                ,"Analisis Perancangan Sistem" => "Kurnia Kartika","Rekayasa Perangkat Lunak" => "Indyah Hartami Santi"
                ,"Jaringan Komputer" => "Chulkamdi");

                echo "Daftar Dosen TI Unisba Balitar <br>";
                
                foreach($Dosen as $matkul => $nama){
                    echo "<b> $matkul : </b>" . $nama ."<br>";
                }
?>