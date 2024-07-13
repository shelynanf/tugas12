<?php
$arrWarna=array("Red","Orange","Yellow","Green","Blue","Purple");

echo "Menampilkan isi array dengan FOR: <br>";
for($i=0; $i< count($arrWarna); $i++){
    echo "Warna pelangi <font color=$arrWarna[$i]>".$arrWarna[$i]."</font><br>";
}
?>