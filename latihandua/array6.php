<?php 
//array assosiative
//definisany sama seperti array numerik, kecuali key-nya itu string yg kita buat sendiri
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

echo $mahasiswa[2]["tugas"][1];

?>

<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>

<?php foreach($mahasiswa as $m):?>
    <ul>
        <li>Nama : <?= $m["nama"]; ?></li>
        <li>NRP : <?= $m["nrp"]; ?></li>
        <li>Jurusan : <?= $m["jurusan"]; ?></li>
        <li>Email : <?= $m["email"]; ?></li>
    </ul>    
<?php endforeach; ?>

    

</body>››
</html>