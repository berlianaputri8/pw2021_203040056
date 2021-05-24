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

if(!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}

require 'functions.php';

// cek apakah tobol tambah sudah di tekan 
if (isset($_POST['tambah'])) {
    if ( tambah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'index.php';
            </script>";
    }else {
        echo "data gagal ditambahkan!";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Pegawai</title>
</head>
<body>
<h3>Form Tambah Data Pegawai</h3>

<form action="" method="POST" enctype="multipart/form-data">
    <ul>
        
        <li>
            <label>
                NIP : 
                <input type="text" name="nip" autofocus required>
            </label> 
        </li>
        <li>
            <label>
                Nama : 
                <input type="text" name="nama" required>
            </label>
        </li>
        <li>
            <label>
                No Hp : 
                <input type="text" name="hp" required>
            </label>
        </li>
        <li>
            <label>
                Golongan : 
                <input type="text" name="golongan" required>
            </label>
        </li>
        <li>
            <label>
                Gaji : 
                <input type="text" name="gaji" required>
            </label>
        </li>
        <li>
            <label>
                Gambar : 
                <input type="file" name="gambar" class="gambar" onchange="previewImage()">
            </label>
            <img src="img/noimg.png" width="120"  style="display: block;" class="img-preview">
        </li>
        <li>
            <button type="submit" name="tambah">Tambah Data!</button>
        </li>
    </ul>
</form>

<script src="js/script.js"></script>
    
</body>
</html>