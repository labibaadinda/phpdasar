<?php 
// array
// variable yang dapat memiliki banyak nilai
// di php array ini bisa menampung elemen dengan tipe data yang berbeda
// pasanngan antara key dan value
// key-nya adalah index yang dimulai dari 0

// membuat arrayy
// cara lama
$hari = array("Senin", "Selasa", "Rabu");
// cara baru
$bulan = ["Januari", "Februari", "Maret"];
$ar1 = [123, "tulisan", false];

// Menampilkan array
// bisa dengan var_dump() atau print_r()
// kedua nya sama sama menampilkan pasangan antara key(indeks nya) dan juga value nya
// bedanya antara var_dump dengan print_r semisal var_dump tuh nampilin tipe data juga
// semisal print_r dia nampilin value aja tanpa tipe data nya

var_dump($hari);
echo "<br>";
print_r($bulan);
echo "<br>";
// Menampilkan 1 elemen pada array
echo $ar1[1];
echo "<br>";
echo $bulan[1];
echo "<br>";
// Menambahkan elemen pada array yang sudah ada
var_dump($hari);
$hari[] = "Kamis";
$hari[] = "Jumat";
echo "<br>";
var_dump($hari);

?>

