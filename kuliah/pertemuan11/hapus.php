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

// mengambil id dari url
$id = $_GET['id'];

if(hapus ($id) > 0 ) {
    echo "<script>
            alert('data berhasil dihapus!');
            document.location.href = 'index.php';
        </script>";
    }else {
        echo "data gagal dihapus!";
    }

?>