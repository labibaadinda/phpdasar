<?php 
session_start();
if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

// pagination
// konfigurasi nya
// kita tentuin dulu di halamannya itu mau ada berapa data
$jumlahDataPerHalaman = 2;
// nanti nya kita tuh punya berapa halaman 
// jumlah halaman = jumlah data / data per halaman

$jumlahData = count(query("SELECT * FROM mahasiswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
// $halamanAktif = $_GET["halaman"];
// if (isset($_GET["halaman"])) {
//     $halamanAktif = $_GET["halaman"];
// } else {
//     $halamanAktif = 1;
// }
// $halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;


$awalData = ( $jumlahDataPerHalaman * $halamanAktif ) - $jumlahDataPerHalaman;




// $jumlahData = mysqli_num_rows($result); //buat tau banyak baris yang ada di table itu //ngeliatnya objek
$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerHalaman");

// tombol cari ditekan 
if(isset($_POST["cari"])) {
    $mahasiswa = cari($_POST["keyword"]);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Admin</title>
</head>
<body>
    <a href="logout.php">logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php">Tambah data mahasiswa</a>
    <br>

    <form action="" method="post">
    <br>
        <input type="text" name="keyword" size="50" autofocus placeholder="masukkan keyword pencarian" autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>

    <a href="?halaman=<?=$halamanAktif-1 ?>">&lt;</a>

    <?php for($i = 1; $i<=$jumlahHalaman; $i++) : ?>
        <?php if( $i== $halamanAktif) :?>
        <a href="?halaman=<?= $i;?>" style="font-weight: bold; color: red; "></a>
        <?php else : ?>
            <a href="?halaman=<?= $i;?>></a>
        <?php endif; ?>


    <?php endfor; ?>
    

    <br>

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
        <?php foreach( $mahasiswa as $row):?>
        <tr>
            <td><?php echo $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="
                return confirm('yakin?');">hapus</a>
            </td>
            <td><img src="img/<?=$row['gambar']; ?>" width="50"></td>
            <td><?=$row['nim']; ?></td>
            <td><?=$row['nama'];?></td>
            <td><?=$row['email'];?></td>
            <td><?=$row['jurusan'];?></td>
        </tr>
        <?php $i++?>
        <?php endforeach;?>

    </table>
    
</body>
</html>