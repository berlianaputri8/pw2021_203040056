<?php
// Berliana Putri
// 203040056
// Shift Jumat 10.00 - 11.00
?>

<?php

require 'php/functions.php';

if(isset($_GET['cari'])) {
    $keywoard = $_GET['keywoard'];
    $mobil = query("SELECT * FROM mobil WHERE 
                    name LIKE '%$keywoard%' OR
                    power LIKE '%$keywoard%' OR
                    acceleration LIKE '%$keywoard%' OR
                    fuel LIKE '%$keywoard%' OR
                    drive LIKE '%$keywoard%' OR
                    price LIKE '%$keywoard%' OR
                    picture LIKE '%$keywoard%' ");
} else {
    $mobil = query("SELECT * FROM mobil");
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <title>Mini Cooper</title>
</head>
<body>

    </div>
    <h2><center>MINI COOPER COLECTIONS</center></h2>
    <form action="" method="get">
        <input type="text" name="keywoard" autofocus placeholder="search..">
        <button type="submit" name="cari" class="waves-effect brown lighten-2 btn"><i class="material-icons left">search</i>Cari </button>
    </form><br>

    <a href="php/login.php" class="waves-effect brown lighten-2 btn">login</a><br></br>

    <div class="container mb-3 mt-3" class="card-panel teal lighten-2">
        <table class="striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Picture</th>
                <th>Type</th>
                <th>Power</th>
                <th>Acceleration</th>
                <th>Fuel Type</th>
                <th>Drive </th>
                <th>Price</th>
                <th>Detail</th>
            </tr>
        </thead>
        <?php if(empty($mobil)) : ?>
            <tr>
                <td colspan="7">
                    <h1>Data tidak ditemukan</h1>
                </td>
            </tr>
        <?php else : ?>

            <?php $i = 1; ?>
            <?php foreach ($mobil as $mb) : ?>
                <tr>
                    <td><?= $i ?></td>
                    <td>
                        <img src="assets/img/<?= $mb["picture"]; ?>">
                    </td>
                    <td><?= $mb["name"]; ?></td>
                    <td><?= $mb["power"]; ?></td>
                    <td><?= $mb["acceleration"]; ?></td>
                    <td><?= $mb["fuel"]; ?></td>
                    <td><?= $mb["drive"]; ?></td>
                    <td><?= $mb["price"]; ?></td>
                    <td>
                        <a href="php/detail.php?id=<?= $i ?>" <?= $mb["name"] ?> class="waves-effect brown lighten-2 btn">Detail</a>
                    </td>
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
        <?php endif; ?>
            
        </table>
    </div>
    
</body>
</html>