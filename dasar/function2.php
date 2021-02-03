 <?php 

date_default_timezone_set("Asia/Jakarta");
$jam = date("H:i");

if ($jam > "03:00" && $jam < "10:00"){
        $waktu = "pagi";
    }elseif($jam >= "10:00" && $jam < "15:00"){
        $waktu = "siang";
    }elseif($jam >= "14:00" && $jam < "18:00"){
        $waktu = "sore";
    } else{
        $waktu = "malem";
    } 


echo "selamat $waktu"

 ?>

 