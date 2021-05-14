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

function koneksi() {
    $conn = mysqli_connect("localhost", "root", "", "phpdasar");

    return $conn;
    
}

function query($query) {
    $conn = koneksi();
    
    $result = mysqli_query($conn, $query);

    // jika hasilnya hanya 1 data
    if (mysqli_num_rows($result) == 1) {
        return mysqli_fetch_assoc($result);
    }

    $rows = [];
    while ( $row = mysqli_fetch_assoc($result) ) {
    $rows[] = $row;
    }
    return $rows;
}

function tambah($data) 
{
    $conn = koneksi();
    
    $nip = htmlspecialchars($data['nip']);
    $nama = htmlspecialchars($data['nama']);
    $hp = htmlspecialchars($data['hp']);
    $golongan = htmlspecialchars($data['golongan']);
    $gaji = htmlspecialchars($data['gaji']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "INSERT INTO
                pegawai
                VALUES 
                (null, '$nip', '$nama', '$hp', '$golongan', '$gaji', '$gambar');
            ";
    mysqli_query($conn, $query);
    echo mysqli_errno($conn);
    return mysqli_affected_rows($conn);
}

?>