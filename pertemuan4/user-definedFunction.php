<?php 
//meskipun php punya banyak banget function ribuan yang bisa dipake.
//tapi tetep aja kita tetep butuh untuk membuat function sendiri.
// definisiin baru deh dipanggil
function salam($waktu = "Datang", $nama = "User") {
    return "Selamat $waktu, $nama!";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Function</title>
</head>
<body>
    <h1><?= salam("Siang", "Dinda"); ?></h1>
</body>
</html>