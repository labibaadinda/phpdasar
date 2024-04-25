<?php 
// kalo semisal sebelumnya yang GET tuh data nya kan dikirim lewat URL
// kalo POST data nya dikirim lewat form
// jadi harus punya form dlu sebelum bisa menggunakan request method POST
// form ini bisa dipake kedua method itu (POST and GET)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form action="latihan.php" method="post">
        <p>
        <label for="nama">Masukkan Nama : </label>
        <input type="text" name="nama" id="nama">
        </p>
        <p>
            <button typa="submit" name="submit">Kirim</button>
        </p>
    </form>
</body>
</html>