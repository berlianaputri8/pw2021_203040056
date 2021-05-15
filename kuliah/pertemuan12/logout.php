<?php
/*
    Berliana Putri
    203040056
    github.com/berlianaputri8/pw2021_203040056
    Pertemuan 12 (10 Mei 2021)
    Materi pertemuan kali ini membuat mempelajari mengenai Login & Register

*/
?>

<?php
session_start();
session_destroy();
header("Location: login.php");
exit;

?>