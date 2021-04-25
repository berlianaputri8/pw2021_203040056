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

// cek apakah tobol tambah sudah di tekan 
if (isset($_POST['tambah'])) {
    if ( tambah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil ditambahkan!');
                document.location.href = 'latihan3.php';
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

<form action="" method="POST">
    <ul>
        <li>
            <label for="">
                NIP : 
                <input type="text" name="nip" autofocus required>
            </label> 
        </li>
        <li>
            <label for="">
                Nama : 
                <input type="text" name="nama" required>
            </label>
        </li>
        <li>
            <label for="">
                No Hp : 
                <input type="text" name="hp" required>
            </label>
        </li>
        <li>
            <label for="">
                Golongan : 
                <input type="text" name="golongan" required>
            </label>
        </li>
        <li>
            <label for="">
                Gaji : 
                <input type="text" name="gaji" required>
            </label>
        </li>
        <li>
            <label for="">
                Gambar : 
                <input type="text" name="gambar" required>
            </label>
        </li>
        <li>
            <button type="submit" name="tambah">Tambah Data!</button>
        </li>
    </ul>
</form>
    
</body>
</html>