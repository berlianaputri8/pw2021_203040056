<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// ambil data dari tabel mahasiswa / query
$result = mysqli_query($conn, "SELECT * FROM pegawai");

// ambil data (fetch) pegawai dari object result
// mysqli_fetch_row() // mengembalikan array numerik
// mysqli_fetch_assoc() // mengembalikan array associative
// mysqli_fetch_array() // mengembalikan keduanya
// mysqli_fetch_object()

// while ( $pgw = mysqli_fetch_assoc($result) ) {
// var_dump($pgw);
// }

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
    <?php while($row = mysqli_fetch_assoc($result) ) : ?>
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
    <?php endwhile; ?>

</table>
    
</body>
</html>