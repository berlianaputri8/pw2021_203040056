<?php
/*
    Berliana Putri
    203040056
    github.com/berlianaputri8/pw2021_203040056
    Pertemuan 12 (10 Mei 2021)
    Materi pertemuan kali ini membuat mempelajari mengenai Login & Register

*/
?>

<?php
session_start();

if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

$pegawai = query("SELECT * FROM pegawai");

// ketika tombol cari diklik
if(isset($_POST['cari'])) {
    $pegawai = cari($_POST['keyword']);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
<a href="logout.php">Logout</a>

<h1>Daftar Pegawai</h1>

<a href="tambah.php">Tambah Data Mahasiswa</a>
<br><br>

<form action="" method="POST">
  <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus>
  <button type="submit" name="cari">Cari!</button>
</form>
<br>

<table border="1" cellpadding="10" cellspacing="0">

    <tr>
        <th>No.</td>
        <th>Gambar</td>
        <th>Nama</th>
        <th>Aksi</th>
    </tr>

    <?php if(empty($pegawai)) : ?>
        <tr>
            <td colspan="4">
                <p style="color: red; font-style: italic;">data mahasiswa tidak ditemukan!</p>
            </td>
        </tr>
    <?php endif;?>

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