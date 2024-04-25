<?php 
// Time
// Parameter gapapaa ga disi
// UNIX Timestamp / EPOCH time
// detik  yang sudah berlalu sejak 1 januari 1970
// kenapa begitu? karena jaman dulu disepakati waktu untuk komputer

echo time();
echo date("l", time()+60*60*24*3); //untuk mencari tahu hari apa dalam 3 hari kedepan
echo date("l", time()-60*60*24*3);
echo date("d M Y", time()+60*60*24*3);
echo date("d-M-Y", time()+60*60*24*3)

//
?>