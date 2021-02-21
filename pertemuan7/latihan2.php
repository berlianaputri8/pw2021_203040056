<?php

// cek apakah tidak ada data di $_GET
if( !isset($_GET["nip"]) || 
    !isset($_GET["nama"]) ||
    !isset($_GET["telepon"]) ||
    !isset($_GET["golongan"]) ||
    !isset($_GET["gaji"])){
    // redirect
    header("Location: latihan1.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Pegawai</title>
</head>
<body>

<ul>
    <li><img src="img/<?= $_GET["gambar"]; ?>"></li>
    <li><?= $_GET["nip"]; ?></li>
    <li><?= $_GET["nama"]; ?></li>
    <li><?= $_GET["telepon"]; ?></li>
    <li><?= $_GET["golongan"]; ?></li>
    <li><?= $_GET["gaji"]; ?></li>
</ul>

<a href="latihan1.php">Kembali ke daftar Pegawai</a>
    
</body>
</html>