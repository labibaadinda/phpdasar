<?php $warga = [
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
];
//metode req GET adalah metode pengiriman data melalui URL 
//dan data tersebut bisa diambil atau ditangkap oleh variable super global $_GET
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Warga</title>
</head>
<body>
    <ul>
        <?php foreach($warga as $w) : ?> 
            <li>
                <a href="detailWarga.php?nama=<?= $w['nama']; ?>&asal=<?= $w['asal']; ?>&id=<?= $w['id']; ?>&email=<?=$w['email'];?>&gambar=<?= $w['gambar'];?>">
                   <?= $w['nama']; ?>
                </a>
            </li>
        <?php endforeach ;?>
    </ul>
</body>
</html>