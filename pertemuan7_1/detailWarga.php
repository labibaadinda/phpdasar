<?php 
// isset itu ngecek "ada" atau ga nya 
// !isset itu ngecek "tidak ada"
// !isset ini tuh semisal gaada data nya di $_GET dia dipaksa ke halaman lain
// redirect
if( !isset($_GET["nama"])||
    !isset($_GET["id"]) ||
    !isset($_GET["email"]) ||
    !isset($_GET["asal"]) ||
    !isset($_GET["gambar"])
) {
    //redirect
    header("Location: latihan1.php");
    exit;
}
// POST -> Data dikirim lewat form
// form bisa menggunakan GET dan POST

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ul>
        <li><img src="img/<?= $_GET["gambar"];?>" width="200" height="300"></li>
        <li>Nama : <?= $_GET["nama"];?></li>
        <li>ID : <?= $_GET["id"];?></li>
        <li>Email : <?= $_GET["email"];?></li>
        <li>Asal : <?= $_GET["asal"];?></li>
    </ul>
</body>
</html>
<a href="latihan1.php">kembali ke daftar mahasiswa</a>