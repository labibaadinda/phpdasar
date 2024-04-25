<?php 
$mahasiswa = [ 
    ["Labiba Adinda Zahwana", "24060121140111", 
    "Informatika", "labibaadinda11@gmail.com"], 
    ["Gatau Lagi", "23060121140111", 
    "Informatika", "gataulagi@gmail.com"],
    ["Erik", "22060121140111",
    "Informatika", "erik@gmail.com"]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head></ul
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach( $mahasiswa as $mhs ) :?>
        <ul>
            <li>Nama :<?php echo $mhs[0];?></li>
            <li>NIM :<?php echo $mhs[1];?></li>
            <li>Jurusan :<?php echo $mhs[2];?></li>
            <li>Email :<?php  echo $mhs[3];?></li>    
        </ul>
    <?php endforeach; ?>

</body>
</html>