<?php
//koneksi ke database
//(nama host, username, password, nama database) 
$db = mysqli_connect("localhost", "root", "", "db_phpdasarr");


//ambil data dari tabel mahasiswi/query data mahasiswa
$result = mysqli_query($db, "SELECT * FROM tb_siswa");

//perbandingannya kaya mau liat buku di lemari, nah kita tuh pas masuk malah ngeluarin lemarinya dari rumah, padahal kita butuhnya bukunya, nah makanya kita harus ambil bukunya kan, gabutuh lemarinya
// var_dump($result);

//ambil data(fetch) mahasiswa dari object result
//mysqli_fetch_row() = mengembalikan array numerik
//mysqli_fetch_assoc() = mengembalikan array assosiative
//mysqli_fetch_array() = mengembalikan arrat numerik dan assosiative
//mysqli_fetch_object()

// $ssw = mysqli_fetch_assoc($result);
// var_dump($ssw["nama_siswa"]);


// while($ssw = mysqli_fetch_assoc($result)){
//     var_dump($ssw);
// }

//data berhasil muncul tapi masih dalam bentuk array

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Daftar Siswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
        <th>No</th>
        <th>aksi</th>
        <th>Gambar</th>
        <th>Nama</th>
        <th>NIM</th>
        <th>Email</th>
        <th>Jurusan</th>
        </tr>
    <?php $i = 1; ?>
    <?php while($row = mysqli_fetch_assoc($result)):?>

        <tr>
        <td><?= $i; ?></td>
        <td>
        <a href="">ubah</a> | 
        <a href="">hapus</a>
        </td>
        <td><img src="img/<?php echo $row["gambar_siswa"];?>" width="50"></td>
        <td><?php echo $row["nama_siswa"];?></td>
        <td><?php echo $row["nim_siswa"];?></td>
        <td><?php echo $row["email_siswa"];?></td>
        <td><?php echo $row["jurusan_siswa"];?></td>

        </tr>
        <?php $i++ ?>

        <?php endwhile;?>
    </table>
</body>
</html>