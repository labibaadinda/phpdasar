<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>
    <?php if(isset($_POST["submit"])): ?>
    <?php // dia tuh ngecek ada yang disubmit atau belum, semisal ada bakal tampil?>
    <h1>Halo, Selamat Datang <?=$_POST['nama']; ?></h1>
    <?php endif; ?>

    <form action="" method="post">
        Masukkan nama :
        <input type="text" name="nama">
        <button type="submit" name="submit">kirim</button>
    </form>
</body>
</html>