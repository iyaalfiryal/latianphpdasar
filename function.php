<?php 
    //date
    //untuk menampilkan tanggal dengan format tertentu
    echo date("l, d M Y");
    echo "<p>";
    
    //time
    //UNIX Timestamp / EPOCH time
    //detik yg sudah berlalu sejak 1 Januari 1970
    echo time();
    echo "<p>";


    //2 hari setelah hari ini
    echo date("d M y", time()+60*60*24*2 );
    echo "<p>";

    //strtotime 
    //string to time
    echo date("l", strtotime("8 april 2002"));


    function biodata(){
        echo "firyal";
        echo "18";
    }

    biodata();



?> 

    <!-- //mktime
    //membuat sendiri detik
    //mktime
    //jam, menit, detik, bulan, tanggal, tahun
    echo date("l", mktime(0,0,0,06,19,2002));
    echo "<p>";

    

    function show_name(){
        echo "firyal";
    }

    show_name();
 -->
