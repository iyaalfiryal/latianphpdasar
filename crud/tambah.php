<?php
require'functions.php';
// cek apakah tombol submit udah ditekan atau belum
if(isset($_POST["submit"])){

    //cek apakah data berhasul di tambahkan atau tidak
    if(tambah($_POST) > 0){
        // echo "data berhasil ditambahkan!";
        echo "
            <script>
            alert('data berhasil di tambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    }else {
        // echo "data gagal";
        echo "
            <script>
            alert('data gagal di tambahkan!');
            document.location.href = 'index.php';
            </script>
        ";
    }
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah data mahasiswa</title>
</head>
<body>
    <h1>Tambah data mahasiswa</h1>
    <!-- untuk menentukan da -->
    <form action="" method="post">
    <ul>
        <li>
            <label for="nama_siswa">Nama : </label>
            <input type="text" name="nama_siswa" id="nama_siswa" required> </input>
        </li>
        <li>
            <label for="nim_siswa">NIM : </label>
            <input type="text" name="nim_siswa" id="nim_siswa" required> </input>
        </li>
        <li>
            <label for="email_siswa">Email : </label>
            <input type="text" name="email_siswa" id="email_siswa" required> </input>
        </li>
        <li>
            <label for="jurusan_siswa">Jurusan : </label>
            <input type="text" name="jurusan_siswa" id="jurusan_siswa" required> </input>
        </li>
        <li>
            <label for="gambar_siswa">Gambar : </label>
            <input type="text" name="gambar_siswa" id="gambar_siswa" required > </input>
        </li>
        <br>
        <button type="submit" name="submit">Tambah Data</button>
    </ul>
    </form>
</body>
</html>