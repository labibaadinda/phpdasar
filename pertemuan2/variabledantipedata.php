<?php 
// variable di php diawali dengan dollar sign
// mirip seperti javascript tidak perlu menassign tipe data, cukup bikin variable yg diisi dengan nilai

// variable
// tidak boleh diawali dengan angka, tapi boleh mengandung angka
$nama = "Dinda";
// petik dua lebih sakti dibandingkan dengan petik satu
// petik dua bisa melakukan interpolasi
// bisa ngecek didalem petik dua terdapat variable atau ga nya
// kalo ada variable didalam petik dua, maka yang akan ditampilkan ke layar adalah isi variable nya
echo "Halo, nama saya $nama"; // interpolasi jalan
echo 'Halo, nama saya $nama';

?>

 <!-- <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Belajar PHP</title>
 </head>
 <body>
    <h1>Halo, Selamat Datang <?php echo $nama;?></h1>
 </body>
 </html> -->