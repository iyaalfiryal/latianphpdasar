<?php
//pengulangan pada array
//foreach


$angka = [3, 5, 2, 6, 4, 3, 1];



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
    .kotak {
        width: 50px;
        height: 50px;
        background-color: salmon;
        text-align: center;
        line-height: 50px;
        margin: 3px;
        float: left;
    }

    .clear { clear: both;}
    
    </style>
</head>
<body>
<!-- <?php for($i = 0; $i < 7; $i++){ ?>
    <div class="kotak"><?php echo $angka[$i];?></div>
<?php } ?> -->


<!-- menggunakan pengulangan for untuk mencetak array -->
<?php for($i = 0; $i < count($angka); $i++){ ?>
    <div class="kotak"><?php echo $angka[$i];?></div>
<?php } ?>


<div class="clear"></div>
<!-- supaya turun kebawah -->

<!-- //$a itu singular
$angka itu jamak -->
<?php foreach( $angka as $a):?>
    <div class="kotak"><?php echo $a;?></div>
<?php endforeach;?>

<div class="clear"></div>

<!-- menggunakan pengulangan foreach untuk mencetak array -->
<?php foreach( $angka as $a){?>
    <div class="kotak"><?= $a;?></div>
<?php }?>

</body>
</html>