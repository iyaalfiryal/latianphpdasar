<?php
//array
//variable yg dapat memiliki banyak nilai
//elemen pada array boleh memiliki tipe data yg berbeda
//array = pasangan antara key dan value
//key nya adalah index yg dimulai dari 0 
$hari = "Senin";
$hari2 = "Selasa";


//membuat array
//cara lama
$hari = array("Senin", "Selasa", "Rabu");

//cara baru
$bulan = ["Januari", "Februari", "Maret"];
$arr1 = [123, "tulisan", false];


var_dump($hari) ;
echo "<br>";
print_r($bulan);
echo "<br>";

echo $arr1[1];

//menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
echo "<br>";
var_dump($hari);

?>