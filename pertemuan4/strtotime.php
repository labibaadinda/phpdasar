<?php 
// function yang sering dipake di php

//Date/Time
//time(), date(), mktime(),strtotime()

//String
//strlen() : untuk tau panjang dari string
//strcmp() : untuk  membandingkan dua buah string
//explode(): untuk memecah string jadi array, dipakai untung mengambil nama dari sebuah fie. kan semisal nama file tu kan namafile.jenisfile kan nah itu buat ngambil nama file nya aja bisa kita pecah dengan mengubah string tsb menjadi array dengan function explode()
//htmlspecialchars() : khusus untuk menjaga kita dari org iseng(hacker) agar website tetep aman.

//Utility
//fungsi bantuan
//var_dump() : fungsi untuk mencetak isi dari sebuah variable, array, objek.
//isset() : untuk mengecek apakah sebuah variable sudah dibikin atau belum. output berupa boolean
//empty() : untuk mengecek apakah variabale yg kita bikin itu kosong atau ngga.
//die() : untuk memberhentikan program kita. program dibawah die atau setelah die gaakan dieksekusi.
//sleep() : untuk memberhentikan sementara. semisal sleep 2 detik, jadi begitu ke setemu sleep dia akan berhenrti selama 2 detik. baru deh program nya dijalanin lagi.

echo strtotime("11 jul 2002");
echo date("l", strtotime("11 jul 2002"));
?>