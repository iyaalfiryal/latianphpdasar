<?php 

/* 
VARIABLE SUPER GLOBAL (variable dari php)
tipe datanya array assosiative
$_GET
$_POST
$_REQUEST
$_COOKIE
$_SESSION
$_SERVER
$_ENV
$GLOBALS
*/

//GET ($_GET)
//ngirim data lewat url 
//data tidak rahasia

//POST ($_POST)
//ngirim data lewat form
//login

// echo $_GET["nama"]="firyal";
// echo "<br>";
// var_dump($_GET);

$mahasiswa = [
    ["nama" => "Firyal", 
    "nrp" => "24511287",
    "jurusan" => "Teknik Informatika", 
    "email" => "fifihuwaida@gmail.com",
],
    ["nama" => "Anisah", 
    "nrp" => "2451271287",
    "jurusan" => "Teknik Informatika", 
    "email" => "fifihuwaida@gmail.com",
    ]
];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Daftar Mahasiswa</h2>
    
    <?php foreach($mahasiswa as $mhs):?>
    <li>
        
        <a href="latihandua.php?nama=<?= $mhs["nama"];?>&nrp=<?= $mhs["nrp"];?>&jurusan=<?= $mhs["jurusan"];?>&email=<?= $mhs["email"];?> ">
        
        <?= $mhs["nama"];?>

        </a>
    </li>
    <?php endforeach; ?>

</body>
</html>