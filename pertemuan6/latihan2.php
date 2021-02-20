<?php

// $mahasiswa = [
//     ["Berliana Putri", "203040056", "berlianaap08@gmail.com", "Teknik Informatika"],
//     ["Putri", "203040072", "putri8@gmail.com", "Teknik Industri"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$pegawai = [
    [
        "nip" => "001",
        "nama" => "Ahmad  Baharudin",
        "no telepon" => "08123334543",
        "golongan" => "3",
        "gaji" => "1250000",
        "gambar" => "1.jpg"
    ],
    [
        "nip" => "002",
        "nama" => "Amin Imsory",
        "no telepon" => "081265783890",
        "golongan" => "2",
        "gaji" => "1350000",
        "gambar" => "2.jpg"
    ],
    [
        "nip" => "003",
        "nama" => "Zulkarnaen",
        "no telepon" => "087765478914",
        "golongan" => "1",
        "gaji" => "1450000",
        "gambar" => "3.jpg"
    ],
    [
        "nip" => "004",
        "nama" => "Dewi Sudewa",
        "no telepon" => "081265783890",
        "golongan" => "2",
        "gaji" => "1350000",
        "gambar" => "4.jpg"
    ],
    [
        "nip" => "005",
        "nama" => "Dodong M",
        "no telepon" => "081678392466",
        "golongan" => "3",
        "gaji" => "1250000",
        "gambar" => "5.jpg"
    ],
    [
        "nip" => "006",
        "nama" => "Budi P",
        "no telepon" => "087768543210",
        "golongan" => "1",
        "gaji" => "1450000",
        "gambar" => "6.jpg"
    ],
    [
        "nip" => "007",
        "nama" => "Desi Ratnasary",
        "no telepon" => "081923408958",
        "golongan" => "2",
        "gaji" => "1350000",
        "gambar" => "7.jpg"
    ],
    [
        "nip" => "008",
        "nama" => "Azam M",
        "no telepon" => "081345728084",
        "golongan" => "3",
        "gaji" => "1300000",
        "gambar" => "8.jpg"
    ],
    [
        "nip" => "009",
        "nama" => "Jono",
        "no telepon" => "087743560867",
        "golongan" => "1",
        "gaji" => "1450000",
        "gambar" => "9.jpg"
    ],
    [
        "nip" => "010",
        "nama" => "Juliana",
        "no telepon" => "081468087424",
        "golongan" => "2",
        "gaji" => "1350000",
        "gambar" => "10.jpg"
    ]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pegawai</title>
</head>
<body>
    <h1>Daftar Pegawai</h1>
    
    <?php foreach( $pegawai as $pgw) : ?>
    <ul>
        <li>
            <img src="img/<?= $pgw["gambar"] ?>">
        </li>
        <li>NIP : <?= $pgw["nip"]; ?></li>
        <li>Nama : <?= $pgw["nama"]; ?></li>
        <li>No Telepon : <?= $pgw["no telepon"]; ?></li>
        <li>Golongan : <?= $pgw["golongan"]; ?></li>
        <li>Gaji : <?= $pgw["gaji"]; ?></li>
    </ul>
    <?php endforeach; ?>    
    
</body>
</html>

<!-- tugas
cari min 5 item jangan Mahasiswa, harus ada gambar, isi data 10
con mobil -->