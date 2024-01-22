<?php 
// Operator
// aritmatika
// + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// Operator penggabung string / concatenation/concat
// .
// $nama_depan = "Labiba";
// $nama_belakang = "Adinda";
// echo $nama_depan . " " . $nama_belakang

// Assignment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x = 5; //angka 1 akan tertimpa oleh 5, jadi yang kebaca 5 aja
// echo $x;

// $x = 1;
// $x -= 5;
// echo $x;

// $x = 1;
// $x += 5;
// echo $x;

// $x = 1;
// $x *= 5;
// echo $x;

// $x = 1;
// $x /= 5;
// echo $x;

// $x = 1;
// $x %= 5;
// echo $x;

// $x = 1;
// $x .= 5;
// echo $x;

// $nama = "Labiba";
// $nama .= " ";
// $nama .= "Adinda";
// echo $nama;



// Operator Perbandingan
// <, >, <=, >=, == --> tidak mengecek tipe data nya hanya mengecek isinya
// Biasanya dipake untuk pengkondisian
// == ti
var_dump(1 == "1"); //true

//Operator Identitas
//mengecek keseluruhan baik value maupun tipe data nya
// ===, !==
var_dump(1 === "1"); //false

//Operator Logika
// biasanya dipake untuk pengkondisian
// &&, ||, !
// && keduanya harus betul maka true
// || salah satu bener maka true

$x = 30;
var_dump($x < 20 && $x%2==0);



?>