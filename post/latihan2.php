<?php 
if(!isset($_POST["nama"])){
    header("Location: latihan1.php");
    exit;
}
?>

<?php ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <h1>Selamat datang <?= $_POST["nama"];?></h1>
</body>
</html>