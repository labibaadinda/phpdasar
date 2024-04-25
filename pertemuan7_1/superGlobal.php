<?php 
// Variable yang bisa diakses kapan pun dimana pun 
// di halaman php kita

// Variable super global
// variable yang sudah dimiliki php yang bisa diakses kapan pun dimana pun
// $_GET 
// $_POST
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// Semua variable super global tadi adalah array assosiative
// Array assosiative gabisa di cetak begitu aja pake echo
// harus dicetak menggunakan print_r atau var_dump
var_dump($_SERVER);
?>