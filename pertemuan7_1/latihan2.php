<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <form action="latihan3.php" method="post">
        Masukkan nama: <input type="text" name="nama">
        <?php 
        // Jadi name itu tuh penting bgt dia bakal jadi key pas pengen manggil variable super global post
        // karna kan ini form ya dan method nya post, jadi data dikirim menggunakan form lewat method post
        // karna dikirim nya lewat method post, otomatis akan ditangkap melalui variable super global $_POST
        // isi nya itu sesuai in dengan name nya misal inikan name nya nama berati  $_POST['nama']
        ?>
        <br>
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>