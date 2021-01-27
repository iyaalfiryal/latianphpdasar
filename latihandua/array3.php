<?php 
// $mahasiswa = ["Firyal", "2451278461287", "Teknik Informatika", "fifihuwaida@gmail.com"];

//array didalam array
//arrat multidimensi
$mahasiswa = [
    ["Firyal", "2451278461287", "Teknik Informatika", "fifihuwaida@gmail.com"],

    ["Haura", "2451278461287", "Teknik Informatika", "fifihuwaida@gmail.com"],

    ["Anisah", "2451278461287", "Teknik Informatika", "fifihuwaida@gmail.com"],
];

$student = [ "firyal", "anisah", "haura", "iyal"];

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
<h1>Daftar Mahasiswa</h1>
    
    <ul>
        <?php foreach($student as $m):?>
        <li><?php echo $m; ?></li>
        <?php endforeach; ?>
    </ul>

    <ul>
        <li><?php echo $student[0] ?></li>
        <li><?php echo $student[1] ?></li>
        <li><?php echo $student[2] ?></li>
        <li><?php echo $student[3] ?></li>
    </ul>

    <?php foreach($mahasiswa as $mhs): ?>
    <?php foreach($mhs as $m): ?>
        <div><?php echo $m;?></div>
    <?php endforeach; ?>
    <?php endforeach; ?>


</body>
</html>