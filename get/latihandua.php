<?php 
//isset = untuk ngecek variable apakah udah ada apa blum
//di $_GET ada data apa engga? kalo misalnya gada data, paksa pindah ke latihansatu.php
//cek apakah tidak ada data di $_GET ketika tidak ada data maka akan dipaksa pindah ke latihansatu.php
if( !isset($_GET["nama"]) || 
    !isset($_GET["nrp"]) ||
    !isset($_GET["jurusan"]) ||
    !isset($_GET["email"]) 
){
    //memindahkan ke halaman lain
    header("Location: latihansatu.php");
    exit;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <ul>
        <li>Nama : <?= $_GET["nama"];?></li>
        <li>NRP : <?= $_GET["nrp"];?></li>
        <li>Jurusan : <?= $_GET["jurusan"];?></li>
        <li>Email : <?= $_GET["email"];?></li>
    </ul>

    <a href="latihansatu.php">back</a>
</body>
</html>