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
]
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Warga</h1>
    <?php foreach($warga as $w):?>
        <li>
            <a href="latihan2.php?nama=<?= $w["nama"];?>&asal=<?= $w["asal"];?>&id=<?= $w["id"];?>&email=<?= $w["email"];?>&gambar=<?= $w["gambar"];?>
            "><?php echo $w["nama"];?></a>
        </li>
    <?php endforeach;?>
</body>
</html>