<?php
//variable scope / lingkup variable

//variable global
$x = 10;

function tampilX(){
    global $x;
    echo $x;
}

tampilX();

?>