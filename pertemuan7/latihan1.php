<?php

/*
    Berliana Putri
    203040056
    github.com/berlianaputri8/pw2021_203040056
    Pertemuan 7 (20 Februari 2021)
    Materi minggu ini mempelajari mengenai GET

*/

// Variabel Scope / lingkungan variabel
    // $x = 10;

    // function tampilx() {
    //     global $x;
    //     echo $x;
    // }
    // tampilx();

// SUPERGLOBALS
// variabel global milik PHP
// merupakan Array Associative
    // var_dump($_POST);


// $_GET
    // $_GET["nama"] = "Berliana Putri";
    // $_GET["nrp"] = "203040056";
    // var_dump($_GET);

$pegawai = [
    [
        "nip" => "001",
        "nama" => "Ahmad  Baharudin",
        "telepon" => "08123334543",
        "golongan" => "3",
        "gaji" => "1250000",
        "gambar" => "1.jpg"
    ],
    [
        "nip" => "002",
        "nama" => "Amin Imsory",
        "telepon" => "081265783890",
        "golongan" => "2",
        "gaji" => "1350000",
        "gambar" => "2.jpg"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET</title>
</head>
<body>
    <h1>Daftar Pegawai</h1>
<ul> 
    <?php foreach( $pegawai as $pgw) : ?>
        <li>
            <a href="latihan2.php?nip=<?= $pgw["nip"]; ?>&nama=<?= $pgw["nama"]; ?>&telepon=<?= $pgw["telepon"]; ?>&golongan=<?= $pgw["golongan"]; ?>&gaji=<?= $pgw["gaji"]; ?>&gambar=<?= $pgw["gambar"]; ?>"><?= $pgw["nama"]; ?></a>
        </li>
    <?php endforeach; ?>  
</ul>

    
</body>
</html>