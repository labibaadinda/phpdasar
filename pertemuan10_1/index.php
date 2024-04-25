<?php 
//koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
// ambil data apa, dari tabel mana data yang mana
// mysqli_query ada dua parameter. parameter pertama koneksi ke database nya yg conn atas itu
// parameter kedua nya tuh query nya mau apa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// sudah melakukan query data ke mysql
// hati hati menggunakan mysqli dia mau bener mau salah itu ga keliatan
// ngakalinnya tuh yg mysqli_query di simpen ke variable terus nanti di cek dengan var_dump
// nah dr situ bener salah nya keliatan

// ambil data (fetch) mahasiswa dari object result
// mysqli_fetch_row() // dia nampilin atau mengembalikan array numerik
// mysqli_fetch_assoc() // dia nampilin atau mengembalikan array assosiatif
// mysqli_fetch_array() //flexible karna dia bisa kedua nya bisa array numerik dan assosiatif
// mysqli_fetch_object()

// $mhs = mysqli_fetch_row($result); // dia nampilin atau mengembalikan array numerik
// var_dump($mhs);

// $mhs = mysqli_fetch_assoc($result); // dia nampilin atau mengembalikan array assosiatif
// var_dump($mhs);

// $mhs = mysqli_fetch_array($result); //flexible karna dia bisa kedua nya bisa array numerik dan assosiatif
// var_dump($mhs);  // - nya adalah dua dua nya tampil  dan data yang disajikan double

// $mhs = mysqli_fetch_object($result); 
// var_dump($mhs);

// while ($mhs = mysqli_fetch_assoc($result)) { //selama masi ada mahasiswa nya lakukan... atau tampilkan..

//  // dia nampilin atau mengembalikan array assosiatif
// var_dump($mhs['nama']); 
// }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NIM</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>
        <?php $i=1;?>
        <?php while( $row = mysqli_fetch_assoc($result)):?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="">ubah</a> |
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?=$row['gambar']; ?>" width="50"></td>
            <td><?=$row['nim']; ?></td>
            <td><?=$row['nama'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['jurusan'];?></td>
        </tr>
        <?php $i++?>
        <?php endwhile;?>

    </table>
    
</body>
</html>