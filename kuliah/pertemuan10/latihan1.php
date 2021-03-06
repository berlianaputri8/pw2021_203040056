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
// Koneksi ke database & pilih Database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

// Query isi tabel pegawai
$result = mysqli_query($conn, "SELECT * FROM pegawai");

// ubah data kedalam array
// $row = mysqli_fetch_row($result) // array numerik
// $row = mysqli_fetch_assoc($result) // array associative
// $row = mysqli_fetch_array($result) // keduanya

$rows = [];
while ( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
}

// tampung ke variabel pegawai
$pegawai = $rows;

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

    <?php $i = 1; 
    foreach ($pegawai as $pgw) : ?>
    <tr>
        <td><?= $i++; ?></td>
        <td>
            <a href="">Ubah</a> | <a href="">Hapus</a>
        </td>
        <td><img src="img/<?= $pgw["gambar"]; ?>" width="50"></td>
        <td><?= $pgw["nip"]; ?></td>
        <td><?= $pgw["nama"]; ?></td>
        <td><?= $pgw["hp"]; ?></td>
        <td><?= $pgw["golongan"]; ?></td>
        <td><?= $pgw["gaji"]; ?></td>
    </tr>
    <?php endforeach; ?>

</table>
    
</body>
</html>