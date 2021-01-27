<?php

// operator penggabung string/ 
// concatenation/concat
// . 
$nama_depan = "firyal";
$nama_belakang = "fauzi";

echo $nama_depan ." ". $nama_belakang;
echo "<p>";


//operator aritmatika
// + - * /

$x = 10;
$y = 15;
echo $x+$y ;
echo "<p>";


//operator assignment
// =, +=, -=, *=, /=, %=, .=
$x = 1;
$x -= 5;
echo $x;
echo "<p>";

$nama = "iyal";
$nama .= " ";
$nama .= "iyul";
echo $nama;
echo "<p>";

//operator perbandingan
//<, >, <=, >=, ==, !=
var_dump(1 == "1");
echo "<p>";

//operator identitas
// ===, !==
var_dump(1 === "1");
echo "<p>";

//logika
// &&, ||, ! 
$x = 30;
var_dump($x < 20 || $x % 2 == 0);



?>