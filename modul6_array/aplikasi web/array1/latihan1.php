<?php
$huruf = array('a','f','h','c','d','b','j','i','g');
echo ("<br> <u>Variable huruf sebelum diurutkan</u> =");
for($i=0; $i<count($huruf);$i++){
    echo $huruf[$i]. " ";
}
sort($huruf);
echo ("<p> <h1>Variable huruf setelah diurutkan</h1> =");
for($i=0; $i<count($huruf);$i++){
    echo $huruf[$i]. " ";
}

?>