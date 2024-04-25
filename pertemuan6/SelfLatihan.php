<?php 
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
        <h1>Daftar Warga</h1>
        <?php foreach($warga as $w):?>
            <ul>
                <li><img src="img/latian/<?= $w['gambar']; ?>" alt="gambar warga" width="100" height="100"></li>
                <li>Nama : <?php echo $w['nama'];?></li>
                <li>Asal : <?php echo $w['asal'];?></li>
                <li>id : <?php echo $w['id'];?></li>
                <li>email : <?php echo $w['email'];?></li>
            </ul>
        <?php endforeach; ?>
    
</body>
</html>