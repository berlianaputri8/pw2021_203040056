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

// jika tidak ada id di url
if(!isset($_GET['id'])) {
    header("Location: index.php");
    exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$pgw = query("SELECT * FROM pegawai WHERE id = $id");

// cek apakah tobol ubah sudah di tekan 
if (isset($_POST['ubah'])) {
    if ( ubah($_POST) > 0 ) {
        echo "<script>
                alert('data berhasil diubah!');
                document.location.href = 'index.php';
            </script>";
    }else {
        echo "data gagal diubah!";
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
<h3>Form Ubah Data Pegawai</h3>

<form action="" method="POST">
  <input type="hidden" name="id" value="<?= $pgw['id']; ?>">
    <ul>
        <li>
            <label for="">
                NIP : 
                <input type="text" name="nip" autofocus required value="<?= $pgw['nip']; ?>">
            </label> 
        </li>
        <li>
            <label for="">
                Nama : 
                <input type="text" name="nama" required value="<?= $pgw['nama']; ?>">
            </label>
        </li>
        <li>
            <label for="">
                No Hp : 
                <input type="text" name="hp" required value="<?= $pgw['hp']; ?>">
            </label>
        </li>
        <li>
            <label for="">
                Golongan : 
                <input type="text" name="golongan" required value="<?= $pgw['golongan']; ?>">
            </label>
        </li>
        <li>
            <label for="">
                Gaji : 
                <input type="text" name="gaji" required value="<?= $pgw['gaji']; ?>">
            </label>
        </li>
        <li>
            <label for="">
                Gambar : 
                <input type="text" name="gambar" required value="<?= $pgw['gambar']; ?>">
            </label>
        </li>
        <li>
            <button type="submit" name="ubah">Ubah Data!</button>
        </li>
    </ul>
</form>
    
</body>
</html>