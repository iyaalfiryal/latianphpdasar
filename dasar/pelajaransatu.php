<?php

echo "firyal";

//penulisan sintaks php
//1. php dalam html
//2. html dalam php

$nama = "iyal";

//operator
//aritmatika
// + - * %

$x = 10;
$y = 20;
echo $x * $y;

//operator string/ concatenation / concat
// .
$nama_depan = "firyal";
$nama_belakang = "huwaida";
echo $nama_depan . $nama_belakang;

//assignment
//=, +=, -=, *=, /=, %=, .=
$x = 1;
$x -= 5;
echo $x;

$namaa = "firyal";
$namaa .= "huwaida";
echo $namaa;

//perbandingan 
//<, >, <=, >=, ==, != 
var_dump(1 < 5);
// var_dump(1 == "1");

//identitas
//===, !===
var_dump(1 === "1");

//logika 
//&&, ||, !
$x = 10;
var_dump($x < 20 && $x % 2 == 0);



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Beljar PHP</title>
</head>
<body>
    <h1>Halo selamat datang <?php echo "$nama" ?></h1>
</body>
</html>