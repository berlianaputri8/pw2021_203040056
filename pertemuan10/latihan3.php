<?php
/*
    Berliana Putri
    203040056
    github.com/berlianaputri8/pw2021_203040056
    Pertemuan 10 (22 April 2021)
    Materi pertemuan kali ini membuat mempelajari mengenai koneksi database dan insert data

*/
?>

<?php
require 'functions.php';

$pegawai = query("SELECT * FROM pegawai");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>

<h1>Daftar Pegawai</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</td>
        <th>Gambar</td>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

    <?php $i = 1; 
    foreach ($pegawai as $pgw) : ?>
    <tr>
        <td><?= $i++; ?></td>
        <td><img src="img/<?= $pgw['gambar']; ?>" width="50"></td>
        <td><?= $pgw['nama']; ?></td>
        <td>
            <a href="detail.php?id=<?= $pgw["id"]; ?>">Lihat detail</a>
        </td>
    </tr>
    <?php endforeach; ?>

</table>
    
</body>
</html>