<?php 
// Variable Super Global 
// variable-variable yang ada di php yang bisa kita akses dimanapun dan kapanpun
// di dalam halaman php
// Semua variable superglobal menggunakan array assosiativa
// udah ada isi nya dan bisa diakses di halaman mana pun bisa
// Variable super global ini sudah disediain oleh php
// $_GET
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// $_GET
// $_GET["nama"] = "Labiba Adinda Zahwana";
// $_GET["nim"] = "24060121140111";
var_dump($_GET);

$warga = [
    [
        "nama" => "Vila Malika",
        "asal" => "Bengkulu",
        "id" => "24060",
        "email" => "vilamalika@gmail.com",
        "gambar" => "1.jpg"
    ],
    [
        "nama" => "Naila M",
        "asal" => "Jember",
        "id" => "24061",
        "email" => "nailam@gmail.com",
        "gambar" => "2.jpg"
    ],
    [
        "nama" => "Kenza H",
        "asal" => "Tanggerang",
        "id" => "24062",
        "email" => "kenzah@gmail.com",
        "gambar" => "3.jpg"
    ]
]
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Warga Rusun</title>
</head>
<body>
    <?php foreach($warga as $w):?>
        <ul>
            <img src="img/<?= $w['gambar']; ?>" alt="gambar warga" width="100" height="100">
            <li>Nama : <?php echo $w['nama'];?></li>
            <li>Asal : <?php echo $w['asal'];?></li>
            <li>id : <?php echo $w['id'];?></li>
            <li>Email : <?php echo $w['email'];?></li>
        </ul>
    <?php endforeach; ?>
</body>
</html>
