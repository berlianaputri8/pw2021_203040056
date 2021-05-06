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
    
    $gambar = htmlspecialchars($data['gambar']);
    $nip = htmlspecialchars($data['nip']);
    $nama = htmlspecialchars($data['nama']);
    $hp = htmlspecialchars($data['hp']);
    $golongan = htmlspecialchars($data['golongan']);
    $gaji = htmlspecialchars($data['gaji']);
    

    $query = "INSERT INTO
                pegawai
                VALUES 
                (null, '$nip', '$nama', '$hp', '$golongan', '$gaji', '$gambar');
            ";
    mysqli_query($conn, $query)or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function hapus ($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM pegawai WHERE id = $id") or die (mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function ubah($data) 
{
    $conn = koneksi();

    $id = $data['id'];
    $nip = htmlspecialchars($data['nip']);
    $nama = htmlspecialchars($data['nama']);
    $hp = htmlspecialchars($data['hp']);
    $golongan = htmlspecialchars($data['golongan']);
    $gaji = htmlspecialchars($data['gaji']);
    $gambar = htmlspecialchars($data['gambar']);

    $query = "UPDATE pegawai SET
                nip = '$nip',
                nama = '$nama',
                hp = '$hp',
                golongan = '$golongan',
                gaji = '$gaji';
                gambar = '$gambar'
              WHERE id = '$id'; 
            ";
    mysqli_query($conn, $query)or die(mysqli_error($conn));
    return mysqli_affected_rows($conn);
}

function cari ($keyword) 
{
    $conn = koneksi();

    $query = "SELECT * FROM pegawai
                WHERE 
                nama LIKE '%$keyword%' OR 
                nip LIKE '%$keyword%'";

    $result = mysqli_query($conn, $query);

    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
      $rows[] = $row;
    }

    return $rows;
}

?>