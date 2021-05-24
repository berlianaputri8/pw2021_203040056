<?php
/*
    Berliana Putri
    203040056
    github.com/berlianaputri8/pw2021_203040056
    Pertemuan 13 (15 Mei 2021)
    Materi pertemuan kali ini mempelajari mengenai AJAX Live Searching & Upload Gambar

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
  <input type="text" name="keyword" size="40" placeholder="masukkan keyword pencarian.." autocomplete="off" autofocus class="keyword">
  <button type="submit" name="cari" class="tombol-cari">Cari!</button>
</form>
<br>

<div class="container">
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
</div>

<script src="js/script.js"></script>
<script>
    const tombolCari = document.querySelector('.tombol-cari');
    const keyword = document.querySelector('.keyword');
    const container = document.querySelector('.container');

    // // hilangkan tombol cari
    tombolCari.style.display = 'none';

    // // event ketika menuliskan keyword
    keyword.addEventListener('keyup', function() {
    //     // ajax

    //     // xmlhhttprequest
    //     // const xhr = new XMLHttpRequest();

    //     // xhr.onreadystatechange = function() {
    //     //     if(xhr.readyState == 4 && xhr.status == 200) {
    //     //         container.innerHTML = xhr.responseText;
    //     //     }
    //     // }

    //     // xhr.open('get', 'ajax/ajax_cari.php?keyword=' + keyword.value);
    //     // xhr.send();

    //     // fetch()
        fetch('ajax/ajax_cari.php?keyword=' + keyword.value)
        .then((response) => response.text())
        .then((response) => (container.innerHTML = response));
    }); 
</script>
    
</body>
</html>