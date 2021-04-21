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
<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</td>
        <th>Aksi</td>
        <th>Gambar</td>
        <th>NIP</td>
        <th>Nama</td>
        <th>No HP</td>
        <th>Golongan</td>
        <th>Gaji</td>
    </tr>

    <?php $i = 1; ?>
    <?php foreach($pegawai as $row ) : ?>
    <tr>
        <td><?= $i; ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
        <td><?= $row["nip"]; ?></td>
        <td><?= $row["nama"]; ?></td>
        <td><?= $row["hp"]; ?></td>
        <td><?= $row["golongan"]; ?></td>
        <td><?= $row["gaji"]; ?></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>

</table>
    
</body>
</html>