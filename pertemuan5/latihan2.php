<?php 
// Menampilkan array dengan cara yang benar
// yang sebelumnya di latihan1.php menampilkan dengan
// cara var_dump dan print_r yang mana kedua hal tsb
// menampilkan array pada proses debug atau untuk si developer nya bukan si usernya, semisal developer pengen tau isi array nya apa pake kedua hal itu
// nah untuk  menampilkan array ke user kita harus menggunakan pengulangan
// Pengulangan pada Array
// for / foreach
$angka = [3,2,15,20,11,77,89, 90, 99, 90];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 2</title>
    <style>
        .kotak {
            width: 50px;
            height: 50px;
            background-color: salmon;
            text-align: center;
            line-height: 50px;
            margin: 3px;
            float: left;
        }
        .clear {
            clear:both;
        }
    </style>
</head>
<body>
    <?php for($i=0; $i<count($angka); $i++) {?>
        <div class="kotak"><?php echo $angka[$i]; ?></div>
    <?php }?>

    <div class="clear"> </div>
    <?php foreach( $angka as $a){ ?>
        <div class="kotak"><?php echo $a;?></div>
    <?php }?>
    
    <div class="clear"> </div>
    <?php foreach($angka as $a) :?>
        <div class="kotak"><?= $a; ?></div>
    <?php endforeach ;?>



    
</body>
</html>