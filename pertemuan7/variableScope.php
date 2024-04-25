<?php 
// Variable Scope / lingkup variable
// Vriable yang ada didalam function dengan yang diluar function itu berbeda

$x = 10; //variable lokal untuk 1 halaman ini

// function tampilX() {
//     $x =20; 
//     echo $x; //variable lokal untuk function ini aja
// }

function tampilX() {
    global $x; //nyari variable x diluar functionnya
    echo $x; 
}

tampilX();
echo "<br>";
echo $x;
?>