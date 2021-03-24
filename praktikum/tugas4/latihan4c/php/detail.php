<?php

    if (!isset($_GET['id'])) {
        header("location: ../index.php");
        exit;
    }

    require 'functions.php';

    $id = $_GET['id'];

    $mobil = query("SELECT * FROM mobil WHERE id = $id")[0];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Mobil</title>
</head>
<body>

    <div class="container">
        <div class="gambar">
            <img src="../assets/img/<?= $mobil["picture"]; ?>" alt="">
        </div>
        <div class="keterangan">
            <p><?= $mobil["name"]; ?></p>
            <p><?= $mobil["power"]; ?></p>
            <p><?= $mobil["acceleration"]; ?></p>
            <p><?= $mobil["fuel"]; ?></p>
            <p><?= $mobil["drive"]; ?></p>
            <p><?= $mobil["price"]; ?></p>
        </div>

        <button class="tombol-kembali"><a href="../index.php"></a>Back</button>
    </div>
    
</body>
</html>