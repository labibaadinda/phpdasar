<!-- <?php 
// Array
// membuat array

$hari = array("Senin", "Selasa", "Rabu");
$bulan = ["Januari", "Februari", "Maret"];
$arr = [100, "teks", true];

// menampilkan array
// versi debugging
var_dump($hari);
echo "<br>";
print_r($bulan);

// menampilkan 1 elemen pada array
echo $arr[0];

//menampilkan array dengan looping
?> -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Array</title>
    <style>
        .kotak {
            width: 30px;
            height: 30px;
            background-color: #bada55;
            text-align: center;
            line-height: 30px;
            margin: 3px;
            float: left;
            transition: 0.5s;
        }
        .kotak:hover {
            transform: rotate(360deg);
        }
        .clear {
            clear: both;
        }
    </style>
</head>
<body>
<?php 
$angka = [[1, 2, 3],
         [4, 5, 6],
         [7, 8, 9]];
echo $angka[1][1]; //array multi dimenasi [indeks luar][indeks dalam]
echo "<br>";
echo $angka[2][2];
echo "<br>";

?>

<?php foreach($angka as $aL) :?>
    <?php foreach($aL as $aD) : ?>
        <div class="kotak"><?= $aD; ?></div>
    <?php endforeach; ?>
    <div class="clear"></div>
<?php endforeach; ?>
<!-- <?php foreach($angka as $aL) : ?>
    <div class="kotak">
        <?= $a;?>
    </div>
<?php endforeach; ?> -->
</body>
</html>