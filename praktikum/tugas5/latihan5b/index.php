<?php
// Berliana Putri
// 203040056
// Shift Jumat 10.00 - 11.00
?>

<?php

require 'php/functions.php';

$mobil = query("SELECT * FROM mobil")
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

    <h2><center>MINI COOPER COLECTIONS</center></h2>
    <div class="container mb-3 mt-3" >
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
            </tr>
        </thead>
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
                </tr>
                <?php $i++; ?>
            <?php endforeach ?>
            
        </table>
    </div>
    
</body>
</html>