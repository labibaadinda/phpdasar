<?php 
//  $mahasiswa = [ ["Labiba Adinda Zahwana", "240601211401111", 
//      "labibaadinda11@gmail.com", "Informatika"],
//      ["Sandhika Galih", "043040023", 
//      "sandhikagalih@unpas.ac.id", "Informatika"],
//      ["Erik", "230601121140110", 
//      "erikgataunamangasal@gmail.com", "Kedokteran"]
//  ];

//  Array Assosiative 
//  Sebuah variable yang bisa memiliki banyak nilai
//  pasangan antara key dan value
//  bedanya kalo Array Assosiative
//  key-nya adalah string yang kita bikin sendiri, bukan indeks
//  kalo di array numerik kan kita gaperlu define si indeks nya kan karna dah ada dari si php nya
//  nah kalo di array assosiative tuh kita bikin sendiri arraynya
$mahasiswa = [
    [
        "nim" => "24060121140111", 
        "nama" => "Labiba Adinda Zahwana", 
        "email" => "labibaadida11@gmail.com",
        "jurusan" => "Informatika",
        "gambar" => "aku.jpg"
    ],
    [
        "nama" => "Sandhika Galih", 
        "nim" => "043040023", 
        "email" => "sandhikagalih@unpas.ac.id",
        "jurusan" => "Teknik Informatika",
        "gambar" => "SGA.jpg"
    ]
];
// echo $mahasiswa[1]["email"];

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Daftar Mahasiswa</title>
 </head>
 <body>
     <h1>Daftar Mahasiswa</h1>
     <?php foreach( $mahasiswa as $mhs):?>
         <ul>
             <li>
                <img src="img/<?= $mhs['gambar']; ?>" alt="gambar mahasiswa" width="100" height="100">
             </li>
             <li>Nama : <?php echo $mhs["nama"]; ?></li>
             <li>NIM : <?php echo $mhs["nim"]; ?></li>
             <li>Email : <?php echo $mhs["email"]; ?></li>
             <li>Jurusan : <?php echo $mhs["jurusan"]; ?></li>
         </ul>
     <?php endforeach; ?>
 </body>
 </html>

