<?php 
// halaman index ini adalah halaman index untuk si admin. 
// admin bisa nambah, ngapus, ngedit, dll
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query data mahasiswa
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");

// ambil data (fetch) mahasiswa dari objek result
// mysqli_fetch_row() // mengembalikan array numeric
// mysqli_fetch_assoc() // mengembalikan array assosiative
// mysqli_fetch_array() // mengembalikan array yang mana ini flexible bisa angka atau numerik dan bisa juga assosiative
// mysqli_fetch_object() // gapunya key numerik dan assosiatif, panggilnya pake cara objek panah

// $mhs = mysqli_fetch_array($result);
// var_dump($mhs); //menampilkan kedua nya yang numerik dan assosiatif jadinya boros memori

// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);

// yang akan kita pake tuh yang assoc
// while( $mhs = mysqli_fetch_assoc($result)) {
//     var_dump($mhs);
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

        <?php $i = 1;?>

        <?php while($row = mysqli_fetch_assoc($result)) :?>

        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="">ubah</a>
                <a href="">hapus</a>
            </td>
            <td><img src="img/<?php echo $row["gambar"]; ?>" alt="gambar mahasiswa" width="50" height="50"></td>
            <td><?php echo $row["nim"];?></td>
            <td><?php echo $row["nama"];?></td>
            <td><?php echo $row["email"];?></td>
            <td><?php echo $row["jurusan"];?></td>
        </tr>
        <?php $i++; ?> 
        <?php endwhile;?>
    </table>
    
</body>
</html>