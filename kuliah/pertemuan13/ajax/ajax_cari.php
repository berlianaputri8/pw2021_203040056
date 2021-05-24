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
require '../functions.php';

$pegawai = cari($_GET['keyword']);

?>

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