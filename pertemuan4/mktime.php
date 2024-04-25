<?php 
//mktime
//mktime(0,0,0,0,0,0)
//jam, menit, detikk, bulan, tanggal, tahun
//konversi ke detik 
//kek total detik setelah 1 januari 1970 ke tanggal tsb
echo mktime(0,0,0,7,11,2002);
echo date("l",mktime(0,0,0,7,11,2002));
?>