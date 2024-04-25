<?php 
// cek apakah tidak ada data di $_GET
// function isset -> untuk mengecek apakah sebuah variable udah pernah dibikin atau belum

if( !isset($_GET["nama"]) || 
    !isset($_GET["gambar"]) ||
    !isset($_GET["asal"]) || 
    !isset($_GET["id"]) || 
    !isset($_GET["email"])  ) {
    //redirect -> dipaksa ke halaman lain gt 
    header("Location: latihan1.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga Rusun</title>
</head>
<body>
    <h1>Detail Warga</h1>
        <ul>
            <img src="img/<?= $_GET["gambar"]; ?>" alt="gambar warga" width="100" height="100">
            <li>Nama : <?php echo $_GET["nama"];?></li>
            <li>Asal : <?php echo $_GET["asal"];?></li>
            <li>id : <?php echo $_GET["id"];?></li>
            <li>Email : <?php echo $_GET["email"];?></li>
        </ul>
    <a href="latihan1.php">Kembali ke daftar warga</a>
</body>
</html>