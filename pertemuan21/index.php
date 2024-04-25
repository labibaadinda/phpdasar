<?php 
session_start();
if( !isset($_SESSION["login"])) {
    header("Location: login.php");
    exit;
}
require 'functions.php';

// koneksi ke dbms
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// $jumlahData = mysqli_num_rows($result); //buat tau banyak baris yang ada di table itu //ngeliatnya objek
$mahasiswa = query("SELECT * FROM mahasiswa");

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
    <style>
        .loader {
            width: 20px;
            position: absolute;
            top : 143px;
            right: 295px;
            z-index: -1;
            display: none;

        }

        @media print {
            .logout, .tambah, .form-cari, .aksi{
                display: none;
            }
        }
    </style>
</head>
    <script src="js/jquery-3.7.1.min.js"></script>
    <script src="js/script.js"></script>
<body>
    <a href="logout.php" class="logout">logout</a> | <a href="cetak.php" target="_blank">Cetak</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="tambah.php" class="tambah">Tambah data mahasiswa</a>
    <br>

    <form action="" method="post" class="form-cari">
    <br>
        <input type="text" name="keyword" size="50" autofocus placeholder="masukkan keyword pencarian" 
        autocomplete="off" id="keyword">
        <button type="submit" name="cari" id="tombol-cari">Cari!</button>
        <img src="img/loader.gif" class="loader">
    </form>
    

    <br>
    <div id="container">
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th class="aksi">Aksi</th>
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
            <td class="aksi">
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
    </div>

</body>
</html>