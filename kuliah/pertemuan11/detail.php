<?php
/*
    Berliana Putri
    203040056
    github.com/berlianaputri8/pw2021_203040056
    Pertemuan 11 (22 April 2021)
    Materi pertemuan kali ini membuat mempelajari mengenai Delete & Update Data

*/
?>

<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query pegawai berdasarkan id
$pgw = query("SELECT * FROM pegawai WHERE id = $id");

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
</head>
<body>

    <h3>Detail Pegawai</h3>
    <ul>
        <li><img src="img/<?= $pgw["gambar"]; ?>"></li>
        <li>NIP : <?= $pgw["nip"]; ?></li>
        <li>Nama : <?= $pgw["nama"]; ?></li>
        <li>No Hp : <?= $pgw["hp"]; ?></li>
        <li>Golongan : <?= $pgw["golongan"]; ?></li>
        <li>Gaji : <?= $pgw["gaji"]; ?></li>
        <li><a href="ubah.php?id=<?= $pgw['id']; ?>">Ubah</a> | <a href="hapus.php?id=<?= $pgw['id']; ?>" onclick="return confirm('apakah anda yakin?');">Hapus</a></li>
        <li><a href="index.php">Kembali ke daftar Pegawai</a></li>
    </ul>
    
</body>
</html>