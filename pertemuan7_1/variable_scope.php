<?php 
// Variiable scope / lingkup variable

$x = 10; //variable local untuk file latihan satu

function tampilinX() {
    echo $x; // variable lokal untuk function tampilinx
    //jadi di dalam function tidak mengenali variable x 
            //yang mana sudah di define di luar function (variable local)
            // gakebaca karna beda jenis variable meskipun ya sama sama x
            // kalo yg diluar function tuh kan variable lokal
            //nah kalo x di dalam function hanya berlaku didalam function nya aja
//variable yang dibuat didalam function hanya berlaku 
    global $x; // nyari kira kira ada  ga variable diluar function itu
    
    echo $x;

    $y =50;
    echo $y;

}
tampilinX();
?>